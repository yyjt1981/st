<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $visa['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $visa['keyword']; ?>">
<meta name="description" content="<?php echo $visa['description'];  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
 echo Common::getScript('jquery-1.4.2.min.js,m.js');
echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="/"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="javascript:;"><?php  echo Model_Visa_Area::getAreaName($visa['areaid']);     ?></a>
    <a class="head_search_btn" href="/index/search?typeid=8"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-line pb66px">
			<!--周边游-->
	    <h1 class="line-tit"><?php echo $visa['title'];  ?></h1>
      <div class="line-img">
      	<span class="line-s-m"><img src="<?php  echo $visa['lit240'];    ?>" /></span>
      </div>
    	<div class="price-line">
    		<p><span>签证类型：</span><i class="color_f60">旅游签证</i></p>
        <p><span>所属领区：</span><i class="color_f60"><?php echo $visa['belongconsulate'];  ?></i></p>
        <p><span>停留时间：</span><i class="color_f60"><?php echo $visa['partday'];   ?>天</i></p>
        <p><span>有 效 期：</span><i class="color_f60"><?php  echo $visa['validday'];?></i></p>
        <p><span>办理时长：</span><i class="color_f60"><?php  echo $visa['handleday'];    ?></i></p>
        <p><span>面试需要：</span><i class="color_f60"><?php  echo $visa['interview'];    ?></i></p>
        <p><span>邀 请 函：</span><i class="color_f60"><?php  echo $visa['letter'];?></i></p>
        <p><span>受理范围：</span><i class="color_f60"><?php echo $visa['handlerange'];?></i></p>
      </div>

      <div class="line-info">
				<div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">所需材料：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
				</div>
				<div class="line-i-c">
        	<div class="line-i-c-h">
          	<div class="line-i-con">
              <?php echo $visa['material'];   ?>
            </div>
          </div>
        </div>
			</div>

        
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">签证介绍：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
             <?php echo $visa['content'];   ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">办理流程：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
              <?php echo $visa['circuit'];   ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">预订须知：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
             <?php echo $visa['booknotice'];   ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">温馨提示：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
              <?php echo $visa['friendtip'];   ?>
            </div>
          </div>
        </div>
      </div>
        <div class="line-f">
				<a href="tel:<?php  echo WebConfig::getSysConf('value','cfg_phone');   ?>" class="tel"><img src="<?php echo "/public/$cfg_tpl_dir/images"?>/phone_ico.png" width="16px" height="16px"><?php  echo WebConfig::getSysConf('value','cfg_phone');   ?></a>
          </div>
    </section>
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
