<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $article['seotitle'].'_'.$GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $article['keyword']; ?>">
<meta name="description" content="<?php echo $article['description'];  ?>">


<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php

 echo Common::getScript('jquery-1.4.2.min.js,scroll.1.3.js,m.js,article.js');
 echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="javascript:;"><?php  echo Model_Destinations::getMaxKindName($article['kindlist']); ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=4"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
  	
    <div class="m_gl_tit">
      <h1><?php  echo $article['articlename'];  ?></h1>
      <p>发表时间：<?php  echo date('Y-m-d',$article['modtime']);  ?>&nbsp;&nbsp;&nbsp;&nbsp;来源：<?php echo $article['author'];  ?></p>
  	</div>
    
    <!--攻略正文开始-->
    <div class="m_gl_con">
    	<?php  echo $article['content'];    ?>
    </div>
    <!--攻略正文结束-->
    
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
