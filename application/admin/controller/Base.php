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
	// 第几页
	public $page = '';
	// 每页显示条数
	public $size = '';
	// 查询条件的起始值
	public $from = 0;
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

	/**
	 * 获取分页page size 内容 查询的起始值from
	 * 
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-19
	 * @param [type] $data
	 * @return void
	 */
	public function getPageAndSizeAndFrom($data) {

        $this->page = !empty($data['page']) ? $data['page'] : 1;
		$this->size = !empty($data['size']) ? $data['size'] : config('paginate.list_rows');	
		$this->from = ($this->page - 1) * ($this->size);
	}
} 
