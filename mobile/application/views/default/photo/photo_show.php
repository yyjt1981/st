<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $photo['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $photo['keyword']; ?>">
<meta name="description" content="<?php echo $photo['description'];  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<?php
 echo Common::getScript('jquery-1.4.2.min.js,idangerous.swiper-1.9.1.min.js,photo.js,public.js,swiper-demos.js');
 echo Common::getCss('base.css,style.css,style1.css,idangerous.swiper.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="javascript:;"><?php echo Model_Destinations::getMaxKindName($photo['kindlist']);  ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=6"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
	
    <div class="home-device">
      <div class="swiper-main">
        <div class="swiper-container swiper1">
          <div class="swiper-wrapper">
          <?php  
		  
		   foreach($photo['picture'] as $k=>$v)
		   {
		   ?>
            <div class="swiper-slide"> <img width="100%" src="<?php   echo $GLOBALS['cfg_deskurl'].$v['litpic'];  ?>"> </div>
          <?php
		   }
         ?>
          </div>
        </div>
      </div>
    </div>
  
	</div>

  
  <!--回到顶部按钮-->
  <div class="back_top" id="backTop">
  	<span>回到顶部</span>
  </div>
  <!--网页底部-->
  <?php
   echo View::factory($cfg_tpl_dir.'/public/footer');
   ?>
  
</body>
</html>
