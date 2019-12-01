<?php
namespace app\common\model;
use think\Model;

class AdminUser extends Model {
	//数据库时间戳自动填充开启
	protected  $autoWriteTimestamp = true;
	//将数据添加进数据库
	public function add($data) {
		if(!is_array($data)) {
			exception('传递数据不合法');
		}
		$this->allowField(true)->save($data);

		return $this->id;
	}
}