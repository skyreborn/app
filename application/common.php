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
 * tp5内置分页样式方法(需要在模板里面调用方法{:pagination($news)})
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-18
 * @param obj $obj
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
 * @param int $catId
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
 * @param int $num
 * @return string
 */
function isYesNo($num) {
    return $num ? '<span style="color:red"> 是 </span>' : '<span> 否 </span>';
}

/**
 * 状态
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-22
 * @param int $id
 * @param int $status
 * @return string
 */
function status($id, $status) {
    $controller = request()->controller();
    $sta = $status == 1 ? 0 : 1;
    $url = url($controller.'/status', ['id' => $id, 'status' => $sta]);

    if($status == 1) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'>
        <span class='label label-success radius'>正常</span></a>";
    }else if($status == 0) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'>
        <span class='label label-danger radius'>待审</span></a>";
    }
    return $str;
}

/**
 * 通用化API接口数据格式
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-24
 * @param int $status      业务状态码
 * @param string $message  信息提示
 * @param array $data      数据
 * @param int $httpCode    http状态码
 * @return array
 */
function show($status, $message, $data=[], $httpCode=200) {
    $data = [
        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];
    return json($data, $httpCode);
}