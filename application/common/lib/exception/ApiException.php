<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-25 10:44:26
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-25 11:35:39
 */
namespace app\common\lib\exception;
use think\Exception;

class ApiException extends Exception {

    public $message = '';
    public $httpCode = 500;
    public $code = 0;

    /**
     * Undocumented function
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-25
     * @param string $message
     * @param integer $httpCode
     * @param integer $code
     */
    public function __construct($message = '', $httpCode = 0, $code = 0) {
        $this->httpCode = $httpCode;
        $this->message = $message;
        $this->code = $code;
    }
    
}