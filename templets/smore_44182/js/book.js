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