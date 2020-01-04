app接口开发

tp5的入口文件在Public目录下

后台完整的访问路径是：http://localhost/app/public/index.php/admin/Index/index.html


API接口：
// 版本更新接口地址
http://localhost/app/public/index.php/api/v1/init
// 获取栏目接口地址
http://localhost/app/public/index.php/api/v1/cat
// 获取首页数据接口地址
http://localhost/app/public/index.php/api/v1/index
// 根据栏目获取新闻列表接口地址
http://localhost/app/public/index.php/api/v1/news?catid=1
// 获取新闻详情接口地址
http://localhost/app/public/index.php/api/v1/news/1
// 获取排行榜接口地址
http://localhost/app/public/index.php/api/v1/rank