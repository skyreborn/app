<?php
namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
	public function index() {
		return $this->fetch();
	}

	public function check() {
		$data = input('post.');
		if(!captcha_check($data['code'])) {
			$this->error('验证码不正确!');
		}else {
			$this->success('ok');
		}
	}
}
