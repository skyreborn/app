/**
 * 新闻添加
 * @param {*} form 
 */
function app_save(form) {
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

/**
 * 新闻编辑
 * @param {*} form 
 */
function app_edit(form) {
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

/**
 * 时间插件适配的一个方法
 * 解决日期插件My97 DatePicker与Think php模版标签冲突
 * @param {*} flag 
 */
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
}

/**
 * 通用化删除操作
 * @param obj 
 */
function app_del(obj){
    // 获取url地址
    var url = $(obj).attr('del_url');
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			success: function(data){
                if(data.code == 1) {
                    //执行跳转
                    self.location=data.data.jump_url;
                }else if(data.code == 0) {
                    layer.msg(data.msg, {icon:2, time:2000});
                }
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}

/**
 * 通用化新闻发布状态修改操作
 * @param {*} obj 
 */
function app_status(obj){
    // 获取url地址
    var url = $(obj).attr('status_url');
	layer.confirm('确认要修改吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			success: function(data){
                if(data.code == 1) {
                    //执行跳转
                    self.location=data.data.jump_url;
                }else if(data.code == 0) {
                    layer.msg(data.msg, {icon:2, time:2000});
                }
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}

/**新闻编辑
 * 
 * @param {*} title 
 * @param {*} obj 
 */
function article_edit(title,obj){
    // 获取url地址
    var url = $(obj).attr('edit_url');    
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}