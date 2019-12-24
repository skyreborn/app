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
     * 获取数据然后将数据填充到模板(复杂的逻辑重写到model层能更好的复用)
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-18
     * @return void
     */
    public function index() {
        // 模式一通过tp5内置的分页功能
        //$news = model('News')->getNews();

        // 模式二通过开源插件方式
        $data = input('param.');
        // 使用http_build_query将key=>value的数组转变为url字符串
        $query = http_build_query($data);
        // 查询条件数组
        $whereData= [];
        // 按照时间段查询条件
        if(!empty($data['start_time']) && !empty('end_time') && $data['end_time'] > $data['start_time']) {
            $whereData['create_time'] = [
                ['gt', strtotime($data['start_time'])],
                ['lt', strtotime($data['end_time'])],
            ];
        }
        // 按照栏目查询条件
        if(!empty($data['catid'])) {
            $whereData['catid'] = intval($data['catid']);
        }
        // 按照标题查询条件
        if(!empty($data['title'])) {
            $whereData['title'] = ['like', '%'.$data['title'].'%'];
        }
        // 调用方法获取当前页和每页数据量
        $this->getPageAndSizeAndFrom($data);
        // 获取满足条件的数据
        $news = model('News')->getNewsByCondition($whereData,$this->from,$this->size);
        // 获取满足条件的数据总数
        $total = model('News')->getNesCountByCondition($whereData);
        // 数据总页数
        $pageTotal = ceil($total/$this->size);

        return $this->fetch('',[
            'news' => $news,
            'cats' => config('cat.lists'),
            'pageTotal' => $pageTotal,
            'curr' =>  $this->page,
            'query' => $query,
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'catid' => empty($data['catid']) ? '' : $data['catid'],
            'title' => empty($data['title']) ? '' : $data['title'],
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

    /**
     * 修改待完善
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-24
     * @return void
     */
    public function edit() {
        if(request()->isPost()) {
            $data = input('post.');
            $data['id'] = intval($data['id']);
            //var_dump($data);
            //通过validate验证表单数据
            $validate = validate('News');
            if(!$validate->check($data)) {
                $this->error($validate->getError());
            } 
            try {
                $res = model('News')->allowField(true)->save($_POST,['id' => $data['id']]);
                //echo $this->getLastSql();exit;
            }catch(\Exception $e) {
                return $this->result('', 0, $e->getMessage());
            }

            if($res) {
                return $this->result(['jump_url' =>url('news/index')] , 1, 'ok');
            }
            return $this->result('', 0, '修改失败');          
        }else{
            $data = input('param.');
            try {
                //获取到数据对象(简单的逻辑没必要另外写到model层)
                $new = model('News')->get(['id' => $data['id']]);
            }catch(\Exception $e){
                $this->error($e->getMessage());
            } 
            return $this->fetch('',[
                'cats' => config('cat.lists'),
                'new' => $new,
            ]); 
        }        
    }
}