
<?php if($type=='weblist') { ?>
<!--站点选择弹出框-->
<div class="change-box-more" id="weblist_detail">
    <div class="level web_list">
        <a href="javascript:;" class="cur" onclick="CHOOSE.changeWeb(this,-1,'全部','<?php echo $resultid;?>')">全部</a>
        <a href="javascript:;" onclick="CHOOSE.changeWeb(this,0,'主站','<?php echo $resultid;?>')">主站</a>
        <?php $n=1; if(is_array($weblist)) { foreach($weblist as $v) { ?>
         <a href="javascript:;" onclick="CHOOSE.changeWeb(this,<?php echo $v['webid'];?>,'<?php echo $v['webname'];?>','<?php echo $resultid;?>')" ><?php echo $v['webname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='startplace') { ?>
<!--出发地选择弹出框-->
<div class="change-box-more" id="startplace_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeStartPlace(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($startplace)) { foreach($startplace as $v) { ?>
         <a href="javascript:;" data-level="1" onclick="CHOOSE.changeStartPlace(this,<?php echo $v['id'];?>,'<?php echo $v['cityname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['cityname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='destlist') { ?>
<!--目的地选择弹出框-->
<div class="change-box-more" id="destlist_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeDestId(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($destlist)) { foreach($destlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeDestId(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='attrlist') { ?>
<!--属性选择弹出框-->
<div class="change-box-more" id="attrlist_detail">
    <input type="hidden" id="typeid" value="<?php echo $typeid;?>">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeAttrId(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeAttrId(this,<?php echo $v['id'];?>,'<?php echo $v['attrname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['attrname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='carkind') { ?>
<!--车型弹出框-->
<div class="change-box-more" id="carkindlist_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeCarKind(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($carkindlist)) { foreach($carkindlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeCarKind(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='carbrand') { ?>
<!--车型弹出框-->
<div class="change-box-more" id="carbrandlist_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeCarBrand(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($carbrandlist)) { foreach($carbrandlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeCarBrand(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='visatype') { ?>
<!--签证类型弹出框-->
<div class="change-box-more" id="visakind_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeVisaKind(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($visakindlist)) { foreach($visakindlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeVisaKind(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='visacity') { ?>
<!--签发城市弹出框-->
<div class="change-box-more" id="visacity_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeVisaCity(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($visacitylist)) { foreach($visacitylist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeVisaCity(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
<?php if($type=='helpkind') { ?>
<!--帮助分类弹出框-->
<div class="change-box-more" id="visacity_detail">
    <div class="level">
        <a href="javascript:;" class="cur" data-level="1" onclick="CHOOSE.changeHelpKind(this,0,'全部','<?php echo $resultid;?>',1)">全部</a>
        <?php $n=1; if(is_array($helpkindlist)) { foreach($helpkindlist as $v) { ?>
        <a href="javascript:;" data-level="1" onclick="CHOOSE.changeHelpKind(this,<?php echo $v['id'];?>,'<?php echo $v['kindname'];?>','<?php echo $resultid;?>',0)" ><?php echo $v['kindname'];?></a>
        <?php $n++;}unset($n); } ?>
    </div>
</div>
<?php } ?>
