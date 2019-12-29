<?php
/*
 * @Description: 排行榜接口
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-29 16:48:00
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 17:59:22
 */

namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\exception\ApiException;

class Rank extends Common {
    /**
     * Undocumented function
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-29
     * @return void
     */
    function index() {
        try {
            $rands = model('News')->getRankNormalNews();
            $rands = $this->getDealNews($rands);
        } catch (\Excepton $e) {
            return new ApiException('error', 400);
        }

        return show(config('code.success'), 'ok', $rands, 200);
    }
}