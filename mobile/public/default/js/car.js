// JavaScript Documen

function ajaxSetParam(name,val)
{
	if(!this.params)
	   this.params={};   
	this.params[name]=val;
	if(name!='page')
	{
	   window.page=1;
	   this.params['page']=1;	
	}
	var params=this.params;
	$.ajax(	
	  {  
		type: "POST",
		url: "ajax_search",
		dataType:"json",
		data:params,
		success: function(data, textStatus){
			
			// alert(data.toString());
			if(data['count'])
			   $("#loadmore").show();
		    else
			   $("#loadmore").hide();
			delete data['count']; 
			  
			$("#car_list .pdt_list").remove();	
             for(var i in data)
			 {
				 var content='<div class="pdt_list"><a href="'+data[i]['url']+'"><div class="pdt_img"><img src="'+data[i]['lit160']+'" width="90" height="64"></div><div class="pdt_txt"><div class="pdt_box"><p class="p_tit">'+data[i]['carname']+'</p><p class="p_pir"><strong>'+data[i]['minprice']+'</strong><span>满意度'+data[i]['satisfy']+'</span></p></div></div></a></div>';
				 $("#car_list").prepend(content);
			 }
			 $("#loading").hide();	
		}
	  }
	);
}

function loadMore(obj)
{
	if(!window.page)
	{
		window.page=1;
	}
	window.page++;	
	ajaxSetParam('page',window.page);  
	$("#loading").show();
	$("#loadmore").hide();
}

 var transition =function(){};
    transition.prototype = {
        height : function(id,uid){//touchstart
            $(id+" > li").bind('click',function(){
                $('body,html').animate({scrollTop:0},500);
                var h = $(document).height();
                var c = $(id+" > li").index($(this));
				window.clickIndex=c;
				$(uid+" div p").bind('click',function(){
					  $(uid+" div p").removeClass('on');
					  $(this).addClass('on');
					     
					   var rel=$(this).attr('rel');
					   var val=$(this).attr('val');

					  var c=window.clickIndex;
					  $(id+" li").eq(c).find('a').text($(this).find('a').text());
					   ajaxSetParam(rel,val); 
                       $(uid+" > div").eq(c).css('height','0');
                       $(id+" > li").eq(c).removeClass('on');
					
					})
				
                if($(uid+" > div").eq(c).css('height')=='0px'){
                    $('.pop_bg').css({height:h+45}).show();
                    $(this).addClass('on').siblings().removeClass('on');
                    $(uid+" > div").eq(c).css('height',$(uid+" > div").eq(c).find('p').length*55).siblings().css('height','0');
                }
                else{
                    $(this).removeClass('on');
                    $(uid+" > div").eq(c).css('height','0');
                    $('.pop_bg').hide();
                }
            })
        },
        heightM : function(id,uid){//touchstart

        }
    }
	
	
	
$(document).ready(function(e) {
	 var tran = new transition();
    tran.height('#des_w',"#des_con");
    tran.heightM('#des_w_m',"#des_con_gl_m");
	
	 var fixTop = function() {
        var st = $(document).scrollTop();
		if(st > 200){
                        $("#des_w").addClass("topfix");
                    }
                    else{
                        $("#des_w").removeClass("topfix");
                    }
        };
    $(window).bind("scroll", fixTop);
    ajaxSetParam();
});	
   