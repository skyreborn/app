<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-27 15:04:49
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-27 15:45:35
 */
namespace app\common\lib;

/**
 * 时间
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-27
 */
class Time {
    
    /**
     * 获取十三位的时间戳（十三位而不是十位是为了最大限度降低重复率提高唯一性）
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-27
     * @return int
     */
    public static function get13TimeTamp() {
        list($t1, $t2) = explode(' ', microtime());
        return $t2 . ceil($t1 * 1000);
    }
}