<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo Model_Nav::getSeo(3,'seotitle').'_'.$GLOBALS['cfg_webname'];  ?></title>
<meta name="keywords" content="<?php echo Model_Nav::getSeo(3,'keyword');  ?>">
<meta name="description" content="<?php echo Model_Nav::getSeo(3,'description');  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
 echo Common::getScript('jquery-1.4.2.min.js,car.js,public.js');
echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="/car"><?php echo Model_Nav::getSeo(3,'seotitle');    ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=3"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-xl">
			<div class="change-type">
		  	<div class="posfex">
        	<ul id="des_w">
						<li id="des"><a href="javascript:;" >租车城市</a></li>
						<li id="des-day"><a href="javascript:;">车辆级别</a></li>
						<li id="des-type"><a href="javascript:;">所属品牌</a></li>
						<li class="no-line" id="des-by"><a href="javascript:;">单日价格</a></li>
					</ul>
        </div>
				<!--下拉列表-->
        <div id="des_con">
          <div class="change-type-c" id="des-c">
            <p class="on" rel="startplace"><a href="javascript:;">不限</a></p>
            <?php  $citylist=Model_Startplace::getStartplace(); 
			  foreach($citylist as $k=>$v)
			  {
			?>
            <p rel="startplace" val="<?php echo $v['id'];  ?>"><a href="javascript:;"><?php echo $v['cityname'];  ?></a></p>
             <?php
			   }
			   ?>
          </div>
          <div class="change-type-c" id="des-day-c">
            <p class="on" rel="kindid"><a href="javascript:;">不限</a></p>
              <?php  $kindlist=Model_Car_Kind::getKindList(); 
			  foreach($kindlist as $k=>$v)
			  {
			   ?>
               <p rel="kindid" val="<?php echo $v['id'];  ?>"><a href="javascript:;"><?php echo $v['kindname'];  ?></a></p>
             <?php
			   }
			   ?>
          </div>
          <div class="change-type-c" id="des-type-c">
            <p class="on" rel="brandid"><a href="javascript:;">不限</a></p>
           <?php  $brandlist=Model_Car_Brand::getBrandList(); 
			  foreach($brandlist as $k=>$v)
			  {
			   ?>
               <p rel="brandid" val="<?php echo $v['id'];  ?>"><a href="javascript:;"><?php echo $v['kindname'];  ?></a></p>
             <?php
			   }
			   ?>
          </div>
					<div class="change-type-c" id="des-by-c">
            <p class="on" rel="priceid"><a href="javascript:;">不限</a></p>
           <?php  $pricelist=Model_Car_Pricelist::getPriceList(); 
			  foreach($pricelist as $k=>$v)
			  {
			   ?>
               <p rel="priceid" val="<?php echo $v['id'];  ?>"><a href="javascript:;"><?php echo $v['pricename'];  ?></a></p>
             <?php
			   }
			   ?>
					</div>
        </div>

        <div class="fex">
        	<!--list开始-->
		  <div id="car_list">
          
          </div>	
          
          <!--list结束-->
					<div class="load_more" id="loading"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/loading.gif" />正在载入中</div>
					<input type="button" id="loadmore" value="点击载入更多" onClick="loadMore()" class="load-more" />
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
