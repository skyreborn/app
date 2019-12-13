<?php
namespace app\common\lib;

//引入鉴权类
use Qiniu\Auth;
//引入上传类
use Qiniu\Storage\UploadManager;
/**
 * 七牛云图片基础类库
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-11
 */
class Upload {
    /**
     * 图片上传
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-11
     * @return void
     */
    public static function image() {

        if(empty($_FILES['file']['tmp_name'])) {
            exception('您提交的图片数据不合法!',404);
        }

        // 要上传的文件
        $file = $_FILES['file']['tmp_name'];

        // 获取图片后缀
        $pathinfo = pathinfo($_FILES['file']['name']);
        $ext = $pathinfo['extension'];

        // 获取配置
        $config = config('qiniu');

        // 构建一个鉴权对象
        $auth  = new Auth($config['ak'], $config['sk']);

        //生成上传的token
        $token = $auth->uploadToken($config['bucket']);

        // 上传到七牛后保存的文件名
        $key  = date('Y')."/".date('m')."/".substr(md5($file), 0, 5).date('YmdHis').rand(0, 9999).'.'.$ext;

        //初始UploadManager类
         $uploadMgr = new UploadManager();

        list($ret, $err) = $uploadMgr->putFile($token, $key, $file);

        if($err !== null) {
            return null;
        } else {
            return $key;
        }
    }

}