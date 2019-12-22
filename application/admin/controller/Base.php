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
	// 数据库表名字
	public $model = '';
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

	/**
	 * 删除逻辑（一般是通过修改字段状态实现，避免误删，脏数据）
	 *
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-21
	 * @param integer $id
	 * @return json
	 */
	public function delete($id = 0) {
		if(!intval($id)) {
			return $this->result('', 0, 'ID不合法');
		}

		//通过id查询记录是否存在（待完善）

		// 动态获取表（控制器类名和表名字一致）如果不一致的话呢？(在调用的控制器手动赋值$this->model="")
		$model = $this->model ? $this->model : request()->controller();
		try {
			$res = model($model)->save(['status' => -1], ['id' => $id]);
		}catch(\Exception $e) {
			return $this->result('', 0, $e->getMessage());
		}

		if($res) {
			return $this->result(['jump_url' => $_SERVER['HTTP_REFERER']], 1, 'ok');
		}
		return $this->result('', 0, '删除失败');
	}

	/**
	 * 修改状态逻辑
	 *
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-22
	 * @return void
	 */
	public function status() {
		$data = input('param.');
		// tp5 validate 机制校验 id status(未完待续)

		// 通过id去库中查询记录是否存在（未完待续）

		$model = $this->model ? $this->model : request()->controller();
		try {
			$res = model($model)->save(['status' => $data['status']], ['id' => $data['id']]);
		}catch(\Exception $e) {
			return $this->result('', 0, $e->getMessage());
		}

		if($res) {
			return $this->result(['jump_url' => $_SERVER['HTTP_REFERER']], 1, 'ok');
		}
		return $this->result('', 0, '修改失败');

	}
} 
