<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Order extends Stourweb_Controller{


    public static $channelArr = array(
        '1'=>'线路',
        '2'=>'酒店',
        '3'=>'租车',
        '5'=>'门票',
        '8'=>'签证',
        '13'=>'团购'
    );
    /*
     * 订单总控制器
     *
     */
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);


    }

    /*
     * 订单列表
     * */
    public function action_index()
    {
        $action=$this->params['action'];
        $typeid=$this->params['typeid'];
        $webid=Arr::get($_GET,'webid');
        $this->assign('typeid',$typeid);
        //订单模板
        $channelname = self::$channelArr[$typeid];

        if(empty($action))  //显示列表
        {
            $this->assign('position',$channelname.'订单');
            $this->display('stourtravel/order/list');
        }
        else if($action=='read')    //读取列表
        {
            $start=Arr::get($_GET,'start');
            $limit=Arr::get($_GET,'limit');
            $keyword=Arr::get($_GET,'keyword');

            $order='order by a.addtime desc';
            $w = "where a.typeid = $typeid ";
            if(!empty($keyword))
            {
                $w .=" and (a.ordersn like '%{$keyword}%' or a.linkman like '%{$keyword}%' or a.linktel like '%{$keyword}%')";
            }
            $w.=empty($webid)?' and a.webid=0':" and a.webid=$webid";



            $sql="select a.*  from sline_member_order as a $w $order limit $start,$limit";
            //echo $sql;


            $totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_member_order a $w ")->execute()->as_array();
            $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
            $new_list=array();
            foreach($list as $k=>$v)
            {
                $v['addtime'] = Common::myDate('Y-m-d H:i:s',$v['addtime']);
                $v["totalnum"] = $v["dingnum"] + $v["childnum"] + $v["oldnum"];
                $new_list[] = $v;
            }
            $result['total']=$totalcount_arr[0]['num'];
            $result['lists']=$new_list;
            $result['success']=true;

            echo json_encode($result);
        }
        else if($action=='save')   //保存字段
        {

        }
        else if($action=='delete') //删除某个记录
        {
            $rawdata=file_get_contents('php://input');
            $data=json_decode($rawdata);
            $id=$data->id;

            if(is_numeric($id)) //
            {
                $model=ORM::factory('order',$id);
                $model->delete();
            }
        }
        else if($action=='update')//更新某个字段
        {
            $id=Arr::get($_POST,'id');
            $field=Arr::get($_POST,'field');
            $val=Arr::get($_POST,'val');

            if(is_numeric($id))
            {
                $model=ORM::factory('order')->where('id','=',$id)->find();

            }

            if($model->id)
            {
                $model->$field=$val;

                $model->update();
                if($model->saved())
                    echo 'ok';
                else
                    echo 'no';
            }
        }
    }


    /*
     * 查看订单信息
     * */
    public function action_view()
    {
        $id = $this->params['id'];//订单id.
        $type = $this->params['type'];//订单类型
        if($type == 'dz') //customize订单
        {
            $info = ORM::factory('customize')->where('id','=',$id)->find()->as_array();
            $templet = 'dz_view';

        }
        else if($type == 'xy') //协议订单
        {
            $info = ORM::factory('dzorder')->where('id','=',$id)->find()->as_array();
            $templet = 'xy_view';

        }
        else //普通产品订单
        {
            $info = ORM::factory('order')->where('id','=',$id)->find()->as_array();
            $templet = 'view';
        }

        $this->assign('info',$info);
        $this->display('stourtravel/order/'.$templet);
    }
    /*
     * 保存
     * */
    public function action_ajax_save()
    {

        $id = ARR::get($_POST,'id');
        $type = ARR::get($_POST,'type');
        $status = false;
        if(empty($type))
        {
            $model = ORM::factory('order',$id);
            $model->price = ARR::get($_POST,'price');

        }
        else if($type == 'dz')
        {
            $model = ORM::factory('customize',$id);

        }
        else if($type == 'xy')
        {
            $model = ORM::factory('dzorder',$id);
        }
        $model->status = ARR::get($_POST,'status');
        $model->update();

        if($model->saved())
        {
            $status = true;
        }
        echo json_encode(array('status'=>$status));
    }




    /*
     * 定制订单
     * */
    public function action_dz()
    {
        $action=$this->params['action'];
        if(empty($action))  //显示列表
        {

            $this->display('stourtravel/order/dz_list');
        }
        else if($action=='read')    //读取列表
        {
            $start=Arr::get($_GET,'start');
            $limit=Arr::get($_GET,'limit');
            $keyword=Arr::get($_GET,'keyword');

            $order='order by a.addtime desc';

            if(!empty($keyword))
            {
                $w =" where ( a.contactname like '%{$keyword}%' or a.phone like '%{$keyword}%')";
            }




            $sql="select a.*  from sline_customize as a $w $order limit $start,$limit";
            //echo $sql;


            $totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_customize a $w ")->execute()->as_array();
            $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
            $new_list=array();
            foreach($list as $k=>$v)
            {
                $v['addtime'] = Common::myDate('Y-m-d H:i:s',$v['addtime']);
                $new_list[] = $v;
            }
            $result['total']=$totalcount_arr[0]['num'];
            $result['lists']=$new_list;
            $result['success']=true;

            echo json_encode($result);
        }

        else if($action=='delete') //删除某个记录
        {
            $rawdata=file_get_contents('php://input');
            $data=json_decode($rawdata);
            $id=$data->id;

            if(is_numeric($id)) //
            {
                $model=ORM::factory('customize',$id);
                $model->delete();
            }
        }
        else if($action=='update')//更新某个字段
        {
            $id=Arr::get($_POST,'id');
            $field=Arr::get($_POST,'field');
            $val=Arr::get($_POST,'val');

            if(is_numeric($id))
            {
                $model=ORM::factory('customize')->where('id','=',$id)->find();

            }

            if($model->id)
            {
                $model->$field=$val;

                $model->update();
                if($model->saved())
                    echo 'ok';
                else
                    echo 'no';
            }
        }

    }

    /*
     * 协议订单
     * */
    public function action_xy()
    {
        $action=$this->params['action'];
        if(empty($action))  //显示列表
        {

            $this->display('stourtravel/order/xy_list');
        }
        else if($action=='read')    //读取列表
        {
            $start=Arr::get($_GET,'start');
            $limit=Arr::get($_GET,'limit');
            $keyword=Arr::get($_GET,'keyword');

            $order='order by a.addtime desc';

            if(!empty($keyword))
            {
                $w =" where ( a.username like '%{$keyword}%' or a.phone like '%{$keyword}%')";
            }




            $sql="select a.*  from sline_dzorder as a $w $order limit $start,$limit";
            //echo $sql;


            $totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_dzorder a $w ")->execute()->as_array();
            $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
            $new_list=array();
            foreach($list as $k=>$v)
            {
                $v['addtime'] = Common::myDate('Y-m-d H:i:s',$v['addtime']);
                $new_list[] = $v;
            }
            $result['total']=$totalcount_arr[0]['num'];
            $result['lists']=$new_list;
            $result['success']=true;

            echo json_encode($result);
        }

        else if($action=='delete') //删除某个记录
        {
            $rawdata=file_get_contents('php://input');
            $data=json_decode($rawdata);
            $id=$data->id;

            if(is_numeric($id)) //
            {
                $model=ORM::factory('customize',$id);
                $model->delete();
            }
        }
        else if($action=='update')//更新某个字段
        {
            $id=Arr::get($_POST,'id');
            $field=Arr::get($_POST,'field');
            $val=Arr::get($_POST,'val');

            if(is_numeric($id))
            {
                $model=ORM::factory('dzorder')->where('id','=',$id)->find();

            }

            if($model->id)
            {
                $model->$field=$val;

                $model->update();
                if($model->saved())
                    echo 'ok';
                else
                    echo 'no';
            }
        }

    }


}