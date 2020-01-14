<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-13 00:26:57
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-14 10:00:01
 */

namespace app\api\controller\v1;

class User extends AuthBase {
    public function save() {
        var_dump($this->user);    
    }
}