<?php
/*
 * @Description: 评论功能相关逻辑
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-17 22:02:22
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-18 14:21:03
 */

namespace app\api\controller\v1;


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
}