// JavaScript Document

$(document).ready(function(e) {
    
   var endtime=parseInt($("#dtime").val());
   
   function loopTime()
   {
	 var date=new Date();
     var ctime=date.getTime()/1000;
	 
     var lefttime=endtime-ctime;
     var day=parseInt(lefttime/86400);
     var hour=parseInt((lefttime%86400)/3600);
	 var minute=parseInt(((lefttime%86400)%3600)/60);
     var second=parseInt(((lefttime%86400)%3600)%60);
	 var str='';
	 if(day>=1)
	   str+=day+'天';
	 if(hour>=1)
	   str+=hour+'时';
	 if(minute>=1)
	   str+=minute+'分';
	 if(second>=1)
	   str+=second+'秒';      
	 $("#ticktime").html(str);

   }
   
   window.setInterval(loopTime,1000);
  	
	
});