<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $car['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $car['keyword']; ?>">
<meta name="description" content="<?php echo $car['description'];  ?>">

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
    <a class="tit" href="/car"><?php  echo Model_Destinations::getMaxKindName($car['kindlist']);    ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=3"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main"> 
		<section class="main-line pb66px">
			<!--周边游-->
	    <h1 class="line-tit"><?php echo $car['carname'];  ?></h1>
      <div class="line-img">
      	<span class="line-s-m"><img src="<?php echo $car['lit160']; ?>" /></span>
      </div>
    	<div class="price-line">
    		<p><span>租车类型：</span><i class="color_f60"><?php echo $car['attrname'] ?></i></p>
        <p><span>租车城市：</span><i class="color_f60"><?php echo $car['startcity'];   ?></i></p>
        <p><span>车辆类型：</span><i class="color_f60"><?php echo $car['carkind'];    ?></i></p>
        <p><span>车辆厢数：</span><i class="color_f60"><?php echo $car['tanknum']; ?></i></p>
        <p><span>所属品牌：</span><i class="color_f60"><?php echo $car['brandname'];  ?></i></p>
        <p><span>车辆座位：</span><i class="color_f60"><?php echo $car['seatnum'];?></i></p>
      </div>

      <div class="line-info">
				<div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">车辆信息：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
				</div>
				<div class="line-i-c">
        	<div class="line-i-c-h">
          	<div class="line-i-con">
               <?php echo $car['content'];   ?>
            </div>
          </div>
        </div>
			</div>

        
      <div class="line-info">
        <div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">租车车型：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="show_con">
            <?php
			  foreach($car['taocan'] as $k=>$v)
			  {
			  ?>
            	<dl>
              	<dt><?php echo $v->suitname;  ?></dt>
                <dd>优惠价：<span>&yen;<?php echo $v->price;  ?></span></dd>
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
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22">温馨提示：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
        </div>
        <div class="line-i-c">
          <div class="line-i-c-h">
            <div class="line-i-con">
               <?php echo $car['notice'];  ?>
            </div>
          </div>
        </div>
      </div>
      
        <div class="line-f">
				<a href="tel:<?php  echo WebConfig::getSysConf('value','cfg_phone');   ?>" class="tel"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"?>/phone_ico.png" width="16px" height="16px"><?php  echo WebConfig::getSysConf('value','cfg_phone');   ?></a>
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
