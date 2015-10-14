// JavaScript Document
function loadMore(obj,params)
{
	obj.page=!obj.page?1:obj.page;
	
	params.page=window.parseInt(obj.page)+1;
	$.ajax(	
	  {  
		type: "POST",
		url: "ajax_search",
		dataType:"json",
		data:params,
		success: function(data, textStatus){
            // alert(data[0]['totalcount']);
			var html='';
			for(var i in data)
			{
			   html+='<p><a href="'+data[i]['url']+'">'+data[i]['title']+'</a></p>';
			}
			$(obj).parent().siblings(".m_gl_list").append(html);
			
			if(params.page*params.row>data[0]['totalcount'])
			    $(obj).parent().hide();
			obj.page++;
		}
	  }
	);
	
	
}