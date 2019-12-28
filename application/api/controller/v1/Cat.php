<?php
/*
 * @Description: 获取新闻栏目接口
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-27 17:26:37
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-28 08:53:38
 */
namespace app\api\controller\v1;
use app\api\controller\Common;

class Cat extends Common {
   public function read() {
       $cats = config('cat.lists');

       $result[] =  [
          'catid' => 0,
          'catname' =>'首页',
       ];
       foreach($cats as $catid => $catname) {
           $result[] = [
              'catid' => $catid,
              'catname' => $catname,
           ];
       }
       return show(config('code.success'), 'ok', $result, 200);
   } 
}