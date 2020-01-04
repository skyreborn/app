<?php
/*
 * @Description: 新闻类模型
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-15 19:06:53
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 22:02:43
 */
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
    public function getNewsByCondition($condition = [], $from = 0, $size = 5) {
        if(!isset($condition['status'])) {
            // 筛选条件
            $condition['status'] = [
                'neq', config('code.status_delete')
            ];
        }

        // 排序方式
        $order = ['id' => 'desc'];
        $result = $this->where($condition)->field($this->_getListField())->limit($from, $size)->order($order)->select();
        //echo $this->getLastSql();
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
    public function getNesCountByCondition($condition = []) {
        if(!isset($condition['status'])) { 
            // 筛选条件
            $condition['status'] = [
                'neq', config('code.status_delete')
            ];
        }
        return $this->where($condition)->count();
    }

    /**
     * 获取首页头图数据
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-28
     * @param integer $num
     * @return array
     */
    public function getIndexHeadNormalNews($num = 4) {
        $data = [
            'status' => 1,
            'is_head_figure' => 1,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)->field($this->_getListField())->order($order)->limit($num)->select();
    }

    /**
     * 获取推荐的数据
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-28
     * @param integer $num
     * @return array
     */
    public function getPositionNormalNews($num = 20) {
        $data = [
            'status' => 1,
            'is_position' => 1,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)->field($this->_getListField())->order($order)->limit($num)->select();
    }

    /**
     * 获取排行榜数据
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-28
     * @param integer $num
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getRankNormalNews($num = 5) {
        $data = [
            'status' => 1,
        ];

        $order = [
            'read_count' => 'desc',
        ];

        return $this->where($data)->field($this->_getListField())->order($order)->limit($num)->select();
    }

    /**
     * 通用化获取参数的数据字段
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-28
     * @return void
     */
    private function _getListField() {
        return [
            'id',
            'catid',
            'image',
            'title',
            'read_count',
            'status',
            'is_position',
            'update_time',
            'create_time'
        ];
    }
}