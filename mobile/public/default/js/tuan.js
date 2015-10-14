// JavaScript Documen

function ajaxSetParam(name,val)
{

	if(!this.params)
	   this.params={};   
	this.params[name]=val;
	
	if(!this.params.kindid)
	  {
		this.params.flag='recommend';
		this.params.type='top';
	  }
    else
	  {
		  this.params.type='mdd';
	  } 
	var params=this.params;
	$.ajax(	
	  {  
		type: "POST",
		url: "ajax_search",
		dataType:"json",
		data:params,
		success: function(data, textStatus){
			 var kindlist=data.kindlist;
			 var tuanlist=data.tuanlist;
			 
			 var klist='<p rel="kindid"><a href="javascript:;" >不限</a></p>';
			 for(var i in kindlist)
			 {
				 klist+='<p rel="kindid" val="'+kindlist[i]['id']+'"><a href="javascript:;" >'+kindlist[i]['kindname']+'</a></p>';
			 }	
			 $("#des-c").html(klist); 
			 var plist='';
			 for(var i in tuanlist)
			 {
				 plist+='<div class="pdt_list"><a href="'+tuanlist[i]['url']+'"><div class="pdt_img"><img src="'+tuanlist[i]['lit160']+'" width="90" height="64"></div><div class="pdt_txt"><div class="pdt_box"><p class="p_tit">'+tuanlist[i]['title']+'</p><p class="p_pir"><strong>¥'+tuanlist[i]['sellprice']+'</strong><span>满意度100%</span></p></div></div></a></div>';
			 }
			 
			 
			 if(name=='page')
			 {
				 $(".fex").append(plist);
			 }
			 else
			    $(".fex").html(plist);
		
		}
	  }
	);
}

function loadMore(obj)
{
	if(!this.page)
	{
		this.page=1;
	}
	this.page++;	
	ajaxSetParam('page',this.page);  
}

 var transition =function(){};
    transition.prototype = {
        height : function(id,uid){//touchstart
            $(id+" > li").bind('click',function(){
                $('body,html').animate({scrollTop:0},500);
                var h = $(document).height();
                var c = $(id+" > li").index($(this));
				window.clickIndex=c;
				$(uid+" div p").live('click',function(){
					  $(uid+" div p").removeClass('on');
					  $(this).addClass('on');
					     
					   var rel=$(this).attr('rel');
					   var val=$(this).attr('val');
                    //  alert(val);
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
  
});	
   
