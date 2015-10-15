<div class="hotel_list">
        	<div class="pro_top_con">
          	<div class="pro_pic">
            	<a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:litpic function='getUploadFileUrl(@me)'/]" width="250" height="195" /></a>
            </div>
            <div class="pro_txt">
            	<h4><a href="[field:url/]" target="_blank">[field:hotelname/]</a></h4>
              <p>酒店简介：[field:content function="cutstr_html(@me,60)"/]</p>
              <p>开业时间：[field:opentime/]</p>
              <p>装修时间：[field:decoratetime/]</p>
            </div>
            <div class="pro_price">
            	<div class="hotel_myd">
              	<p class="p1"><span style=" width:[field:id function=Helper_Archive::getSatisfyScore(@me,2)/]"></span></p>
                <p class="p2">[field:id function="Helper_Archive::getCommentNum(@me,2)"/]</p>
              </div>
              <div class="hotel_bj">
              	<p class="p1"><span>&yen;<b>[field:hotelprice/]</b></span>起</p>
              	<p class="p2"><a href="[field:url/]" target="_blank">查看详情</a></p>
              </div>
            </div>
          </div>
          <div class="pro_bot_con room_list" id="room_list_[field:id/]" data-id="[field:id/]">
          
          </div>
        </div>