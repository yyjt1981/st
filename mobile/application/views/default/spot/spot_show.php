<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $spot['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $spot['keyword']; ?>">
<meta name="description" content="<?php echo $spot['description'];  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
 echo Common::getScript('jquery-1.4.2.min.js,m.js');
 echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="javascript:;"><?php   echo Model_Destinations::getMaxKindName($spot['kindlist']); ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=5"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-line pb66px">
			<!--周边游-->
	    <h1 class="line-tit"><?php  echo $spot['spotname']; ?></h1>
      <div class="line-img">
      	<span class="line-s-m"><img src="<?php  echo $spot['litpic']; ?>" /></span>
      </div>
    	<div class="price-line">
        <?php
		   $attrlist=Model_Spot_Attr::getAttrInfo($row['attrid']);
		   foreach($attrlist as $k=>$v)
		   {
		?>
    		<p><span><?php echo $v['attrname'];?>：</span><i class="color_f60">
            <?php 
			  foreach($attrlist[$k]['childlist'] as $val)
			  {
				  echo $val['attrname'];
			  }
			?>
            </i></p>
         <?php
		   }
		  ?>
  
        <p><span>取票方式：</span><i class="color_f60"><?php echo $spot['getway']; ?></i></p>
        <p><span>地址：</span><i class="color_f60"><?php  echo $spot['address']; ?></i></p>
      </div>
      
      <div class="line-info">
				<div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">景区详细：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
				</div>
				<div class="line-i-c">
        	<div class="line-i-c-h">
          	<div class="line-i-con">
              <?php   echo $spot['content'];    ?>
            </div>
          </div>
        </div>
			</div>

        
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">门票价格：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="show_con">
            <?php
			  foreach($spot['tickets'] as $k=>$v)
			  {
			   ?>
            	<dl>
              	<dt><?php echo $v['typename'];  ?></dt>
                <dd><?php echo $v['title'];?>：<span>&yen;<?php echo $v['ourprice'];  ?></span></dd>
              </dl>
            <?php
			  }
			  ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">注意事项：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
              <?php  echo $spot['booknotice'];   ?>
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
  <div class="footer">
  	<p><span class="color_f60">手机版</span>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://demo.666trip.com/">电脑版</a></p>   
		<p>思途旅游网&nbsp;&nbsp;蜀ICP备11006958号</p>
  </div>
  
</body>
</html>
