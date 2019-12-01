<?php
namespace app\common\validate;

use think\Validate;

class AdminUser extends Validate {
	//管理员表单验证规则
	protected $rule = [
		'username' => 'require|max:20',
		'password' => 'require|max:20',
	];
}

