<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 分页样式方法(需要在模板里面调用方法{:pagination($news)})
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-18
 * @param [type] $obj
 * @return string
 */
function pagination($obj) {
    if(!$obj) {
        return '';
    }
    $params = request()->param();
    return '<div class="imooc-app">'.$obj->appends($params)->render().'</div>';
}

/**
 * 获取栏目名称
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-18
 * @param [type] $catId
 * @return void|string
 */
function getCatName($catId) {
    if(!$catId) {
        return '';
    }
    $cats = config('cat.lists');
    return !empty($cats[$catId]) ? $cats[$catId] : '';
}

/**
 * 根据数据返回是或者否
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-18
 * @param [type] $num
 * @return string
 */
function isYesNo($num) {
    return $num ? '<span style="color:red"> 是 </span>' : '<span> 否 </span>';
}