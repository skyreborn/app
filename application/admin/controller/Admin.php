<?php
namespace app\admin\controller;

use think\Controller;
use app\common\lib\IAuth;

class Admin extends Base {
	/**
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-05
	 * @return void
	 */
	function add() {
		if(request()->isPost()){
			$data = input('post.');
			//通过common文件夹下的规则验证表单数据
			$validate = validate('AdminUser');
			if(!$validate->check($data)) {
				$this->error($validate->getError());
			}
			$data['password'] = IAuth::setPassword($data['password']);
			$data['status'] = 1;
			try {
				//数据库的表明明是ent_admin_user在不指定表的情况下怎么知道是将数据插入哪一张表
				//查了手册疑点解除
				$id = model('AdminUser')->add($data);
			}catch (\Exception $e) {
				$this->error($e->getMessage());
			}
			if($id) {
				$this->success('id='.$id.'的用户新增成功');
			}else {
				$this->error('error');
			}
		}else{
			return $this->fetch();
		}
	}
}