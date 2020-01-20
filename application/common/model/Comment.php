<?php
/*
 * @Description: 新闻评论模型
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-10 11:29:13
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-19 23:07:05
 */

namespace app\common\model;
use think\Model;
use think\Db;
use app\common\model\Base;

class Comment extends Base {
    
    /**
     * 通过条件获取评论的数量
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-19
     * @param array $param
     * @return int
     */
    public function getNormalCommentsCountByCondition($param = []) {
        // status = 1（未完待续）
        $count = Db::table('ent_comment')
            ->alias(['ent_comment' => 'a', 'ent_user' => 'b'])
            ->join('ent_user', 'a.user_id = b.id AND a.news_id = '.$param['news_id'])
            ->count();
        return $count;          
    }

    /**
     * 通过条件获取评论列表数据
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-19
     * @return array
     */
    public function getNormalCommentsByCondition($param = [], $from = 0, $size = 5) {
        $result =  Db::table('ent_comment')
            ->alias(['ent_comment' => 'a', 'ent_user' => 'b'])
            ->join('ent_user', 'a.user_id = b.id AND a.news_id = '.$param['news_id'])
            ->limit($from = 0,  $size)
            ->order(['a.id' => 'desc'])
            ->select();

        return $result; 
    }
}