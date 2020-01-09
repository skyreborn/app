<?php
/*
 * @Author: 1127820180@qq.com 
 * @Date: 2019-12-24 19:23:25 
 * @Last Modified by: 1127820180@qq.com
 * @Last Modified time: 2019-12-25 10:29:57
 */
namespace app\api\controller;

use app\common\lib\exception\ApiException;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use app\common\lib\Alidayu;

class Test extends Common {
    public function index() {
       return [
           'sdfdsdf',
           'dfsdfsd',
       ] ;
    }

    public function  update($id = 0) {
        halt(input('put.'));
    }

    /**
     * post 新增
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-24
     * @return mixed
     */
    public function save() {
        $data = input('post.');
        
        return show(1,'ok',input('post.'), 201);
    }

    public function sendSms() {

        $PhoneNumbers = "15296599454";

        $TemplateParam = "{\"code\":\"1111\"}";

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
                                                'PhoneNumbers' => $PhoneNumbers,
                                                'SignName' => config('aliyun.SignName'),
                                                'TemplateCode' => config('aliyun.TemplateCode'),
                                                'TemplateParam' => $TemplateParam,
                                                ],
                                            ])
                                ->request();
            print_r($result->toArray());
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }
    }

    public function testSend() {

        $result = Alidayu::getInstance()->setSmsIdentify('15296599454');
        return show(1,'ok',$result, 201);

    }
}