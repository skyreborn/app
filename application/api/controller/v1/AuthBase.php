<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-12 23:44:21
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-14 09:41:17
 */

namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\exception\ApiException;
use app\common\lib\Aes;
use app\common\model\User;

/**
 * 客户端auth登录权限基础类库
 * 1、每个接口（需要登录 个人中心 点赞 评论）都需要继承
 * 2、判定access_user_token是否合法
 * 3、用户信息=> user
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2020-01-12
 */
class AuthBase extends Common {
    /**
     * 登录用户的基本信息
     *
     * @var array
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-14
     */
    public $user = [];
    
    public function _initialize() {
        parent::_initialize();
        if(empty($this->isLogin())) {
           throw new ApiException('您没有登录', 401);
        }
    }
    
    public function isLogin() {
        
        if(empty($this->headers['access_user_token'])) {
            return false;
        }

        $obj = new Aes();
        $accessUserToken = $obj->decrypt($this->headers['access_user_token']);

        if(empty($accessUserToken)) {
            return false;
        }

        if(!preg_match('/||/', $accessUserToken)) {
            return false;        
        }

        list($token, $id) = explode("||", $accessUserToken);
        $user = User::get(['token'=> $token]);
        
        if(!$user || $user->status != 1) {
            return false;
        }
        // 判定时间是否过期
        if(time() > $user->time_out) {
            return false;
        }

        $this->user = $user;
        return true;
    }
}
