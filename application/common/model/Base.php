<?php

namespace app\common\model;
use think\Model;

class Base extends Model {

    protected  $autoWriteTimestamp = true;

  /**
   * 新增
   *
   * @Author sky 1127820180@qq.com
   * @DateTime 2019-12-17
   * @param array $data
   * @return int
   */
    public function add($data) {
        if(!is_array($data)) {
            exception('传递数据不合法');
        }
        $this->allowField(true)->save($data);

        return $this->id;
    }

}