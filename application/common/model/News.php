<?php
namespace app\common\model;
use think\Model;
use app\common\model\Base;

class News extends Base {
    /**
     * 后台获取新闻列表数据并自动化分页(tp5内置方式)
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-17
     * @return array
     */
    public function getNews($data = []) {
        // 查询条件
        $data['status'] = [
            'neq', config('code.status_delete')
        ];

        // 排序方式
        $order = ['id' => 'desc'];

        $result = $this->where($data)->order($order)->paginate();
        return $result;
    }

    /**
     * 根据条件来获取列表数据(引入开源插件来进行分页)
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-19
     * @param array $param
     * @return object
     */
    public function getNewsByCondition($param = []) {
        // 筛选条件
        $condition['status'] = [
            'neq', config('code.status_delete')
        ];
        // 排序方式
        $order = ['id' => 'desc'];
        // 从那条数据开始取
        $from = ($param['page'] - 1) * $param['size'];

        $result = $this->where($condition)
        ->limit($from, $param['size'])
        ->order($order)
        ->select();
        return $result;
    }

    /**
     * 根据条件获取满足条件的表数据总数
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-19
     * @param array $param
     * @return int
     */
    public function getNesCountByCondition($param = []) {
        // 筛选条件
        $condition['status'] = [
            'neq', config('code.status_delete')
        ];
        
        return $this->where($condition)
        ->count();
    }
}