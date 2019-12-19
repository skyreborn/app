/*
 * @Author: 1127820180@qq.com 
 * @Date: 2019-12-13 19:18:03 
 * @Last Modified by: 1127820180@qq.com
 * @Last Modified time: 2019-12-18 21:24:20
 */
function singwaapp_save(form) {
    // 表单数据
    var data = $(form).serialize();
    // url地址
    var url = $(form).attr('url');
    console.log(url);
    // ajax发送数据到后台
    $.post(url, data, function(result) {
        console.log(result);
        if(result.code == 0) {
            layer.msg(result.msg,{icon:5, time:2000});
        }else if(result.code == 2) {
            layer.msg(result.msg,{icon:5, time:2000});
        }else if(result.code == 1){
            self.location=result.data.jump_url;
        } 
    }, 'JSON');
}