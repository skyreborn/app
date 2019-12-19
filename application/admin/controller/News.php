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

    /**
     * 新闻列表逻辑
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-18
     * @return void
     */
    public function index() {
        // 获取数据 然后将数据填充到模板(复杂的逻辑重写到model层能更好的复用)

        // 模式一通过tp5内置的分页功能
        //$news = model('News')->getNews();

        // 模式二通过开源插件方式
        $data = input('param.');
        $query = http_build_query($data);
        $whereData= [];

        // 调用方法获取当前页和每页数据量
        $this->getPageAndSize($data);
        // 当前页
        $whereData['page'] = $this->page;
        $whereData['size'] = $this->size;
        // 获取满足条件的数据
        $news = model('News')->getNewsByCondition($whereData);
        // 获取满足条件的数据总数
        $total = model('News')->getNesCountByCondition($whereData);
        // 数据总页数
        $pageTotal = ceil($total/$whereData['size']);

        return $this->fetch('',[
            'news' => $news,
            'cats' => config('cat.lists'),
            'pageTotal' => $pageTotal,
            'curr' =>  $whereData['page'],
            'query' => $query,
        ]);
    }

    /**
     * 新闻添加逻辑
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-18
     * @return object
     */
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