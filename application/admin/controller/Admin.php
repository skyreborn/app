<?php
namespace app\admin\controller;

use think\Controller;

class Admin extends Controller {
	function add() {
		if(request()->isPost()){
			$data = input('post.');
			//通过common文件夹下的规则验证表单数据
			$validate = validate('AdminUser');
			if(!$validate->check($data)) {
				$this->error($validate->getError());
			}
			$data['password'] = md5($data['password'].'_#tsmeng');
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