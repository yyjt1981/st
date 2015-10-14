<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Icon extends Stourweb_Controller{

        public function before()
        {
            parent::before();
            $this->assign('parentkey',$this->params['parentkey']);
            $this->assign('itemid',$this->params['itemid']);
            $this->assign('weblist',Common::getWebList());
        }
	    private $product_arr=array(
            1=>'line',
            2=>'hotel',
            3=>'car',
            4=>'article',
            5=>'spot',6
            =>'photo',
            8=>'visa',
            13=>'tuan');


       public function action_index()
       {
           $action=$this->params['action'];
           if(empty($action))  //显示列表
           {
               $this->display('stourtravel/icon/list');
           }
           else if($action=='read')    //读取列表
           {
               $start=Arr::get($_GET,'start');
               $limit=Arr::get($_GET,'limit');
               $sql="select a.*  from sline_icon as a limit $start,$limit";
               //echo $sql;


               $totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_icon a ")->execute()->as_array();
               $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
               $new_list=array();
               foreach($list as $k=>$v)
               {
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
                   $model=ORM::factory('icon',$id);
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
                   $model=ORM::factory('icon')->where('id','=',$id)->find();

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
  * 添加
  * */
    public function action_add()
    {
        $this->assign('action','add');
        $this->display('stourtravel/icon/edit');
    }
    /*
     * 修改
     * */
    public function action_edit()
    {
        $id = $this->params['id'];//会员id.
        $this->assign('action','edit');
        $info = ORM::factory('icon',$id)->as_array();
        $this->assign('info',$info);
        $this->display('stourtravel/icon/edit');
    }
    /*
     * 保存
     * */
    public function action_ajax_save()
    {
        $action = ARR::get($_POST,'action');//当前操作
        $id = ARR::get($_POST,'id');

        $status = false;


        //添加操作
        if($action == 'add' && empty($id))
        {
            $model = ORM::factory('icon');


        }
        else
        {
            $model = ORM::factory('icon')->where('id','=',$id)->find();

        }

        $model->kind = ARR::get($_POST,'kind');
        $model->picurl = ARR::get($_POST,'litpic');


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
                $productid = $model->id; //插入的产品id

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
	      获取图标的json列表
	   */
	   public function action_ajax_iconlist()
	   {
		   $model=ORM::factory('icon');
		   $list=$model->get_all();
		   echo json_encode($list);
	   }
	   /*
	     设置产品的iconlist
	   */
	   public function action_ajax_seticon()
	   {
		 $typeid=Arr::get($_POST,'typeid');
		 $productid=Arr::get($_POST,'productid');
		 $icons=Arr::get($_POST,'icons');
	   
	    $is_success='ok';
		$productid_arr=explode('_',$productid);
		foreach($productid_arr as $k=>$v)
		{
			$model=ORM::factory($this->product_arr[$typeid],$v);
			if($model->id)
			{
				$model->iconlist=$icons;
				$model->save();
				if(!$model->saved())
				   $is_success='no';
			}
		}
		echo $is_success;
	  }
}