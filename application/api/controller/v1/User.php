<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-13 00:26:57
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-15 17:34:00
 */

namespace app\api\controller\v1;

use app\common\lib\Aes;
use app\common\model\User as Username;
use app\common\lib\IAuth;

class User extends AuthBase {
    /**
     * 获取用户信息
     * 用户的基本信息非常隐私、需要加密处理
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-14
     * @return void
     */
    public function read() {
        $obj = new Aes();
        return show(config('code.success'), 'ok', $obj->encrypt($this->user), 201);
    }
    /**
     * app用户信息修改
     * 通过put方法
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-15
     * @return json
     */
    public function update() {
        $postData = input('param.');
        // validate 进行校验（未完待续）
        $data = [];
        if(!empty($postData['image'])) {
            $data['image'] = $postData['image'];
        }

        if(!empty($postData['username'])) {
            $data['username'] = $postData['username'];
        }

        if(!empty($postData['sex'])) {
            $data['sex'] = $postData['sex'];
        }

        if(!empty($postData['signature'])) {
            $data['signature'] = $postData['signature'];
        }

        if(!empty($postData['password'])) {
            $data['password'] = IAuth::setPassword($postData['password']);
        }

        if(empty($data)) {
            return show(config('code.error'), '数据不合法', [], 404);
        }
        
        try {
            $id = model('User')->save($data, ['id' => $this->user->id]);
            if($id) {
                return show(config('code.success'), 'ok', [], 202);                               
            }else {
                return show(config('code.error'), '更新失败', [], 401);
            }
        } catch (\Excepton $e) {
             return show(config('code.error'), $e->getMessage(), [], 500);
        }                             
    }

    /**
     * 检测用户昵称是否存在（不允许修改）
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-15
     * @return boolean
     */
    public function isUserName() {
        $param = input('param.');
        // 查询用户昵称是否存在
        $user = Username::get(['id' => $this->user->id]);

        if($user && empty($user->username)) {
            return show(config('code.success'), 'ok', [], 201);
        } else {
            return show(config('code.error'), '昵称已经存在', [], 201);
        }
    }

}