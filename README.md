<!--
 * @Description: 
 * @Version: 1.0
 * @Autor: sky 1127820180@qq.com
 * @Date: 2019-12-30 10:12:32
 * @LastEditors  : sky 1127820180@qq.com
 * @LastEditTime : 2020-01-16 10:42:29
 -->

app接口开发

tp5的入口文件在Public目录下

后台完整的访问路径是：http://localhost/app/public/index.php/admin/Index/index.html


API接口：  
版本更新接口地址：  
http://localhost/app/public/index.php/api/v1/init  
获取栏目接口地址：  
http://localhost/app/public/index.php/api/v1/cat  
获取首页数据接口地址：  
http://localhost/app/public/index.php/api/v1/index  
根据栏目获取新闻列表接口地址：  
http://localhost/app/public/index.php/api/v1/news?catid=1  
获取新闻详情接口地址：  
http://localhost/app/public/index.php/api/v1/news/1  
获取排行榜接口地址：  
http://localhost/app/public/index.php/api/v1/rank  
短信验证码相关:  
http://localhost/app/public/index.php/api/v1/identify  
登录的路由:  
http://localhost/app/public/index.php/api/v1/login  
获取用户信息:  
GET:http://localhost/app/public/index.php/api/v1/user/1   
更新用户信息：    
PUT:http://localhost/app/public/index.php/api/v1/user/1  
图片上传接口路由:  
http://localhost/app/public/index.php/api/v1/image  