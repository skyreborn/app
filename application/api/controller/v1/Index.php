<?php
/*
 * @Description: 新闻首页接口
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-27 17:26:37
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 18:00:05
 */
namespace app\api\controller\v1;
use app\api\controller\Common;

class Index extends Common {
   /**
    * 获取首页接口
    *
    * @Author sky 1127820180@qq.com
    * @DateTime 2019-12-28
    * @return void
    */
    public function index() {
       // 头条数据
      $heads = model('News')->getIndexHeadNormalNews();
      $heads = $this->getDealNews($heads);

      // 推荐数据
      $positions = model('News')->getPositionNormalNews();
      $positions = $this->getDealNews($positions);
      
      // 封装数据
      $result = [
          'heads' => $heads,
          'positions' => $positions,
      ];

      return show(config('code.success'), 'OK', $result, 200);
  }
}