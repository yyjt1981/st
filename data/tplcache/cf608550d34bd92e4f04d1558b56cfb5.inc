 <!--相关线路开始-->
    <div class="l_side_list">
      <h3><s></s>相关线路</h3>
      <div class="l_side_con r_line">
        {sline:getlinelist flag='relative' row='4'}
        <dl>
          <dt><a href="[field:url/]" target="_blank"><img src="[field:lit160/]" width="105" height="80" alt="[field:title/]" /></a></dt>
          <dd class="dd_1"><a href="[field:url/]" target="_blank">[field:title/]</a>[field:sellpoint/]</dd>
          <dd class="dd_2">[field:price/]</dd>
        </dl>
       {/sline:getlinelist}
        <script language="javascript">
				 $(function(){
					 $(".r_line").find('dl').last().addClass('bor_bot_none');
				 })
         </script>
      
      </div>
    </div>
    <!--相关线路结束--><!--热卖线路产品开始-->
    <div class="hot_pro">
      <h3>热卖产品</h3>
      <div class="side_plb_list line_hot_list">
         {sline:getlinelist type="top" flag="hot" row="2"}
            <dl class="dl_list">
            	<dt><a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:lit240/]" width="218" height="130" alt="[field:title/]" /></a></dt>
              <dd class="dd1"><a href="[field:url/]" target="_blank">[field:title/]</a></dd>
            </dl>
          {/sline:getlinelist} 
      </div>
        <script language="javascript">
         $(function(){
		     $(".line_hot_list").find('.dl_list').last().addClass('bor_bot_0');
		 })
      </script>
    </div>
    <!--热卖线路产品结束--> <!--客户咨询蓝色开始-->
    <div class="k_side_list">
      <h3>客户提问</h3>
      <div class="k_side_con">
        {sline:getquestion row='8'}
          <dl>
            <dt><strong class="yk">游客</strong>[field:content/]</dt>
            <dd><strong class="kf">回复</strong>先生/小姐：您好！[field:replycontent/]</dd>
          </dl>
       {/sline:getquestion}
      </div>
    </div>
    <!--客户咨询蓝色结束--><!--推荐团购产品开始-->                                 
        <div class="hot_pro">
      <h3>推荐团购产品</h3>
      <div class="side_plb_list tuan_list">
        {sline:gettuanlist flag="recommend" row="2"}
          <dl class="dl_list">
            	<dt><a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:lit240/]" width="218" height="130" alt="[field:litpic/]" /></a></dt>
              <dd class="dd1"><a href="[field:url/]" target="_blank">[field:title/]</a></dd>
              <dd class="dd2">
              	<span class="sp_1">¥[field:ourprice/]</span>
                <span class="sp_2">[field:discount/]折</span>
                <a href="/tuan/book_[field:aid/].html" target="_blank">抢购</a>
              </dd>
            </dl>
        {/sline:gettuanlist}
   
      </div>
      <script language="javascript">
         $(function(){
		     $(".tuan_list").find('.dl_list').last().addClass('bor_bot_0');
		 })
      </script>
    </div>
    <!--推荐团购产品结束--> <!--最新团购产品开始-->                                 
       <div class="hot_pro">
      <h3>最新团购产品</h3>
      <div class="side_plb_list tuan_list">
        {sline:gettuanlist flag="new" row="2"}
          <dl class="dl_list">
            	<dt><a class="fl" href="[field:url/]" target="_blank"><img class="fl" src="[field:lit240/]" width="218" height="130" alt="[field:litpic/]" /></a></dt>
              <dd class="dd1"><a href="[field:url/]" target="_blank">[field:title/]</a></dd>
              <dd class="dd2">
              	<span class="sp_1">¥[field:ourprice/]</span>
                <span class="sp_2">[field:discount/]折</span>
                <a href="/tuan/book_[field:aid/].html" target="_blank">抢购</a>
              </dd>
            </dl>
        {/sline:gettuanlist}
       
      </div>
      <script language="javascript">
         $(function(){
		     $(".tuan_list").find('.dl_list').last().addClass('bor_bot_0');
		 })
      </script>
    </div>
    <!--最新团购产品结束-->  <!--产品好评开始-->
      <div class="hot_pro">
      <h3>好评产品排行</h3>
      <div class="side_plb_list good_list">
       {sline:getcommentlist flag='all' level='1'}
        	<dl class="pro_ph">
            	<dt><s>[field:global.autoindex/]</s>[field:productname/]</dt>
              <dd><span>好评度：</span><b><s style=" width:[field:percent/]"></s></b>已售：[field:sellnum/]</dd>
            </dl>
       {/sline:getcommentlist}
       <script language="javascript">
         $(function(){
		     $(".good_list").find('dl').last().addClass('bor_bot_0');
		 })
        </script>
       
      </div>
    </div>
    <!--产品好评结束-->   <!--客户评论开始-->
    <div class="discuss">
      <h3>客户评论</h3>
      <div class="dis_list">
         {sline:getcommentlist flag='all' row='6'}
              <dl>
                <dt><b>[field:nickname/]</b><strong>满意度：</strong><span class="comment_star" data-score="[field:score/]"></span></dt>
                <dd>[field:content/]</dd>
              </dl>
         {/sline:getcommentlist}
       
      </div>
    </div>
    <!--客户评论结束--> <!--预定动态开始-->
      <div class="now_book">
      <h3>预订动态</h3>
      <div class="book_con">
        {sline:getorderlist flag='all' row='6'}
          <dl>
            <dt><span class="name">用户&nbsp;&nbsp;[field:nickname/]</span><span class="time">[field:dingtime/]</span>预定了</dt>
            <dd>[field:productname/]</dd>
          </dl>	
        {/sline:getorderlist}
      </div>
    </div>
    <!--预定动态结束-->