<?php
namespace app\admin\controller;

use  think\controller;

/**
 * 娱乐新闻管理逻辑
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-14
 */
class News extends Base {
    public function index() {
        return $this->fetch();
    }

    public function add() {

        if(request()->isPost()) {
            $data = input('post.');

            //通过validate验证表单数据
            $validate = validate('News');
            if(!$validate->check($data)) {
                $this->error($validate->getError());
            }

            //入库操作
            try {
                $id = model('News')->add($data);
            }catch (\Exception $e) {
                return $this->result(['err' => $e->getMessage()], 2, '数据库出错！');
            }

            if($id) {
                return $this->result(['jump_url' => url('news/index')], 1, '新增新闻成功！');
            } else {
                return $this->result('', 0, '新增新闻失败！');
            }
        }else {
            return $this->fetch('', [
                'cats' => config('cat.lists')
            ]);
        }
    }
}