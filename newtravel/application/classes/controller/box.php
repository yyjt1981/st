<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Box extends Stourweb_Controller{

    /*
     * 弹出框控制器
     * */
    public function before()
    {
        parent::before();
        $resultid = ARR::get($_POST,'resultid');
        $this->assign('resultid',$resultid);



    }

    public function action_index()
    {
       $type = $this->params['type'];

        //站点
       if($type=='weblist')
       {
           $this->assign('weblist',Common::getWebList());
       }
        //出发地
        if($type=='startplace')
        {
            $this->assign('startplace',ORM::factory('startplace')->where('pid=0 and isopen=1')->get_all());
        }
        //目的地
        if($type=='destlist')
        {

            $this->assign('destlist',ORM::factory('destinations')->where('pid=0 and isopen=1')->get_all());
        }
        //属性
        if($type=='attrlist')
        {
            $typeid = $this->params['typeid'];
            $this->assign('typeid',$typeid);
            $this->assign('attrlist',Model_Attrlist::getAttr($typeid));
        }
        //车辆类型
        if($type=='carkind')
        {
            $this->assign('carkindlist',ORM::factory('car_kind')->get_all());
        }
        //车辆品牌
        if($type == 'carbrand')
        {
           $this->assign('carbrandlist',ORM::factory('car_brand')->get_all());
        }
        //签证类型
        if($type == 'visatype')
        {
            $this->assign('visakindlist',ORM::factory('visa_kind')->get_all());
        }
        //签发城市
        if($type == 'visacity')
        {
            $this->assign('visacitylist',ORM::factory('visa_city')->get_all());
        }
        //帮助分类
        if($type == 'helpkind')
        {
            $this->assign('helpkindlist',ORM::factory('help_kind')->get_all());
        }


       $this->assign('type',$type);
       $this->display('stourtravel/box/index');
    }

    /*
     * 获取出发城市子级
     * */

    public function action_ajax_get_citychild()
    {
        $pid = ARR::get($_POST,'pid');
        $citylist = ORM::factory('startplace')->where("pid=$pid and isopen=1")->get_all();
        echo json_encode($citylist);
    }

    /*
    * 获取目的地子级
    * */

    public function action_ajax_get_destchild()
    {
        $pid = ARR::get($_POST,'pid');
        $citylist = ORM::factory('destinations')->where("pid=$pid and isopen=1")->get_all();
        echo json_encode($citylist);
    }

    /*
    * 获取属性子级
    * */

    public function action_ajax_get_attrchild()
    {
        $pid = ARR::get($_POST,'pid');
        $typeid = ARR::get($_POST,'typeid');
        $list = Model_Attrlist::getAttr($typeid,$pid);
        echo json_encode($list);
    }










}