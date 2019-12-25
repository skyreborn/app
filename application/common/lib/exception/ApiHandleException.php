<?php
/*
 * 重写render方法返回app可以识别的异常信息
 * @Author: 1127820180@qq.com 
 * @Date: 2019-12-25 09:50:55 
 * @Last Modified by: 1127820180@qq.com
 * @Last Modified time: 2019-12-25 10:31:20
 */
namespace app\common\lib\exception;

use think\exception\Handle;

class ApiHandleException extends Handle {
    /**
     * http 状态码 
     * @var integer
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-25
     */
    public $httpCode = 500;

    public function render(\Exception $e) {
        // 没上线之前有助于服务端开发人员调试
        if(config('app_debug') == true) {
            return parent::render($e);
        }
        if($e instanceof ApiException) {
            $this->httpCode = $e->httpCode;
        }
        return show(0, $e->getMessage(), [], $this->httpCode);
    }
    
}


