<?php
namespace app\common\lib;

//验证权限相关
class IAuth {
	/**
	 * 设置密码
	 * @param string $data
	 * @return string
	 */
	public static function setPassword($data) {
		return md5($data.config('app.password_pre_halt'));
	}
}


