<?php
namespace app\admin\controller;

use think\Controller;
use app\common\lib\IAuth;

class Login extends Controller {
	public function index() {
		return $this->fetch();
	}
	//登录相关业务
	public function check() {
		if(request()->isPost()) {
			$data = input('post.');
			//判断验证码
			if(!captcha_check($data['code'])) {
				$this->error('验证码不正确!');
			}
			//判断用户名和密码
			//通过common文件夹下的规则验证表单数据
			$validate = validate('Login');
			if(!$validate->check($data)) {
				$this->error($validate->getError());
			}
			try {
				//获取到数据对象
				$user = model('AdminUser')->get(['username' => $data['username']]);
			}catch(\Exception $e){
				$this->error($e->getMessage());
			}
			//数据库用户名校验
			if(!$user || $user->status != config('code.status_normal')) {
				$this->error('用户名不合法');
			}
			//数据库密码校验
			if(IAuth::setPassword($data['password']) != $user['password']) {
				$this->error('密码不正确');
			}
			//更新数据库登录时间 登录ip地址
			$udata = [
				'last_login_time' => time(),
				'last_login_ip' =>request()->ip(),
			];
			try{
				model('AdminUser')->save($udata,['id' => $user->id]);
			}catch (\Exception $e) {
				$this->error($e.getMessage());
			}
			//session保存登录用户信息
			session(config('admin.session_user'),$user,config('admin.session_user_scope'));
			$this->success('登录成功','index/index');
		}else {
				$this->error('请求不合法！');
		}
	}
	//退出登录
	public function logout() {
		session(null, config('admin.session_user_scope'));
		$this->redirect('login/index');
	}
}
