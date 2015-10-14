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
   
   //alert(params.kindid);
	$.ajax(	
	  {  
		type: "POST",
		url: "ajax_search",
		dataType:"json",
		data:params,
		success: function(data, textStatus){
			 var kindlist=data.kindlist;
			 var photolist=data.photolist;
			 
			 var klist='';
			 for(var i in kindlist)
			 {
				 klist+='<p rel="kindid" val="'+kindlist[i]['id']+'"><a href="javascript:;" >'+kindlist[i]['kindname']+'</a></p>';
			 }	
			 if(klist)
			 {
			   klist='<p rel="kindid"><a href="javascript:;" >不限</a></p>'+klist;	 
			   $("#des-c").html(klist);
			    
			 }
			 var plist='';
			 for(var i in photolist)
			 {
				 plist+='<a href="'+photolist[i]['url']+'"><img src="'+photolist[i]['lit160']+'" width="90" height="54"><strong>'+photolist[i]['photoname']+'</strong></a>';
			 }

			 if(name=='page')
			 {
				 $(".p_list").append(plist);
			 }
			 else
			   $(".p_list").html(plist);
		    
			 if(data.totalcount)
			 {
				 if(18*window.page>window.parseInt(data[0].totalcount))
				   $("#loadmore").hide(); 
				 else
				   $("#loadmore").show();  
			 }  
		     $("#loading").hide(); 
		     
		}
	  }
	);
}

function loadMore(obj)
{
	$("#loading").show();
	$("#loadmore").hide();
	if(!window.page)
	{
	   window.page=1;
	}
	window.page++;	
	ajaxSetParam('page',window.page);  
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
   
