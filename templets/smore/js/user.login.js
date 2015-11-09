$(function(){

	//点击回车登陆
	init_enter_sub();

//登陆名点击
  $("#loginname").focusEffect();
  //表单验证

	$("#loginfrm").validate({ 
			
			rules: { 
			     
				  loginname: { 
				   required: true
				  }, 
				
				  password: { 
				  required: true
				   
				  }
				 
				}, 
				messages: { 
				  
				   loginname:{
					    required:"请输入登陆手机号或者邮箱"
						
				   },
				 
				   password: {
				        required:"请输入你的密码"
						
				   }
				},
				errorPlacement: function(error, element) {
					
					
					$(".point_out").html(error.text());
					
				},
				success:function(label,element){
					
				  // console.log(element)
				   //$(".point_out").html('');
				  
				  
				},
				submitHandler:function(form){
				
				 var uname = $("#loginname").val();
				 var pwd = $("#password").val();
				 var flag = 0;
				 $.ajax({
					  type:"post",
					  async: false,
					  url:"login.php?dopost=dologin&loginname="+uname+"&password="+pwd,
                      dataType:'json',
					  success: function(data){


                        // $('body').append(data.js);//同步登陆js

						 if(data == '1'){//登陆成功,跳转到来源网址
						     var url = $("#fromurl").val();
				              window.open(url,'_self');
						  }
						  else{
						     $(".point_out").html('用户名或者密码错误');
						  }  
						
					
					},
					error:function(a,b,c){
					 
					}
				  });
				
				   return false; //此处必须返回false，阻止常规的form提交
				  
               }
			
				
				
				
	     });

})

function init_enter_sub() {
	//新增回车键登陆
	$('.enter_sub').keyup(function(e){
		if(e.keyCode ==13){
			$(this).parents('form').submit()
		}
	})
}



