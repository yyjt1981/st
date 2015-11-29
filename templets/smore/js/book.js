// JavaScript Document
function bookSubmit(parameters,url)
{
	
	
   bookShadow();
   bookLoading();
   $.ajax({
		type: "post",	
		url: url,
		data:parameters,
		dataType:"html",
		beforeSend: function(XMLHttpRequest){ 
		       
		    },
		success: function(data, textStatus){
			
			
			 bookCloseLoad()
			   var content="";
               if(data!='no')
                {
				   content="<div class=\"bk_hint\"><table class=\"bk_word\"><tr><td class='td_lt'></td><td class='td_rt'><h4>订单提交成功！</h4><span>我们会尽快处理你的订单</span></td></tr></table><a href=\"javascript:;\" onclick=\"bookConfirm('"+data+"')\">确定</a></div>";
			    }
				else
				{
					 content="<div class=\"bk_hint\"><table class=\"bk_word\"><tr><td class='td_lt2'></td><td class='td_rt'><h4>订单提交失败！</h4><span>请重新尝试提交订单</span></td></tr></table><a href=\"javascript:;\" onclick=\"bookClose()\">确定</a></div>";
				}
				   
			   $("body").append(content);
			    var s_top=$(window).scrollTop()+140;
	            var s_left=$(window).width()/2-330;
				$(".bk_hint").css("left",s_left);
				$(".bk_hint").css("top",s_top); 
				 
		   }
		}); 		
}

function bookShadow()
{
	var shadow=$("<div id='shadow' style='background:#333;position:absolute;left:0px;top:0px;z-index:100'></div>");
	$("body").append(shadow);
	$("#shadow").css("height",$(document).height());
	$("#shadow").css('width','100%');
	$("#shadow").css("opacity",0.5);
}
function bookCloseShadow()
{
	$("#shadow").remove();
}
function bookConfirm(url)
{
	bookCloseShadow();
	window.open(url,"_self")
}
function bookClose()
{
	bookCloseShadow();
	$(".bk_hint").remove();
}
function bookLoading()
{
	var content="<div class=\"bk_load\"><div><img src=\"/templets/smore/images/bookloading.gif\"/></div>正在提交..</div>";
	$("body").append(content);
	var s_top=$(window).scrollTop()+160;
	var s_left=$(window).width()/2-40;
	$(".bk_load").css("left",s_left);
	$(".bk_load").css("top",s_top); 
	
}
function bookCloseLoad()
{
	$(".bk_load").remove();
}

