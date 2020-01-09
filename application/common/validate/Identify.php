<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-09 11:23:26
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-09 12:01:20
 */
namespace app\common\validate;

use think\Validate;
class Identify extends Validate {

    protected $rule = [
        'id' => 'require|number|length:11',
    ];
}
