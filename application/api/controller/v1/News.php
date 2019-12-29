<?php
/*
 * @Description: 根据栏目获取新闻接口
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-28 18:02:57
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 16:42:10
 */
namespace app\api\controller\v1;
use app\api\controller\Common;

class News extends Common {

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
}