<?php
/*
 * @Description: 加密相关配置
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-04 09:48:39
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2019-12-27 18:14:50
 */

return [
	'password_pre_halt' => '_#tsmeng',// 密码加密盐
	'aeskey' => 'tsmeng6688220166gdf',// aes 秘钥，服务端和客户端必须保持一致
	'apptypes' => [
		'ios',
		'android',
	],
	'app_sign_time' => 10, // sign失效时间
	'app_sign_cache_time' => 20,// sign 缓存失效时间
];