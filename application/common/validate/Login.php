<?php
namespace app\common\validate;

use think\Validate;

class Login extends Validate {
	//登录表单验证规则
	protected $rule = [
		'username' => 'require|max:20',
		'password' => 'require|max:20',
	];
}

