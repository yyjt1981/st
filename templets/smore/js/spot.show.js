// JavaScript Document
$(function(){
   //小图看大图
 
   $(".thumb img").css("cursor","pointer");
   $(".thumb img").click(function() {
	 var src = $(this).attr("src").replace('lit160','litimg');
     $("#litpic").attr("src",src);
});
	
   //fancybox图片显示
   var FilesArray2=['./fancybox/jquery.fancybox-1.3.4.js','./fancybox/jquery.fancybox-1.3.4.css'];
   Loader.loadFileList(FilesArray2,function(){
	   
	    $("a[rel=group]:gt(0)").hide();
	    $("a[rel=group]").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		 'cyclic'       :true,
		'overlayShow'	:	false,
		'titlePosition':'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">图片：' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
		
	    }); 
   });
   //菜单

   if($("#tab2").length>0){
	   var FilesArray=['./floatmenu/floatmenu.js','./floatmenu/floatmenu.css']
       Loader.loadFileList(FilesArray,function(){
		  $.floatMenu({
		  menuContain : '#tab2',
		  tabItem : 'li',
		  chooseClass : 'active',
		  contentContain : '#tab_content',
		  itemClass : '.tablelist'});
		 });
		//获取门票列表
       var spotid = $("#spotid").val();
   
		$.ajax({
			type:'POST',
			url:'ajax.spot.php',
			data:'dopost=getpiaolist&spotid='+spotid,
			success:function(data){
				$("#piao_list").html(data);
				$(".dl_title").unbind('click').click(function(){
				  $(this).parent().next().toggle();
				  });	
			 }
			})
   
   }
  

})