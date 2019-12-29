<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-28 18:02:57
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 17:51:10
 */
namespace app\api\controller\v1;
use app\api\controller\Common;
use app\common\lib\exception\ApiException;

class News extends Common {
    /**
     * 根据栏目获取新闻接口
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-29
     * @return json
     */
    public function index() {
        // validate验证机制做相关校验（未完待续）
        $data = input('get.');
        $whereData['status'] = config('code.status_normal');

        if(!empty($data['catid'])) {
            $whereData['catid'] = input('get.catid', 0, 'intval');
        }
        // 搜索接口整合到了这（根据前端传来的值进行判断）
        if(!empty($data['title'])) {
            $whereData['title'] = ['like', '%'.$data['title'].'%'];
        }        

        $this->getPageAndSizeAndFrom($data);

        $total = model('News')->getNesCountByCondition($whereData);
        $news = model('News')->getNewsByCondition($whereData,$this->from,$this->size);

        $result = [
            'total' => $total,
            'page_num' => ceil($total/$this->size),
            'list' => $this->getDealNews($news),
        ];
        return show(config('code.success'), 'ok', $result, 200);              
    } 
    /**
     * 获取新闻详情接口
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-29
     * @return json
     */
    public function read() {
        $id = input('param.id', 0, 'intval');
        if(empty($id)) {
            return new ApiException('id is not ', 404);
        }

        // 通过id 去获取数据表里面的数据
        try{
            $news = model('News')->get($id);
        } catch (\Excepton $e) {
            return new ApiException('error', 400);
        }

        if(empty($news) || $news->status != config('code.status_normal')) {
            return new ApiException('不存在该新闻', 404);
        }

        try {
            // 调用tp5表字段自增函数
            model('News')->where(['id' => $id])->setInc('read_count');
        }catch(\Exception $e) {
            return new ApiException('error', 400);
        }

        $cats = config('cat.lists');
        $news->catname = $cats[$news->catid];
        return show(config('code.success'), 'OK', $news, 200);
    }  
}