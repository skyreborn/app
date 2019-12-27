<?php
/*
 * @Description: 返回服务器时间戳接口，方便前端比对时间是否一致
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-27 17:14:32
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-27 17:15:39
 */

namespace app\api\controller;

use think\Controller;

class Time extends Controller {

    public function index() {
        return show(1, 'OK', time());
    }
}