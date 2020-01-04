<?php
/*
 * @Description: 版本升级类模型
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-29 21:27:13
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 22:25:50
 */

namespace app\common\model;
use think\Model;
use app\common\model\Base;

class Version extends Base {
    /**
     * 通过app_type获取最后一条版本内容
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-29
     * @param string $app_type
     * @return object
     */
    public function getLastNormalVersionByAppType($app_type = '') {
        $data = [
            'status' => 1,
            'app_type' => $app_type,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)->order($order)->limit(1)->find();
    }
}