<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-27 17:26:37
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-04 22:50:18
 */
namespace app\api\controller\v1;
use app\api\controller\Common;
use app\common\lib\exception\ApiException;

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

    /**
     * 客户端初始化接口
     * 检测app是否需要升级
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-29
     * @return json
     */
    public function init() {
        $version = model('Version')->getLastNormalVersionByAppType($this->headers['app_type']);

        if(empty($version)) {
            return new ApiException('error', 404);
        }

        if($version->version > $this->headers['version']) {
            $version->is_update = $version->is_force == 1 ? 2 : 1;
        }else {
            $version->is_update = 0; // 0不需要更新 1需要更新 2强制更新
        }

        // 记录用户的基本信息 用于统计
        $actives = [
            'version' => $this->headers['version'],
            'app_type' => $this->headers['app_type'],
            'did' => $this->headers['did'],
        ];
        try {
            model('AppActive')->add($actives);
        }catch (\Exception $e) {

        }
        return show(config('code.success'), 'OK', $version, 200);
    }
}