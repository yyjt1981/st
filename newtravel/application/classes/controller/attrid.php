<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Attrid extends Stourweb_Controller{
     public static $table_arr=array(
         1=>'line_attr',
         2=>'hotel_attr',
         3=>'car_attr',
         4=>'article_attr',
         5=>'spot_attr',
         6=>'photo_attr',
         13=>'tuan_attr'
     );
	 public static $product_arr=array(
         1=>'line',
         2=>'hotel',
         3=>'car',
         4=>'article',
         5=>'spot',
         6=>'photo',
         13=>'tuan'
     );
     public static $product_name=array(
         1=>'线路',
         2=>'酒店',
         3=>'租车',
         4=>'文章',
         5=>'景点',
         6=>'相册',
         13=>'团购'

     );
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);
        $this->assign('weblist',Common::getWebList());
    }
	 /*
	   获取某个产品的所有属性，并以json方式返回
	 */
	 public function action_ajax_attridlist()
	 {
		 $typeid=Arr::get($_POST,'typeid');
		 $list=self::getattridlist($typeid);
         echo json_encode($list);	 
	 }
	 /*
	    设置某个产品的属性
	 */
	 public function action_ajax_setattrid()
	 {
		 $typeid=Arr::get($_POST,'typeid');
		 $productid=Arr::get($_POST,'productid');
		 $attrids=Arr::get($_POST,'attrids');
		 
		$is_success='ok';
		$productid_arr=explode('_',$productid);
		foreach($productid_arr as $k=>$v)
		{
			$model=ORM::factory(self::$product_arr[$typeid],$v);
			if($model->id)
			{
				$model->attrid=$attrids;
				$model->save();
				if(!$model->saved())
				   $is_success='no';
			}
		}
		echo $is_success;
	 }

    /*
     * 属性列表
     * */
     public function action_list()
     {



         $action=$this->params['action'];
         $typeid = $this->params['typeid'];//栏目id.
         $attrtable = self::$table_arr[$typeid];//当前操作表

         if(empty($action))
         {
             $channelname = self::$product_name[$typeid];//产品名
             $menu = self::$product_arr[$typeid].'kind';
             $this->assign('typeid',$typeid);
             $this->assign('menu',$menu);
             $this->assign('channelname',$channelname);
             $this->display('stourtravel/attr/list');
         }
         else if($action=='read')
         {


             $node=Arr::get($_GET,'node');
             $list=array();
             if($node=='root')//属性组根
             {
                 $list=ORM::factory($attrtable)->where('pid','=','0')->get_all();
                 foreach($list as $k=>$v)
                 {
                     $list[$k]['kindname']=Model_Destinations::getKindnameList($v['destid']);
                     $list[$k]['allowDrag']=false;
                 }
                 $list[]=array(
                     'leaf'=>true,
                     'id'=>'0add',
                     'attrname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub(0)">添加</button>',
                     'allowDrag'=>false,
                     'allowDrop'=>false,
                     'displayorder'=>'add'
                 );
             }
             else //子级
             {
                 $list=ORM::factory($attrtable)->where('pid','=',$node)->get_all();
                 foreach($list as $k=>$v)
                 {
                     $list[$k]['kindname']=Model_Destinations::getKindnameList($v['destid']);
                     $list[$k]['leaf']=true;
                 }
                 $list[]=array(
                     'leaf'=>true,
                     'id'=>$node.'add',
                     'attrname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub(\''.$node.'\')">添加</button>',
                     'allowDrag'=>false,
                     'allowDrop'=>false,
                     'displayorder'=>'add'
                 );
             }
             echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
         }
         else if($action=='addsub')//添加子级
         {
             $pid=Arr::get($_POST,'pid');

             $model=ORM::factory($attrtable);
             $model->pid=$pid;
             $model->attrname="未命名";
             $model->save();

             if($model->saved())
             {
                 $model->reload();
                 echo json_encode($model->as_array());
             }
         }
         else if($action=='save') //保存修改
         {
             $rawdata=file_get_contents('php://input');
             $field=Arr::get($_GET,'field');
             $data=json_decode($rawdata);
             $id=$data->id;
             if($field)
             {
                 $model=ORM::factory($attrtable,$id);
                 if($model->id)
                 {
                     $model->$field=$data->$field;
                     $model->save();
                     if($model->saved())
                         echo 'ok';
                     else
                         echo 'no';
                 }
             }

         }
         else if($action=='drag') //拖动
         {
             $moveid=Arr::get($_POST,'moveid');
             $overid=Arr::get($_POST,'overid');
             $position=Arr::get($_POST,'position');
             $movemodel=ORM::factory($attrtable,$moveid);
             $overmodel=ORM::factory($attrtable,$overid);
             if($position=='append')
             {
                 $movemodel->pid=$overid;
             }
             else
             {
                 $movemodel->pid=$overmodel->pid;
             }
             $movemodel->save();
             if($movemodel->saved())
                 echo 'ok';
             else
                 echo 'no';


         }

         else if($action=='delete')//属性删除
         {
             $rawdata=file_get_contents('php://input');
             $data=json_decode($rawdata);
             $id=$data->id;
             if(!is_numeric($id))
             {
                 echo json_encode(array('success'=>false));
                 exit;
             }
             $model=ORM::factory($attrtable,$id);
             $model->deleteClear();

         }
         else if($action=='update')//更新操作
         {
             $id=Arr::get($_POST,'id');
             $field=Arr::get($_POST,'field');
             $val=Arr::get($_POST,'val');
             $model=ORM::factory($attrtable,$id);
             if($model->id)
             {
                 $model->$field=$val;
                 $model->save();
                 if($model->saved())
                     echo 'ok';
                 else
                     echo 'no';
             }
         }

     }

    /*
     * 属性高级配置
     * */
     public function action_config()
     {
         $attrid = $this->params['id'];
         $typeid = $this->params['typeid'];

         $table = self::$table_arr[$typeid];
         $info = ORM::factory($table,$attrid)->as_array();
         $this->assign('info',$info);
         $this->assign('typeid',$typeid);

         $this->display('stourtravel/attr/config');

     }
    /*
     * 属性配置保存
     * */
    public function action_ajax_config_save()
    {
        $typeid = ARR::get($_POST,'typeid');
        $table = self::$table_arr[$typeid];
        $id = ARR::get($_POST,'attrid');
        $desc = ARR::get($_POST,'description');
        $litpic = ARR::get($_POST,'litpic');
        $model = ORM::factory($table,$id);
        $model->litpic = $litpic;
        $model->description = $desc;
        $model->update();
        if($model->saved())
        {
            echo json_encode(array('status'=>true));
        }
    }
	 /*
	   根据typeid获取某个产品属性的列表 ，以json方式返回
	 */
	 public static function getattridlist($typeid)
	 {
		 $model=ORM::factory(self::$table_arr[$typeid]);
		 $list=$model->where('isopen=1 and pid=0')->get_all();
		 foreach($list as $k=>$v)
		 {
			 $list[$k]['children']=$model->where("pid={$v['id']} and isopen=1")->get_all();
		 }
		 return $list;
		 
	 }




}