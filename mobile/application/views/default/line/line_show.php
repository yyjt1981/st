<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $line['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $line['keyword']; ?>">
<meta name="description" content="<?php echo $line['description'];  ?>">
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
    <a class="tit" href="javascript:;"><?php echo Model_Destinations::getMaxKindName($line['kindlist']);   ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=1"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-line pb66px">
			<!--周边游-->
	    <h1 class="line-tit"><?php  if(!empty($line['dingjin'])){  ?><em class="c-1">支持定金</em><?php  } echo $line['linename'];   ?></h1>
      <div class="line-img">
      	<span class="line-s-m"><img src="<?php echo $line['lit240'];  ?>" /></span>
      </div>
    	<div class="price-line">
    		<p><span>优 惠 价：</span><strong><?php echo $line['price'];   ?></strong>起<s><?php echo $line['storeprice'];  ?></s></p>
        <p><span>交&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通：</span><i><?php echo $line['transport'];   ?></i></p>
        <p><span>团&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：</span><i><?php echo $line['startdatestr'];      ?></i></p>
        <p><span>报&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span><i><?php echo $line['linebefore'];  ?></i></p>
      </div>
      
     <?php
	  foreach($line['linecontent'] as $k=>$v)
	  {
		?> 
      <div class="line-info">
				<div class="line-i-w">
          <span><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/col.png" width="22" height="22"><?php echo $k;   ?>：</span>
          <img class="roat" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/line_ico_ud.png" width="14" height="8" />
				</div>
				<div class="line-i-c">
        	<div class="line-i-c-h">
          	<div class="line-i-con">
              <?php echo $v;    ?>
            </div>
          </div>
        </div>
	 </div>
     <?php
	     }
	   ?>

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
