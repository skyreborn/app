<?php
/*
 * @Description: 根据栏目获取新闻接口
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-28 18:02:57
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 11:06:58
 */
namespace app\api\controller\v1;
use app\api\controller\Common;

class News extends Common {

   public function index() {
        // validate验证机制做相关校验（未完待续）
        $data = input('get.');
        $whereData['status'] = config('code.status_normal');
        $whereData['catid'] = input('get.catid');
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