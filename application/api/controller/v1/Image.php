<?php
/*
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2020-01-14 17:55:24
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-15 14:42:34
 */

namespace app\api\controller\v1;

use app\common\lib\Upload;
use app\common\lib\exception\ApiException;

class Image extends AuthBase {

    public function save() {
        try {
            $image = Upload::image(); 
        } catch (\Excepton $e) {
            return new ApiException('error', 400);
        }
        if($image) {
           
            $data = [
                'status' => 1,
                'message' => 'OK',
                'data' => config('qiniu.image_url').'/'.$image,
            ];
            return show(config('code.success'), 'ok', $data, 201);
        }else {
            return show(config('code.error'), '上传失败', [], 403);
        }               
    }
}