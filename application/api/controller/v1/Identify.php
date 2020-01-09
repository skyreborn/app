<?php
/*
 * @Description: 短信验证
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-09 11:10:37
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-09 12:04:03
 */

namespace app\api\controller\v1;
use app\api\controller\Common;
use app\common\lib\Alidayu;

class Identify extends Common {
    /**
     * 设置短信验证码
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2020-01-09
     * @return void
     */
    public function save() {
        // 资源路由post方法传递过来参数
        if(!request()->isPost()) {
            return show(config('code.error'), '您提交的数据不合法', [], 403);
        }

        // 校验数据
        $validate = validate('Identify');
        if(!$validate->check(input('post.'))) {
            return show(config('code.error'), $validate->getError(), [], 403);
        }
        
        $id = input('param.id');
        $result = Alidayu::getInstance()->setSmsIdentify($id);
        if($result) {
            return show(config('code.success'),'ok', [], 201);
        }else {
            return show(config('code.error'),'no', [], 403);
        }
    }
}