$(function(){
	//成人游客信息
	var dingNum = $("#dingnum").val();
	var dingNumHtml = '';
	var subscript = 1;
	for(var i = 1; i <= dingNum;i++){
		var divHtml = "<h3>游客" + subscript + "(成人)</h3><dl><dt><em class='must_input'>*</em>姓名：</dt>" +
			"<dd><input type='text' class='data_text' name='adultName" + i +"'/><b id='adultNameError" + i + "' class='line_order_error' style='display: none'>请输入正确的姓名</b></dd></dl>" +
			"<dl><dt>联系电话：</dt>" +
			"<dd><input type='text' class='data_text' name='adultMobile" + i + "'/><b id='adultMobileError" + i + "' class='line_order_error' style='display: none'>请输入正确的手机号</b></dd></dl><dl>" +
			"<dt>身份证号：</dt><dd><input type='text' class='data_text' name='adultCardNum" + i + "'/><b id='adultCardNumError" + i + "' class='line_order_error' style='display: none'>请输入正确的身份证号</b></dd></dl>";
		dingNumHtml = dingNumHtml + divHtml;
		subscript ++;
	}
	$("#adult").after(dingNumHtml);

	//儿童游客信息
	var childNum = $("#childnum").val();
	var childNumHtml = '';
	for(var i = 1; i <= childNum;i++){
		var divHtml = "<h3>游客" + subscript + "(儿童)</h3><dl><dt><em class='must_input'>*</em>姓名</dt>" +
			"<dd><input type='text' class='data_text' name='childName" + i +"'/><b id='childNameError" + i + "' class='line_order_error' style='display: none'>请输入正确的姓名</b></dd></dl>" +
			"<dl><dt>联系电话：</dt>" +
			"<dd><input type='text' class='data_text' name='childMobile" + i + "'/><b id='childMobileError" + i + "' class='line_order_error' style='display: none'>请输入正确的手机号</b></dd></dl><dl>" +
			"<dt>身份证号：</dt><dd><input type='text' class='data_text' name='childCardNum" + i + "'/><b id='childCardNumError" + i + "' class='line_order_error' style='display: none'>请输入正确的身份证号</b></dd></dl>";
		childNumHtml = childNumHtml + divHtml;
		subscript ++;
	}
	$("#child").after(childNumHtml);

	var oldNum = $("#oldnum").val();
	var oldNumHtml = '';
	for(var i = 1; i <= oldNum;i++){
		var divHtml = "<h3>游客" + subscript + "(老人)</h3><dl><dt><em class='must_input'>*</em>姓名</dt>" +
			"<dd><input type='text' class='data_text' name='oldName" + i +"'/><b id='oldNameError" + i + "' class='line_order_error' style='display: none'>请输入正确的姓名</b></dd></dl>" +
			"<dl><dt>联系电话：</dt>" +
			"<dd><input type='text' class='data_text' name='oldMobile" + i + "'/><b id='oldMobileError" + i + "' class='line_order_error' style='display: none'>请输入正确的手机号</b></dd></dl><dl>" +
			"<dt>身份证号：</dt><dd><input type='text' class='data_text' name='oldCardNum" + i + "'/><b id='oldCardNumError" + i + "' class='line_order_error' style='display: none'>请输入正确的身份证号</b></dd></dl>";
		oldNumHtml = oldNumHtml + divHtml;
		subscript ++;
	}
	$("#old").after(oldNumHtml);

	$('#commitOrderForm').click(function(){
		var flag = true;
		var isPhoneReg = /^1[3|4|5|7|8]\d{9}$/
		var isIdCardReg=/^(^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$)|(^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])((\d{4})|\d{3}[Xx])$)$/;

		//预订人资料检测
		var linkman = $('#linkman').val();
		if (!linkman || linkman.length > 5) {
			$('#linkmanError').show();
			flag = false;
		} else {
			$('#linkmanError').attr("style","display:none");
		}
		var linktel = $('#linktel').val();
		if (!isPhoneReg.test(linktel)){
			$('#linktelError').show();
			flag = false;
		} else {
			$('#linktelError').attr("style","display:none");
		}

		//成人用户名检测
		for(var i = 1; i <= dingNum;i++){
			var adultName = $('input[name=adultName'+ i+']').val();
			if (!adultName || adultName.length > 5) {
				$('#adultNameError' + i).show();
				flag = false;
			} else {
				$('#adultNameError' + i).attr("style","display:none");
			}
			var adultMobile = $('input[name=adultMobile'+ i+']').val();
			if (!isPhoneReg.test(adultMobile)) {
				$('#adultMobileError' + i).show();
				flag = false;
			} else {
				$('#adultMobileError' + i).attr("style","display:none");
			}
			var adultCardNum = $('input[name=adultCardNum'+ i+']').val();
			if (!isIdCardReg.test(adultCardNum)) {
				$('#adultCardNumError' + i).show();
				flag = false;
			} else {
				$('#adultCardNumError' + i).attr("style","display:none");
			}
		}

		//儿童信息检测
		for(var i = 1; i <= childNum;i++){
			var childName = $('input[name=childName'+ i+']').val();
			if (!childName || childName.length > 5) {
				$('#childNameError' + i).show();
				flag = false;
			} else {
				$('#childNameError' + i).attr("style","display:none");
			}
			var childMobile = $('input[name=childMobile'+ i+']').val();
			if (!isPhoneReg.test(childMobile)) {
				$('#childMobileError' + i).show();
				flag = false;
			} else {
				$('#childMobileError' + i).attr("style","display:none");
			}
			var childCardNum = $('input[name=childCardNum'+ i+']').val();
			if (!isIdCardReg.test(childCardNum)) {
				$('#childCardNumError' + i).show();
				flag = false;
			} else {
				$('#childCardNumError' + i).attr("style","display:none");
			}
		}

		//老人信息检测
		for(var i = 1; i <= oldNum;i++){
			var oldName = $('input[name=oldName'+ i+']').val();
			if (!oldName || oldName.length > 5) {
				$('#oldNameError' + i).show();
				flag = false;
			} else {
				$('#oldNameError' + i).attr("style","display:none");
			}
			var oldMobile = $('input[name=oldMobile'+ i+']').val();
			if (!isPhoneReg.test(oldMobile)) {
				$('#oldMobileError' + i).show();
				flag = false;
			} else {
				$('#oldNameError' + i).attr("style","display:none");
			}
			var oldCardNum = $('input[name=oldCardNum'+ i+']').val();
			if (!isIdCardReg.test(oldCardNum)) {
				$('#oldCardNumError' + i).show();
				flag = false;
			} else {
				$('#oldNameError' + i).attr("style","display:none");
			}
		}

		if (!flag) {
			return;
		}
		 $('#dingfrm').submit();
	});

});