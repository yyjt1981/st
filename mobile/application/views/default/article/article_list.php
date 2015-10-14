<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo Model_Nav::getSeo(4,'seotitle').'_'.$GLOBALS['cfg_webname'];  ?></title>
<meta name="keywords" content="<?php echo Model_Nav::getSeo(4,'keyword');  ?>">
<meta name="description" content="<?php echo Model_Nav::getSeo(4,'description');  ?>">
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
    <a class="tit" href="/raider"><?php  echo Model_Nav::getSeo(4,'seotitle');    ?></a>
    <a class="head_search_btn" href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search?typeid=4"><img class="fl" src="<?php echo "{$GLOBALS['cfg_res']}/$cfg_tpl_dir/images"; ?>/m_t_search.png" width="20" height="20" /></a>
  </div>
  <!--顶部结束-->
  
  <div class="m-main">
  	<!--顶部滚动图片开始-->
    <div class="articel_con">
      <div class="art_top_scrool">
        <div id="sca1" class="warp-pic-list">
          <div id="wrapBox1" class="wrapBox">
            <ul id="count1" class="count clearfix">
                <?php 
			      $recarticles=Model_Article::getArticleList(array('row'=>3,'haspic'=>1,'flag'=>'recommend'));
				  foreach($recarticles as $k=>$v)
				  {
			    ?>
              <li>
                <a href="<?php echo $v['url']; ?>" class="img_wrap"><img src="<?php echo $v['lit160'];    ?>" width="270" height="180" border="0" /></a>
                <div class="title"><a href="<?php echo $v['url'];  ?>"><?php echo $v['title'];  ?></a></div>
              </li>
               <?php
				  }
				?>
            </ul>
          </div>
          <a id="right1" class="prev icon btn"></a>
          <a id="left1" class="next icon btn"></a>
        </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
      
        $("#count1").dayuwscroll({
          parent_ele:'#wrapBox1',
          list_btn:'#tabT04',
          pre_btn:'#left1',
          next_btn:'#right1',
          path: 'left',
          auto:true,
          time:3000,
          num:1,
          gd_num:1,
          waite_time:1000
        });
      
      });
      </script>
    </div>
    <!--顶部滚动图片结束-->
    <?php
	   $destlist=Model_Destinations::navDestList(array('flag'=>'raider'));
	   foreach($destlist as $k=>$v)
	   {
	?> 
    <section class="main-xl">
      <p class="jd_city_m"><?php echo $v['kindname'];  ?></p>
      <div class="change-type m_gl_list">
         <?php 
		     $params=array('type'=>'mdd','flag'=>'recommend','kindid'=>$v['kindid'],'row'=>9);
			 $arclist=Model_Article::getArticleList($params); 
		     foreach($arclist as $key=>$val)
			 {
		   ?>
            <p><a href="<?php echo $val['url'];  ?>"><?php echo $val['title'];  ?></a></p>
          <?php
			 }
		  ?>
      </div>
      <?php
	      if($arclist[0]['totalcount']>9)
		  {
	  ?> 
      <p class="m_list_gl_more"><a href="javascript:;" onClick='loadMore(this,<?php echo json_encode($params);   ?>)'>更多旅游攻略>></a></p>
        <?php 
		  }
      ?>
	</section>
    
	<?php
	   }
	 ?>  
    
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
