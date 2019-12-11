<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
/**
 * 后台图片上传相关逻辑
 *
 * @Author sky 1127820180@qq.com
 * @DateTime 2019-12-11
 */
class Image extends Controller {// 继承Base进行权限验证会引发302重定向问题导致图片上传失败
    /**
     * 图片上传
     *
     * @Author sky 1127820180@qq.com
     * @DateTime 2019-12-11
     * @return void
     */
    public function upload() {

        $file = Request::instance()->file('file');
        // 把图片移动到指定文件夹
        $info = $file->move('upload');
        if($info && $info->getPathname()) {
            $url = $info->getPathname();
            $url = strtr($url,'\\','/');
            $data = [
                'status' => 1,
                'message' => 'ok',
                'data' => 'http://localhost/app/public/'.$url,
            ];

            echo json_encode($data); 
            exit;
        }

        echo json_encode(['status' => 0,'message' => '上传文件失败']);
    }

}