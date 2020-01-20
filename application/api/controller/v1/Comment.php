<?php
/*
 * @Description: 评论功能相关逻辑
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-17 22:02:22
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-20 00:20:07
 */

namespace app\api\controller\v1;

use app\common\lib\exception\ApiException;

class Comment extends AuthBase {
    
    /**
     * 评论-回复功能
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-17
     * @return void
     */
    public function save() {
        // 过滤敏感词（未完待续）
        $data = input('post.', []);
        // validate（未完待续）
        
        // 通过news_id查询新闻是否存在(未完待续)

        $data['user_id'] = $this->user->id;

        try {
            $commentId = model('Comment')->add($data);
            if($commentId) {
                return show(config('code.success'), 'ok', [], 202);
            }else {
                return show(config('code.error'), '评论失败', [], 500);                
            }
        }catch (\Exception $e) {
            return show(config('code.error'), '内部错误，评论失败', [], 500);
        }   
    }

    /**
     * 获取评论列表
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-18
     * @return json
     */
    public function read() {
        $news_id = input('param.id', 0, 'intval');
        if(empty($news_id)) {
            return new ApiException('id is not', 404);
        }
        
        $param['news_id'] = $news_id;
        $count = model('Comment')->getNormalCommentsCountByCondition($param);

        $this->getPageAndSizeAndFrom(input('param.'));
        $comments = model('Comment')->getNormalCommentsByCondition($param, $this->from, $this->size);

        $result = [
            'total' => $count,
            'page_num' => ceil($count / $this->size),
            'list' => $comments,
        ];

        return show(config('code.success'), 'ok', $result, 202);
    }

} 