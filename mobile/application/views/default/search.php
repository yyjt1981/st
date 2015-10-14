<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>搜索_<?php echo $GLOBALS['cfg_webname'];   ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
echo Common::getScript('jquery-1.4.2.min.js,m.js');
echo Common::getCss('base.css,style.css');
?>
</head>

<body>
	<!--顶部开始-->
	<div class="top">
  	<div class="logo"><a href="<?php echo $GLOBALS['cfg_phoneurl'];   ?>"><?php echo $GLOBALS['cfg_webname'];   ?></a></div>
    <div class="phone_num"><?php echo WebConfig::getSysConf('value','cfg_phone');  ?></div>
  </div>
  <!--顶部结束-->
  

  
  <!--搜索开始-->
  <div class="all_search">
    <form method="post" action="<?php echo $GLOBALS['cfg_phoneurl'];   ?>/index/search">
  	<dl>
    	<dt>搜索类型</dt>
      <dd>
      	<select name="typeid">
          <option value="0"  <?php if($typeid==0) echo "selected=\"selected\"";   ?>>不限</option>
          <option value="1" <?php if($typeid==1) echo "selected=\"selected\"";   ?>>线路</option>
          <option value="2" <?php if($typeid==2) echo "selected=\"selected\"";   ?>>酒店</option>
          <option value="3" <?php if($typeid==3) echo "selected=\"selected\"";   ?>>租车</option>
          <option value="4" <?php if($typeid==4) echo "selected=\"selected\"";   ?>>攻略</option>
          <option value="5" <?php if($typeid==5) echo "selected=\"selected\"";   ?>>景点</option>
          <option value="6" <?php if($typeid==6) echo "selected=\"selected\"";   ?>>相册</option>
          <option value="8" <?php if($typeid==8) echo "selected=\"selected\"";   ?>>签证</option>
          <option value="13" <?php if($typeid==13) echo "selected=\"selected\"";   ?>>团购</option>
        </select>
      </dd>
    </dl>
    <dl>
    	<dt>关键词</dt>
      <dd><input type="text" class="text" name="keyword" value="<?php echo $keyword;  ?>" /></dd>
    </dl>
    <div class="sousuo_btn"><a href="javascript:;" onClick="document.forms[0].submit()">搜 索</a></div>
    </form>
  </div>
  <!--搜索结束-->
  
  <!--搜索开始-->
  <div class="hot_product">
  	<!--搜索标题-->
  	<div class="pdt_title">
    	<strong></strong>
      <h3>搜索结果</h3>
      <strong></strong>
    </div>
    <!--列表开始-->
    <div class="pdt_con">
    
    <?php 
	  foreach($list as $k=>$v)
	  {
	?>
    	<div class="pdt_list">
      	<a href="<?php  echo $v['url'];  ?>">
        	<div class="pdt_img"><img src="<?php echo $v['lit160']; ?>" width="90" height="64"></div>
          <div class="pdt_txt">
          	<div class="pdt_box">
              <p class="p_tit"><?php  echo $v['title']; ?></p>
             
            </div>
          </div>
      	</a>
      </div>
     <?php
	  }
	  ?>
     
    </div>
    <!--列表结束-->
  </div>
  <!--搜索结束-->
  
  
  
  <!--回到顶部按钮-->
  <div class="back_top">
  	<span id="backTop">回到顶部</span>
  </div>
  <!--网页底部-->
  <?php
   echo View::factory($cfg_tpl_dir.'/public/footer');
   ?>
</body>
</html>
