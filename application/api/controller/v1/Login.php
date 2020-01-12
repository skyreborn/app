<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-09 18:16:04
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-12 10:45:31
 */
namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\Alidayu;
use app\common\lib\IAuth;
use app\common\lib\Aes;
use app\common\lib\exception\ApiException;
use app\common\model\User;

class Login extends Common {
    
    public function save() {
        if(!request()->isPost()) {
            return show(config('code.error'), '您没有权限', '', 403);
        }

        $param = input('param.');
        if(empty($param['phone'])) {
            return show(config('code.error'), '手机号码不合法', '', 404);
        }
        if(empty($param['code'])) {
            return show(config('code.error'), '手机短信验证码不合法', '', 404);
        }
        // validate 严格校验（未完待续）

        $code = Alidayu::getInstance()->checkSmsIdentify($param['phone']);
        if($code != $param['code']) {
            return show(config('code.error'), '手机短信验证码不存在', '', 404);
        }

        $token = IAuth::setAppLoginToken($param['phone']);
        $data = [
            'token' => $token,
            'time_out' => strtotime("+".config('app.login_time_out_day')."days"),
        ];

        // 查询手机号是否存在
        $user = User::get(['phone' => $param['phone']]);
        if($user && $user->status == 1) {
            try {
                // 更新登录信息
                $id = model('User')->save($data, ['phone' => $param['phone']]);
            } catch (\Excepton $e) {
                return new ApiException('error', 400);
            }
        }else {
                // 第一次登录 注册数据
                $data['username'] ='sky粉'.$param['phone'];
                $data['status'] = 1;
                $data['phone'] = $param['phone'];
                try {
                    $id = model('User')->add($data);
                } catch (\Excepton $e) {
                    return new ApiException('error', 400);
                }
        }

        $obj = new Aes();
        if($id) {
            $result = [
                'token' => $obj->encrypt($token."||".$id),
            ];
            return show(config('code.success'), 'ok', $result, 201);
        }else {
            return show(config('code.error'), '登录失败', [], 403);
        }
    }
}
