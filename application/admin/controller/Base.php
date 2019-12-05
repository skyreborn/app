<?php
namespace app\admin\controller;

use think\Controller;

/**
 * 后台基础类库
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-05
 */
class Base extends Controller {
	// 初始化的方法
	public function _initialize() {
		// 判断用户是否登录
		$isLogin = $this->islogin();
		if(!$isLogin) {
			return $this->redirect('login/index');
		}
	}
	/**
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-05
	 * @return boolean
	 */
	public function isLogin() {
		//获取session
		$user = session(config('admin.session_user'),'',config('admin.session_user_scope'));
		if($user && $user->id) {
			return true;
		}
		return false;
	}
} 
