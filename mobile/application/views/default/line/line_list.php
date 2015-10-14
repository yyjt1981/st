<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php
 if($kindname)
    echo $kindname.'线路_'.$GLOBALS['cfg_webname'];
 else	
     echo Model_Nav::getSeo(1,'seotitle').'_'.$GLOBALS['cfg_webname'];  ?></title>
<meta name="keywords" content="<?php echo Model_Nav::getSeo(1,'keyword');  ?>">
<meta name="description" content="<?php echo Model_Nav::getSeo(1,'description');  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link type="text/css" rel="stylesheet" href="../css/base.css" />
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<?php
 echo Common::getScript('jquery-1.4.2.min.js,line.js');
 echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="javascript:;"><?php  if($kindname)
           echo $kindname.'线路_'.$GLOBALS['cfg_webname'];
      else	
	      echo Model_Nav::getSeo(1,'seotitle');   ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=1"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-xl">
			<div class="change-type">
		  	<div class="posfex">
        	<ul id="des_w">
						<li id="des"><a href="javascript:;" >目的地</a></li>
						<li id="des-day"><a href="javascript:;">行程天数</a></li>
						<li class="no-line" id="des-by"><a href="javascript:;">排序</a></li>
					</ul>
        </div>
				<!--下拉列表-->
        <div id="des_con">
          <div class="change-type-c" id="des-c">
            <p class="on" rel="kindid"><a href="javascript:;">不限</a></p>
            <?php
              $navlist=Model_Destinations::navDestList(array('flag'=>'line'));
			  foreach($navlist as $k=>$v)
			  {
			?>
              <p rel="kindid" val="<?php echo $v['kindid']; ?>"><a href="javascript:;" ><?php echo $v['kindname'];  ?></a></p>
            <?php
			  }
			?>
          </div>
          <div class="change-type-c" id="des-day-c">
            <p class="on" rel="day"><a href="javascript:;">不限</a></p>
            <?php
			  $daylist=Model_Line_Day::getLineDay();
			  foreach($daylist as $k=>$v)
			  {
			  ?>
              <p rel="day" val="<?php echo $v['word'];  ?>"><a href="javascript:;"><?php echo $v['title'];   ?></a></p>
            <?php
			  }
			  ?>
          </div>
  
		<div class="change-type-c" id="des-by-c">
            <p class="on" rel="order"><a href="javascript:;">默认排序</a></p>
            <p rel="order" val="asc" ><a href="javascript:;">价格从低到高</a></p>
            <p rel="order" val="desc"><a href="javascript:;">价格从高到低</a></p>
		</div>
       </div>

        <div class="fex">
        	<!--list开始-->
          <div id="line_list">
          <?php
		        
		        
		        foreach($linelist as $k=>$v)
				{
		  ?>
          
          <div class="pdt_list">
            <a href="<?php echo $v['url'];  ?>">
              <div class="pdt_img"><img src="<?php echo $v['lit160']; ?>" width="90" height="64"></div>
              <div class="pdt_txt">
                <div class="pdt_box">
                  <p class="p_tit"><?php  echo $v['title'];     ?></p>
                  <p class="p_pir"><strong><?php  echo $v['price'];   ?></strong><span>满意度100%</span></p>
                </div>
              </div>
            </a>
          </div>
         <?php
				}
		  ?>
         </div> 
         
         
          <!--list结束-->
					<div class="load_more" id="loading"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/loading.gif" />正在载入中</div>
					<input type="button" id="loadmore" value="点击载入更多" onClick="loadMore(this)" class="load-more" />
				</div>
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
