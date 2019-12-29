<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
// 获取数据
Route::get('test', 'api/Test/index');

// 修改数据
Route::put('test/:id', 'api/Test/update');

// 删除数据
Route::delete('test/:id', 'api/Test/delete');


Route::resource('test','api/Test');

// 获取栏目接口路由
Route::get('api/:ver/cat','api/:ver.Cat/read');

// 获取首页数据接口路由
Route::get('api/:ver/index','api/:ver.Index/index');

// 根据栏目获取新闻列表接口路由
Route::resource('api/:ver/news', 'api/:ver.News');