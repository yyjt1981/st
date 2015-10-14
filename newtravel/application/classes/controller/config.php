<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Config extends Stourweb_Controller{

   private  $parentkey = null;
   private  $itemid = null;
   public function before()
   {
       parent::before();
       $this->assign('parentkey',$this->params['parentkey']);
       $this->assign('itemid',$this->params['itemid']);
       $this->parentkey = $this->params['parentkey'];
       $this->itemid = $this->params['itemid'];
       $weblist = Common::getWebList();
       $this->assign('weblist',$weblist);
       $this->assign('helpico',Common::getIco('help'));



   }

    /*
     * 设置中心-首页配置
     * */


    public function action_base()
    {
        $webid = $this->params['webid'] ? $this->params['webid'] : 0;//当前webid


        $this->assign('url',URL::site('config/base/parentkey/'.$this->parentkey.'/itemid/'.$this->itemid));
        $this->display('stourtravel/config/config_index');
    }

    /*
     * 设置中心-主导航
     * */
    public function action_mainnav()
    {
        $this->display('stourtravel/config/mainnav');
    }



    /*
    * 设置中心-主导航添加
    * */
    public function action_addnav()
    {
        $this->assign('webid',$this->params['webid']);
        $this->display('stourtravel/config/mainnav_add');
    }



    /*
     * 设置中心-主导航添加保存(ajax)
     *
     * */
    public function action_ajax_addnavsave()
    {

        $model = new Model_Nav();
        $model->shortname = Arr::get($_POST,'shortname');
        $model->linktitle = Arr::get($_POST,'linktitle');
        $model->url = Arr::get($_POST,'linkurl');
        $model->linktype = 0;
        $model->webid = Arr::get($_POST,'webid');;
        /*$model->set('seotitle',  Arr::get($_POST,'seotitle'));
        $model->set('keyword',Arr::get($_POST,'keyword'));
        $model->set('description',Arr::get($_POST,'description'));
        $model->set('tagword' , Arr::get($_POST,'tagword'));
        $model->set('jieshao' , Arr::get($_POST,'jieshao'));*/

        $model->create();
        $out = array();
        if($model->saved())
        {
           $out['status'] = true;
        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);


    }


    /*
     * 设置中心--获取全部配置(ajax)
     * */
    public function action_ajax_getconfig()
    {
        $webid = Arr::get($_POST,'webid');
        $model =  new Model_Sysconfig();
        $arr = $model->getConfig($webid);

        echo json_encode($arr);
    }

    /*
     * 设置中心--保存配置(ajax)
     * */
    public function action_ajax_saveconfig()
    {
        $model =  new Model_Sysconfig();

        $flag = $model->saveConfig($_POST);

        echo json_encode(array('status'=>$flag));

    }

    /*
     * 设置中心--主导航获取(ajax)
     * */
    public function action_ajax_getnav()
    {

        $webid = Arr::get($_GET,'webid');
        $model =  new Model_Nav();
        $arr = $model->getNav($webid);

        $out = array();
        foreach($arr as $row)
        {
            $finishseo = $row['isfinishseo'] ? '已完成' : '<span style="color:red">未完成</span>';
            $finishseo = $row['linktype']==1 ? $finishseo : '';
            $openstatus = $row['isopen'] ? Common::getIco('show') : Common::getIco('hide');
            $sel1 = empty($row['kind']) ? "selected='seleted'" : '';
            $sel2 = $row['kind'] == 1 ? "selected='seleted'" : '';
            $sel3 = $row['kind'] == 2 ? "selected='seleted'" : '';
            $issystem = $row['linktype'];
            $tr = '<tr>
                        <td height="40px" align="center"><input type="text"  name="displayorder[]" class="tb-text text_60 al" value="'.$row['displayorder'].'" /></td>
                        <td><input type="text"  name="shortname[]" class="tb-text pl-5" style="width:90%" value='.$row['shortname'].' /></td>
                        <td><input type="text"  name="linktitle[]" class="tb-text pl-5" style="width:90%" value='.$row['linktitle'].' /></td>
                        <td><input type="text"  name="url[]" class="tb-text pl-5" style="width:90%" readonly="true" value='.$row['url'].' /></td>
                        <td align="center">
                            <select name="kind[]">
                                <option value="0" '.$sel1.'>无</option>
                                <option value="1" '.$sel2.'>最新</option>
                                <option value="2" '.$sel3.'>最热</option>
                            </select>
                        </td>
                        <td align="center" onclick="seoShow('.$row['id'].',\''.$row['shortname'].'\','.$issystem.')">'.$finishseo.'</td>
                        <td align="center" onclick="changeShow(this)">'.$openstatus.'<input type="hidden" name="isopen[]" value='.$row['isopen'].'></td>
                        <td align="center" onclick="navDel(this,'.$row['id'].','.$issystem.')">'.Common::getIco('del').'<input type="hidden" name="id[]" value='.$row['id'].'></td>
                 </tr>';
            array_push($out,$tr);
        }
        $unkeyword = $model->getUnsetCount('keyword',$webid);//未设置关键词数量
        $undescription = $model->getUnsetCount('description',$webid);//未设置描述数量
        $unjieshao = $model->getUnsetCount('jieshao',$webid);//未设置介绍
        $info = array('unkeyword'=>$unkeyword,'undescription'=>$undescription,'unjieshao'=>$unjieshao);

        echo json_encode(array('trlist'=>$out,'infolist'=>$info));


    }

    /*
    * 设置中心--主导航保存(ajax)
    * */
    public function action_ajax_savenav()
    {
        $model = new Model_Nav();
        $model->saveNav($_POST);
        echo json_encode(array('status'=>true));
    }

    /*
     * 设置中心-主导航优化设置弹出框
     * */
    public function action_seoinfo()
    {
        $id = $this->params['id'];
        $seoinfo = ORM::factory('nav',$id)->as_array();
        $this->assign('seoinfo',$seoinfo);
        $this->display('stourtravel/config/mainnav_seo');

    }
    /*
   * 设置中心--主导航优化信息保存(ajax)
   * */
    public function action_ajax_saveseo()
    {

        $seotitle = Arr::get($_POST,'seotitle');
        $keyword = Arr::get($_POST,'keyword');
        $description = Arr::get($_POST,'description');
        $tagword = Arr::get($_POST,'tagword');
        $jieshao = Arr::get($_POST,'jieshao');
        if(!empty($seotitle) && !empty($keyword) && !empty($description)
           && !empty($tagword) && !empty($jieshao)
        )
        {
            $isfinish = 1;
        }
        else
        {
            $isfinish = 0;
        }


        $navid = Arr::get($_POST,'navid');
        $model = new Model_Nav($navid);
        $model->seotitle = $seotitle;
        $model->keyword = $keyword;
        $model->description = $description;
        $model->tagword = $tagword;
        $model->jieshao = $jieshao;
        $model->isfinishseo = $isfinish;

        /*$model->set('seotitle',  Arr::get($_POST,'seotitle'));
        $model->set('keyword',Arr::get($_POST,'keyword'));
        $model->set('description',Arr::get($_POST,'description'));
        $model->set('tagword' , Arr::get($_POST,'tagword'));
        $model->set('jieshao' , Arr::get($_POST,'jieshao'));*/

        $model->update();

        echo json_encode(array('status'=>true));



    }
    /*
     * 设置中心-主导航删除(ajax)
     * */
    public function action_ajax_delnav()
    {
        $navid = Arr::get($_GET,'id');
        $model = ORM::factory('nav',$navid);
        $model->delete();
        $out = array();
        if(!$model->loaded())
        {
          $out['status'] = true;
        }
        else
        {
          $out['status'] = false;
        }
        echo json_encode($out);


    }

    /*
    * 设置中心-网页底部
    * */

    public function action_footer()
    {
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $this->assign('configinfo',$configinfo);
        $this->display('stourtravel/config/footer');
    }

    /*
      * 设置中心-logo设置
      *
      * */
    public function action_logo()
    {
        $this->display('stourtravel/config/logo');
    }

    /*
     * 获取logo设置显示栏目
     * */
    public function action_ajax_getlogodisplay()
    {
        $webid = Arr::get($_POST,'webid');
        $logodisplay = Arr::get($_POST,'logodisplay');

        $ids=explode(',',$logodisplay);
        $checkstatus = in_array('0',$ids) ? "checked='checked'" : '';

        $out='<input type="checkbox" name="display" value="0" '.$checkstatus.' class="checkbox fl mt-8"><span class="fl mt-2 ml-5 mr-20">首页</span>';
        $arr =   ORM::factory('nav')->select('shortname','typeid')
                ->where("typeid in (1,2,3,4,5,6,8,10,13)",'','')
                ->and_where('webid','=',$webid)
                ->get_all();

        foreach($arr as $row)
        {

            $checkstatus=in_array($row['typeid'],$ids) ?  "checked='checked'" : '';
            $out.='<input type="checkbox" name="display" value="'.$row['typeid'].'"'.$checkstatus.'class="checkbox fl mt-8" >';
            $out.='<span class="fl mt-2 ml-5 mr-20">'.$row['shortname'].'</span>';

        }
        echo $out;



    }



   /*
    * 无图设置
    * */
    public function action_nopic()
    {
        $this->display('stourtravel/config/nopic');
    }
    /*
     * 微博微信设置
     * */
    public function action_wx()
    {
        $this->display('stourtravel/config/wxwb');
    }
    /*
     * 签约付款
     * */
    public function action_payment()
    {
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $this->assign('configinfo',$configinfo);
        $this->display('stourtravel/config/payment');

    }
    /*
    * 第三方登陆
    * */
    public function action_thirdpart()
    {

        $this->display('stourtravel/config/thirdpart');

    }
    /*
     * 水印设置
     * */
    public function action_watermark()
    {
        $config = Common::getConfig('watermark');
        $markinfo = $config->get('watermark');

        $markinfo['markimgurl'] = $GLOBALS['cfg_basehost'].'/data/mark/'.$markinfo['photo_markimg'];
        $this->assign('markinfo',$markinfo);
        $this->display('stourtravel/config/watermark');
    }
    //保存水印配置
    public function action_ajax_savewatermark()
    {
        $markinfo = array();
        $markurlArr = explode('/',Arr::get($_POST,'photo_markimg'));
        $markimg = $markurlArr[count($markurlArr)-1];
        $markinfo["watermark"] = array(
            'photo_markon'       => Arr::get($_POST,'photo_markon'),
            'photo_marktype'     => Arr::get($_POST,'photo_marktype'),
            'photo_waterpos'     => Arr::get($_POST,'photo_waterpos'),
            'photo_marktext'     => Arr::get($_POST,'photo_marktext'),
            'photo_fontsize'     => Arr::get($_POST,'photo_fontsize'),
            'photo_diaphaneity'  => Arr::get($_POST,'photo_diaphaneity'),
            'photo_fontcolor'    => Arr::get($_POST,'photo_fontcolor'),
            'photo_markimg'      => $markimg
        );
        $water = var_export($markinfo,true);
        $waterconfigfile = Kohana::find_file('config','watermark');

        $fp = fopen($waterconfigfile[0],'wb');
        flock($fp,3);
        fwrite($fp,"<"."?php\r\n");
        fwrite($fp,"return ");
        fwrite($fp,$water);
        fwrite($fp,"?".">");
        fclose($fp);
        echo json_encode(array('status'=>true));

    }

    /*
     * 统计代码
     * */
    public function action_tongji()
    {
        $this->display('stourtravel/config/tongjicode');
    }
    /*
    * robots设置
    * */
    public function action_robots()
    {
        $this->display('stourtravel/config/robots');
    }
   //读取robots
    public function action_ajax_getrobots()
    {
        $file = BASEPATH.'\robots.txt';
        //echo $file;
        $filecontent = file_get_contents($file);
        $out = array('robots'=>$filecontent);
        echo json_encode($out);
    }
    public function action_ajax_saverobots()
    {
        $file = BASEPATH.'\robots.txt';
        $fp = fopen($file,"wb");
        flock($fp,3);
        //@flock($this->open,3);
        fwrite($fp,Arr::get($_POST,'robots'));
        fclose($fp);
        echo json_encode(array('status'=>true));

    }
    /*
     * 公告设置
     * */
    public function action_gonggao()
    {
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $this->assign('configinfo',$configinfo);
        $this->display('stourtravel/config/gonggao');
    }

    /*
    * 系统参数设置
    * */
    public function action_syspara()
    {
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $templetlist = ORM::factory('templet')->get_all();
        $this->assign('config',$configinfo);
        $this->assign('templetlist',$templetlist);

        $this->display('stourtravel/config/syspara');
    }

    /*
     * 支付接口设置页面
     * */
    public function action_payset()
    {
        $configinfo = ORM::factory('sysconfig')->getConfig(0);

        $this->assign('config',$configinfo);
        $this->display('stourtravel/config/payset');
    }






}