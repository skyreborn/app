<?php
/*
 * @Description: 文章点赞逻辑
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-16 11:13:04
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-17 21:32:01
 */

namespace app\api\controller\v1;
use app\common\model\News;
use app\common\model\UserNews;
use app\common\lib\exception\ApiException;

class Upvote extends AuthBase {
    /**
     * 新闻点赞
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-16
     * @return void
     */
    public function save() {
        $id = input('post.id', 0, 'intval');
        if(empty($id)) {
            return show(config('code.error'), 'id不存在', [], 404);
        }
        $data = [
            'news_id' => $id,
            'user_id' => $this->user->id,
        ];
        // 判断这个id的新闻文章是否存在
        $news = News::get(['id' => $id]);
        if($news && $news->status == 1) {
            $userNews = UserNews::get($data);
            if(empty($userNews)) {
                try{
                    $userNewsId = model('UserNews')->add($data);
                }catch (\Excepton $e) {
                    return show(config('code.error'), '内部错误，点赞失败', [], 500);
                }
            }else {
                return show(config('code.error'), '您已经点赞了', [], 404);
            }
        }else {
            return show(config('code.error'), '新闻不存在', [], 404);
        }

        if(!empty($userNewsId)) {
            model('News')->where(['id' => $id])->setInc('upvote_count');
            return show(config('code.success'), 'ok', [], 202);
        }else {
            return show(config('code.error'), '点赞失败', [], 403);
        }
    }

    /**
     * 取消点赞
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-17
     * @return void
     */
    public function delete() {
        $id = input('delete.id', 0, 'intval');
        if(empty($id)) {
            return show(config('code.error'), 'id不存在', [], 404);
        }
        $data = [
            'news_id' => $id,
            'user_id' => $this->user->id,
        ];
        // 判断这个id的新闻文章是否存在
        $news = News::get(['id' => $id]);
        if($news && $news->status == 1) {
            $dzId = UserNews::get($data);
            if(!empty($dzId)) {
                try{
                    $userNewsId = model('UserNews')->where($data)->delete();
                }catch (\Excepton $e) {
                    return show(config('code.error'), '内部错误，取消点赞失败', [], 500);
                }
            }else {
                return show(config('code.error'), '没有被点赞过，无法取消', [], 401);
            }
        }else {
            return show(config('code.error'), '新闻不存在', [], 404);
        }
        if(!empty($userNewsId)) {
            model('News')->where(['id' => $id])->setDec('upvote_count');
            return show(config('code.success'), 'ok', [], 202);
        }else {
            return show(config('code.error'), '取消点赞失败', [], 500);
        }        
        
    }

    /**
     * 查询该文章是否被该用户点赞过
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-17
     * @return void
     */
    public function read() {
        $id = input('param.id', 0, 'intval');
        if(empty($id)) {
            return show(config('code.error'), 'id不存在', [], 404);
        }
        $data = [
            'news_id' => $id,
            'user_id' => $this->user->id,
        ];
        // 判断这个id的新闻文章是否存在
        $news = News::get(['id' => $id]);        
        if($news && $news->status == 1) {
            $dzId = model('UserNews')->get($data);
        }else {
            return show(config('code.error'), '新闻不存在', [], 404);
        }        
        if($dzId) {
            return show(config('code.success'), 'ok', ['isUpvote' => 1], 200);
        } else{
            return show(config('code.success'), 'ok', ['isUpvote' => 0], 200);
        }      
    }
}