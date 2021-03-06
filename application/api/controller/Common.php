<?php
/*
 * @Description: api 模块公用控制器
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-25 18:25:25
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-29 10:22:53
 */
namespace app\api\controller;

use think\Controller;
use app\common\lib\Aes;
use app\common\lib\IAuth;
use app\common\lib\exception\ApiException;
use app\common\lib\Time;
use think\Cache;

class Common extends Controller {
 
    // header信息
    public $headers = '';
	// 第几页
	public $page = '';
	// 每页显示条数
	public $size = '';
	// 查询条件的起始值
	public $from = 0;

    /**
     * 初始化的方法
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-25
     * @return void
     */
    public function _initialize() {
        $this->checkRequestAuth();
        //$this->testAes();
    }
  
    public function checkRequestAuth() {
        // 获取headers
        $headers = request()->header(); 

        // sign 加密需要客户端工程师 解密需要：服务端工程师
        // 基础参数校验
        if(empty($headers['sign'])) {
            throw new ApiException('sign不存在', 400);
        }
        if(!in_array($headers['app_type'],config('app.apptypes'))) {
            throw new ApiException('app_type不合法', 400);
        }
        
        if(!IAuth::checkSignPass($headers)) {
            throw new ApiException('授权码sign失败', 401);
        }
        // sign可以存入文件 数据库 或者 redis等缓存起来
        Cache::set($headers['sign'], 1, config('app_sign_cache_time'));
        $this->headers = $headers;
    }

    public function testAes() {
        $data = [
            'did' => '123456dg',
            'version' => 1,
            'time' => Time::get13TimeTamp(),
        ];

        //echo  IAuth::setSign($data);exit;
        $str = '60S2hjeI1eTGjBOYIggHJoGcIn5BfSJCAIWmVQQj9gwOEgTqlNx1glUa3go6oWzf';
        echo (new Aes())->decrypt($str);exit;
    }

    /**
     * 处理新闻数据
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-28
     * @param array $news
     * @return void
     */
    protected function getDealNews($news = []) {
        if(empty($news)) {
            return [];
        }

        $cats = config('cat.lists');

        foreach($news as $key => $new) {
            $news[$key]['catname'] = $cats[$new['catid']] ? $cats[$new['catid']] : '-';
        }

        return $news;
    }

	/**
	 * 获取分页page size 内容 查询的起始值from
	 * 
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2019-12-19
	 * @param array $data
	 * @return void
	 */
	public function getPageAndSizeAndFrom($data) {

        $this->page = !empty($data['page']) ? $data['page'] : 1;
		$this->size = !empty($data['size']) ? $data['size'] : config('paginate.list_rows');	
		$this->from = ($this->page - 1) * ($this->size);
	}
}
