<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo Model_Nav::getSeo(6,'seotitle').'_'.$GLOBALS['cfg_webname'];  ?></title>
<meta name="keywords" content="<?php echo Model_Nav::getSeo(6,'keyword');  ?>">
<meta name="description" content="<?php echo Model_Nav::getSeo(6,'description');  ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
 echo Common::getScript('jquery-1.4.2.min.js,scroll.1.3.js,photo.js,public.js');
 echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<a class="fl" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/home_ico.gif" width="50" height="45" /></a>
    <a class="tit" href="/photo"><?php   echo Model_Nav::getSeo(6,'seotitle');  ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=6"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
		<section class="main-xl">
			<div class="change-type">
		  	<div class="posfex">
        	<ul id="des_w">
						<li id="des" class="no-line"><a href="javascript:;" >目的地</a></li>
					</ul>
        </div>
				<!--下拉列表-->
        <div id="des_con">
          <div class="change-type-c" id="des-c">
            <p class="on" rel="kindid"><a href="javascript:;" >不限</a></p>
            <?php
              $navlist=Model_Destinations::navDestList(array('flag'=>'photo'));
			  foreach($navlist as $k=>$v)
			  {
			?>
              <p rel="kindid" val="<?php echo $v['kindid']; ?>"><a href="javascript:;" ><?php echo $v['kindname'];  ?></a></p>
            <?php
			  }
			?>
          </div>
        </div>

        <div class="photo_con">
        	<!--list开始-->
		   <div class="p_list">
           <?php
		       $params=array('row'=>18,'flag'=>'recommend');
		       $photolist=Model_Photo::getPhotoList($params);
			   foreach($photolist as $k=>$v)
			   {
		   ?>
           
	        	<a href="<?php echo $v['url']; ?>"><img src="<?php echo $v['lit160'];  ?>" width="90" height="54"><strong><?php echo $v['photoname'];   ?></strong></a>
	           <?php
			    }
               ?>
          </div>
          <!--list结束-->
					<div class="load_more" id="loading"><img src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/loading.gif" />正在载入中</div>
                    
					<input type="button" id="loadmore" value="点击载入更多" class="load-more" onClick="loadMore(this)" <?php if($photolist[0]['totalcount']<=18){  ?>style="display:none" <?php } ?> />
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
