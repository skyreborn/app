<?php
/*
 * @Description: 验证权限相关
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-04 09:40:49
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-09 18:02:54
 */
namespace app\common\lib;

use app\common\lib\Aes;
use think\Cache;

class IAuth {

	/**
	 * 设置密码
	 * 
	 * @param string $data
	 * @return string
	 */
	public static function setPassword($data) {
		return md5($data.config('app.password_pre_halt'));
	}

	/**
	 * 生成每次请求的sign
	 * 
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-26
	 * @param array $data
	 * @return string
	 */
	public static function setSign($data = []) {
		// 按字典进行排序
		ksort($data);
		// 转换成地址格式
		$str = http_build_query($data);
		// 通过aes加密
		return $str = (new Aes())->encrypt($str);
	}

	/**
	 * 检查sign是否正常
	 * 
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-27
	 * @param array $data
	 * @return boolen
	 */
	public static function checkSignPass($data) {
		// 解密
		$str = (new Aes())->decrypt($data['sign']);

		if(empty($str)) {
			return false;
		}

		// 地址格式转换成数组
		parse_str($str, $arr);
		
        if(!is_array($arr) || empty($arr['did'])|| $arr['did'] != $data['did']) {
			return false;
		}
		
		if(!config('app_debug')) {
			if ((time() - ceil($arr['time'] / 1000)) > config('app.app_sign_time')) {
				return false;
			}
			// 唯一性判定
			if(Cache::get($data['sign'])) {
				return false;
			}
		}
		return true;
	}

	/**
	 * 设置token（唯一性）
	 *
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2020-01-09
	 * @param string $phone
	 * @return string
	 */
	public static function setAppLoginToken($phone = '') {
		$str = md5(uniqid(md5(microtime(true)), true));
		$str = sha1($str.$phone);
		return $str;
	}
}


