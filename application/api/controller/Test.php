<?php
/*
 * @Author: 1127820180@qq.com 
 * @Date: 2019-12-24 19:23:25 
 * @Last Modified by: 1127820180@qq.com
 * @Last Modified time: 2019-12-25 10:29:57
 */
namespace app\api\controller;

use app\common\lib\exception\ApiException;

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
}