<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-06 17:58:36
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-09 18:05:45
 */

namespace app\common\lib;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use think\Cache;
use think\Log;
/**
 * 阿里云发送短信基础类库(单例模式实现)
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2020-01-07
 */
class Alidayu {
    const LOG_TPL = "alidayu:";
    /**
     * 静态变量保存全局的实例
     *
     * @var [type]
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     */
    private static $_instance = null;

    /**
     * 私有构造方法不允许通过new 获取对象
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     */
    private function __construct() {
        
    }

    /**
     * 获取实例的方法
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     * @return object
     */
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
    /**
     * 禁止克隆
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     * @return void
     */
    private function __clone() {

    }

    /**
     * 发送短信验证码
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     * @param integer $phone
     * @return void
     */
    public function setSmsIdentify($phone = 0) {

        // 生成随机验证码
        $code =rand(1000, 9999);

        AlibabaCloud::accessKeyClient(config('aliyun.accessKeyId'), config('aliyun.accessSecret'))
                        ->regionId('cn-hangzhou')
                        ->asDefaultClient();
        try {
            $result = AlibabaCloud::rpc()
                                ->product('Dysmsapi')
                                // ->scheme('https') // https | http
                                ->version('2017-05-25')
                                ->action('SendSms')
                                ->method('POST')
                                ->host('dysmsapi.aliyuncs.com')
                                ->options([
                                                'query' => [
                                                'RegionId' => "cn-hangzhou",
                                                'PhoneNumbers' => $phone,
                                                'SignName' => config('aliyun.SignName'),
                                                'TemplateCode' => config('aliyun.TemplateCode'),
                                                'TemplateParam' => "{\"code\":\"$code\"}",
                                                ],
                                            ])
                                ->request();
            $result = $result->toArray();
            //print_r($resul);
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
            Log::write(self::LOG_TPL."set----".$e->getErrorMessage());
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
            Log::write(self::LOG_TPL."set----".$e->getErrorMessage());
        }

        if($result['Code'] == "OK") {
            // 设置验证码失效时间
            Cache::set($phone, $code, config('aliyun.identify_time'));
            return true;
        }
        return false;
    }
    
    /**
     * 根据手机号码查询验证码是否正常
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-07
     * @param integer $phone
     * @return int
     */
    public function checkSmsIdentify($phone = 0) {
        if(!$phone) {
            return false;
        }
        return Cache::get($phone);
    }

}