<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Member extends Stourweb_Controller{

    /*
     * 会员配置总控制器
     *
     */
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);


    }

    public function action_index()
    {
        $action=$this->params['action'];
        if(empty($action))  //显示列表
        {
            $this->display('stourtravel/member/list');
        }
        else if($action=='read')    //读取列表
        {
            $start=Arr::get($_GET,'start');
            $limit=Arr::get($_GET,'limit');
            $keyword=Arr::get($_GET,'keyword');

            $order='order by a.jointime desc';

            if(!empty($keyword))
            {
                $w ="where (a.nickname like '%{$keyword}%' or a.email like '%{$keyword}%' or a.mobile like '%{$keyword}%')";
            }


            $sql="select a.*  from sline_member as a $w $order limit $start,$limit";
            //echo $sql;


            $totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_member a ")->execute()->as_array();
            $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
            $new_list=array();
            foreach($list as $k=>$v)
            {
                $v['logintime'] = Common::myDate('Y-m-d',$v['logintime']);
                $v['id'] = $v['mid'];
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
                $model=ORM::factory('member',$id);
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
                $model=ORM::factory('member')->where('mid','=',$id)->find();

            }

            if($model->mid)
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
     * 添加会员
     * */
    public function action_add()
    {
        $this->assign('action','add');
        $this->display('stourtravel/member/edit');
    }
    /*
     * 修改会员
     * */
    public function action_edit()
    {
        $mid = $this->params['mid'];//会员id.
        $this->assign('action','edit');
        $info = ORM::factory('member')->where('mid','=',$mid)->find()->as_array();
        $this->assign('info',$info);
        $this->display('stourtravel/member/edit');
    }
    /*
     * 保存
     * */
    public function action_ajax_save()
    {
        $action = ARR::get($_POST,'action');//当前操作
        $id = ARR::get($_POST,'mid');

        $status = false;


        //添加操作
        if($action == 'add' && empty($id))
        {
            $model = ORM::factory('member');
            $model->jointime = time();
            $model->mobile = ARR::get($_POST,'mobile');
            $model->pwd = md5(ARR::get($_POST,'password'));
        }
        else
        {
            $model = ORM::factory('member')->where('mid','=',$id)->find();

        }

        $model->nickname = ARR::get($_POST,'nickname');
        $model->truename = ARR::get($_POST,'truename');
        $model->email = ARR::get($_POST,'email');

        if($action=='add' && empty($id))
        {

            $model->create();
        }
        else
        {
            $model->update();
        }

        if($model->saved())
        {
            if($action=='add')
            {
                $productid = $model->mid; //插入的产品id

            }
            else
            {
                $productid =null;
            }

            $status = true;
        }
        echo json_encode(array('status'=>$status,'productid'=>$productid));

    }

    /*
     * ajax检测是否存在
     * */
    public function action_ajax_check()
    {
        $field = $this->params['type'];
        $val = ARR::get($_POST,'val');//值
        $mid = ARR::get($_POST,'mid');//会员id
        $flag = Model_Member::checkExist($field,$val,$mid);
        echo $flag;
    }

}