<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo WebConfig::getSysConf('value','cfg_indextitle');  ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
echo Common::getScript('jquery-1.4.2.min.js,m.js');
echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<div class="logo"><a href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><?php  echo $GLOBALS['cfg_webname'];   ?></a></div>
    <div class="phone_num"><?php echo WebConfig::getSysConf('value','cfg_phone');  ?></div>
  </div>
  <!--顶部结束-->
  
  <!--导航开始-->
  <div class="menu">
  	<p>
    	<a href="line/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/xl_ico.png" width="50" height="92" />线路</a>
      <a href="spot/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/mp_ico.png" width="50" height="92" />门票</a>
      <a href="hotel/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/jd_ico.png" width="50" height="92" />酒店</a>
      <a href="car/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/zc_ico.png" width="50" height="92" />租车</a>
    </p>
    <p>
    	<a href="visa/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/qz_ico.png" width="50" height="50" />签证</a>
      <a href="tuan/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/tg_ico.png" width="50" height="50" />团购</a>
      <a href="photo/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/xc_ico.png" width="50" height="50" />相册</a>
      <a href="raider/index"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/gl_ico.png" width="50" height="50" />攻略</a>
    </p>
  </div>
  <!--导航结束-->
  
  <!--搜索开始-->
   <form method="post" action="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search">
  <div class="home_search">

  	<input type="text" class="text" name="keyword" />
    <input type="submit" class="ss_btn" value="搜&nbsp;索" />
  </div>
  </form> 
  <!--搜索结束-->
  
  <!--热门产品推荐开始-->
  <div class="hot_product">
  	<!--推荐标题-->
  	<div class="pdt_title">
    	<strong></strong>
      <h3>产品推荐</h3>
      <strong></strong>
    </div>
    <!--列表开始-->
    <div class="pdt_con">
    <?php
	   $linelist=Model_Line::getLineList(array('flag'=>'recommend','row'=>10));
	  
	   foreach($linelist as $k=>$v)
	   {
		   ?>
    	<div class="pdt_list">
      	<a href="<?php  echo $v['url'];  ?>">
        	<div class="pdt_img"><img src="<?php echo $v['lit160'];?>" width="90" height="64"></div>
          <div class="pdt_txt">
          	<div class="pdt_box">
              <p class="p_tit"><?php  echo $v['title'];  ?></p>
              <p class="p_pir"><strong><?php echo $v['price'];  ?></strong><span>满意度<?php echo $v['satisfyscore'];   ?></span></p>
            </div>
            </div>
      	   </a>
          </div>
       <?php
	   }
      ?>
    </div>
    <!--列表结束-->
  </div>
  <!--热门产品推荐结束-->
  
  <!--热门目的地开始-->
  <div class="">
  	<!--目的地标题-->
  	<div class="mdd_title">
    	<strong></strong>
      <h3>热门目的地</h3>
      <strong></strong>
    </div>
    <div class="mdd_con">
    <?php 
	  $navlist=Model_Destinations::navDestList();
	  
	    foreach($navlist as $k=>$v)
		{
	  ?>
            <div class="mdd_ly">
            <h3><?php echo $v['title'];  ?></h3>
            <div class="mdd_list">
                <?php
				   $destlist=Model_Destinations::getDestList(array('kindid'=>$v['kindid'],'flag'=>'next','item'=>0));
				   foreach($destlist as $key=>$val)
				   {
                     echo "<a href=\"{$val['url']}\">{$val['title']}</a>";
				   }
                ?>
			</div>
            </div>
      
      <?php
		}
		?>
     
    </div>
  </div>
  <!--热门目的地结束-->
  
  <!--回到顶部按钮-->
  <div class="back_top">
  	<span id="backTop">回到顶部</span>
  </div>
  <!--网页底部-->
  <?php
   echo View::factory($cfg_tpl_dir.'/public/footer');
   ?>
  
  
</body>
</html>
