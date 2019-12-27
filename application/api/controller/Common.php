<?php
/*
 * @Description: api 模块公用控制器
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-25 18:25:25
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-27 17:16:58
 */
namespace app\api\controller;

use think\Controller;
use app\common\lib\Aes;
use app\common\lib\IAuth;
use app\common\lib\exception\ApiException;
use app\common\lib\Time;
use think\Cache;

class Common extends Controller {
    /**
     * header信息
     *
     * @var string
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-27
     */
    public $headers = '';
    
    /**
     * 初始化的方法
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-25
     * @return void
     */
    public function _initialize() {
        $this->checkRequestAuth();
        //$this->testAes();
    }
  
    public function checkRequestAuth() {
        // 获取headers
        $headers = request()->header(); 

        // sign 加密需要客户端工程师 解密需要：服务端工程师
        // 基础参数校验
        if(empty($headers['sign'])) {
            throw new ApiException('sign不存在', 400);
        }
        if(!in_array($headers['app_type'],config('app.apptypes'))) {
            throw new ApiException('app_type不合法', 400);
        }
        
        if(!IAuth::checkSignPass($headers)) {
            throw new ApiException('授权码sign失败', 401);
        }
        // sign可以存入文件 数据库 或者 redis等缓存起来
        Cache::set($headers['sign'], 1, config('app_sign_cache_time'));
        $this->headers = $headers;
    }

    public function testAes() {
        $data = [
            'did' => '123456dg',
            'version' => 1,
            'time' => Time::get13TimeTamp(),
        ];

        //echo  IAuth::setSign($data);exit;
        $str = '60S2hjeI1eTGjBOYIggHJoGcIn5BfSJCAIWmVQQj9gwOEgTqlNx1glUa3go6oWzf';
        echo (new Aes())->decrypt($str);exit;
    }
}
