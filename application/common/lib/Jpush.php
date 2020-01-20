<?php
/*
 * @Description: 极光平台消息推送基础类库
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-20 22:20:55
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-20 23:06:37
 */

namespace app\common\lib;

use  JPush\Client;

/**
 * 极光推送封装
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2020-01-20
 */
class Jpush {
	/**
	 * 消息推送
	 *
	 * @Author sky 1127820180@qq.com
	 * @DateTime 2020-01-20
	 * @param [type] $title
	 * @param integer $newId
	 * @param string $type
	 * @return void
	 */
	public static function push($title, $newId = 0, $type = 'android') {
		try {
			$client = new Client($app_key, $master_secret);
			$client->push()
			->setPlatform('all')
			->addAllAudience()
	
			->setNotificationAlert($title)
			->androidNotification($title, array(
				'title' => 'hello jpush',
				// 'builder_id' => 2,
				'extras' => array(
					'id' => $newId ,
				),
			));			
		}catch(\Exception $e) {
			return false;
		}

		return true;
	} 
}


