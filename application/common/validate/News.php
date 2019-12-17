<?php
namespace app\common\validate;

use think\Validate;

class News extends Validate {
	//新闻表单验证规则
	protected $rule = [
		'title' => 'require|max:50',
        'catid' => 'require|max:20',
	];
}

