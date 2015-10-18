<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Destination extends Stourweb_Controller{

    private $product_arr=array(1=>'line',2=>'hotel',3=>'car',4=>'article',5=>'spot',6=>'photo',13=>'tuan');
    private $name_arr=array(1=>'线路',2=>'酒店',3=>'租车',4=>'文章',5=>'景点',6=>'相册',13=>'团购');
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);


    }
    public function action_destination()
	{
		 
		 $action=$this->params['action'];
	
		if(empty($action))
		{
		  $typeid=$this->params['typeid'];
		  $typeid=empty($typeid)?0:$typeid;
          $position = $typeid==0 ? '夏令营种类':$this->name_arr[$typeid].'目的地';
		  $this->assign('typeid',$typeid);
          $this->assign('position',$position);
		  $this->display('stourtravel/destination/destination');
		}
		else if($action=='read')
		{
		   $node=Arr::get($_GET,'node');
		   $typeid=Arr::get($_GET,'typeid');
		   $node_arr=explode('_',$node);
		   
		   $pid=$node_arr[1]=='root'?0:$node_arr[1];
		   if(empty($typeid))
		   {
			   $sql="select * from sline_destinations where pid=$pid";
		   }
		   else
		   {
			   $product_dest_table='sline_'.$this->product_arr[$typeid].'_kindlist';
               $bfields = 'b.kindid,b.seotitle,b.keyword,b.description,b.tagword,b.jieshao,b.isfinishseo,b.isnav,b.ishot,b.displayorder';
			   $sql="select a.id,a.kindname,a.isopen,a.pinyin,{$bfields} from sline_destinations a left join $product_dest_table b on a.id=b.kindid where a.pid=$pid";

		   }
		   $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
           if($typeid==0) //只有主目的地有添加功能.
           {
               $list[]=array(
                   'leaf'=>true,
                   'id'=>$pid.'add',
                   'kindname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub('.$pid.')">添加</button>',
                   'allowDrag'=>false,'allowDrop'=>false,'displayorder'=>'add',
                   'isopen'=>'add',
                   'isnav'=>'add',
                   'istopnav'=>'add',
                   'ishot'=>'add',
                   'pinyin'=>'add'
               );
           }

		   echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
		//   $this->assign('list',$list);
		}
		else if($action=='update')
		{
			$id=Arr::get($_POST,'id');
			$field=Arr::get($_POST,'field');
			$val=Arr::get($_POST,'val');
			$typeid=Arr::get($_POST,'typeid');

			if($typeid==0)
			{
			    $model=ORM::factory('destinations',$id);
                $model->$field=$val;

            }
			else
			{
			  $model=ORM::factory($this->product_arr[$typeid].'_kindlist')->where("kindid=$id")->find();
              if(!$model->loaded())
              {

                  //$model = ORM::factory($this->product_arr[$typeid].'_kindlist');
                  $model->kindid = $id;

              }
              $model->$field=$val;

			}

            $model->save();
            if($model->saved())
                echo 'ok';
            else
                echo 'no';


		}
		else if($action=='save')
		{
		   $rawdata=file_get_contents('php://input');
		   $field=Arr::get($_GET,'field');
           $typeid=Arr::get($_GET,'typeid');
           $current_pinyin = Arr::get($_GET,'pinyin');
		   $data=json_decode($rawdata);

		   $dest_id_arr=explode('_',$data->id);
           $dest_id=$dest_id_arr[1];

		   
		   if(!is_numeric($dest_id_arr[1]))
           {
			   echo json_encode(array('success'=>false));
		   }
           if($typeid==0)
           {
               $dest=ORM::factory('destinations',$dest_id_arr[1]);
               if($field)
               {
                   if($field=='kindname')
                   {
                      $dest->pinyin = empty($current_pinyin) ? Common::getPinYin($data->$field) : $current_pinyin;
                   }
                   $dest->$field=$data->$field;
               }
               else
               {
                   unset($data->id);
                   unset($data->parentId);
                   unset($data->leaf);
				   unset($data->issel);
				   unset($data->shownum);
                   foreach($data as $k=>$v)
                   {
                       $dest->$k=$v;
                   }
               }

           }
           else
           {

               $dest=ORM::factory($this->product_arr[$typeid].'_kindlist')->where("kindid=$dest_id")->find();

               if(!$dest->loaded())
               {

                   $dest->kindid = $dest_id;
                   $dest->displayorder = $data->displayorder;

               }

               else
               {
                   unset($data->id);
                   unset($data->parentId);
                   unset($data->leaf);
                   unset($data->kindname);
                   unset($data->isopen);
                   unset($data->istopnav);
                   unset($data->pinyin);
                   unset($data->pid);
                   unset($data->kindtype);
                   unset($data->litpic);
                   unset($data->piclist);
                   unset($data->issel);
                   unset($data->shownum);
                   foreach($data as $k=>$v)
                   {
                       $dest->$k=$v;
                   }

                   $dest->displayorder = $data->displayorder;

               }

           }

           $dest->displayorder=empty($dest->displayorder)?9999:$dest->displayorder;

           $dest->save();
           if($dest->saved())
           {
                echo json_encode(array('success'=>true));
           }
           else
                echo json_encode(array('success'=>false));
		}
		else if($action=='uploadfile')
		{
			$file=$_FILES['Filedata'];
			
			$rootpath=realpath(DOCROOT.'../');
			$dir=$rootpath."/uploads/main/".date('Ymd');
			
			if(!file_exists($dir))
			     mkdir($dir);
			$path_info=pathinfo($_FILES['Filedata']['name']);
		    $filename=date('His').'.'.$path_info['extension'];

			Upload::$default_directory=$dir;//默认保存文件夹
			Upload::$remove_spaces=true;//上传文件删除空格
			if(Upload::valid($file)){
					if(Upload::size($file,"1M")){
						if(Upload::type($file,array('jpg', 'png', 'gif'))){
							if(Upload::save($file,$filename)){
								
								$newfile=$dir.'/'.$filename;
								 Image::factory($newfile)
								->resize(600, 400, Image::AUTO)
								->save($newfile);
				                 echo substr(substr($newfile,strpos($dir,'/uploads')-1),1);
								  
							}else{
								echo "error_no";
							}
						}else{
							echo "error_type";
						}
					}else{
						echo "error_size";
					}
			}else{
				echo "error_null";
			}
         
			
		}
		else if($action=='addsub')
		{
			$pid=Arr::get($_POST,'pid');
			
			$dest=ORM::factory('destinations');
			$dest->pid=$pid;
			$dest->kindname="未命名";
			$dest->save();
			
			if($dest->saved())
			{
				$dest->reload();
				$dest->updateSibling('add');
 				echo json_encode($dest->as_array());
			}
		}
		else if($action=='drag')
		{
			$moveid=Arr::get($_POST,'moveid');
			$overid=Arr::get($_POST,'overid');
			$position=Arr::get($_POST,'position');
			$moveDest=ORM::factory('destinations',$moveid);
		    $overDest=ORM::factory('destinations',$overid);
			if($position=='append')
			{
				$moveDest->pid=$overid;		
			}
			else
			{
				$moveDest->pid=$overDest->pid;
			}
			$moveDest->save();
			if($moveDest->saved())
				 echo 'ok';
			 else
				 echo 'no';
			
			
		}
		else if($action=='search')
		{
			$keyword=trim(Arr::get($_POST,'keyword'));
			$list=DB::query(Database::SELECT,"select id,pid from sline_destinations where kindname like '%{$keyword}%'")->execute()->as_array();
			$new_arr=array();

			foreach($list as $k=>$v)
			{
			    $temp_arr = array();
                if($v['pid']!=0)
				{
					$temp_id=$v['pid'];
					$temp_arr=array($v['pid'],$v['id']);
					while(true)
					{
						$temp_dest=ORM::factory('destinations',$temp_id)->as_array();
						if($temp_dest['pid']!=0)
						{
							array_unshift($temp_arr,$temp_dest['pid']);
							$temp_id=$temp_dest['pid'];
						}
						else
						   break;
					}

					$new_arr[]=$temp_arr;
			 	   	
				}
				else 
				{
					$new_arr[]=array($v['id']);
				}


			}


			if(empty($new_arr))
			   echo 'no';
			else

			   echo json_encode($new_arr);   	
		}
		else if($action=='delete')
		{
		   $rawdata=file_get_contents('php://input');
		   $field=Arr::get($_GET,'field');	
		   $data=json_decode($rawdata);
		   $dest_id_arr=explode('_',$data->id);
		   if(!is_numeric($dest_id_arr[1]))
           {
			   echo json_encode(array('success'=>false));
			   exit;
		   }
		   $dest=ORM::factory('destinations',$dest_id_arr[1]);
		   $dest->deleteClear();
		   
		}
	}
	/*
	   获取下级目的地,用于各个列表的目的地筛选
	*/
	public function action_ajax_getNextDestList()
	{
		$pid=Arr::get($_POST,'pid');
		$keyword=Arr::get($_POST,'keyword');
		$pid=empty($pid)?0:$pid;
		
		if($keyword)
		  $sql="select id,kindname,pinyin from sline_destinations where kindname like '%{$keyword}%' order by pinyin asc";
		else 
		  $sql="select id,kindname,pinyin from sline_destinations where pid=$pid  order by pinyin asc";
		
		$destlist=DB::query(Database::SELECT,$sql)->execute()->as_array();

		echo json_encode($destlist);
	}
	/*
	  获取下级目的地和已设置的目的地名称,用于产品的目的地设置
	*/
	public function action_ajax_getDestsetList()
	{
		$pid=Arr::get($_POST,'pid');
		$keyword=Arr::get($_POST,'keyword');
		$pid=empty($pid)?0:$pid;
		$kindlist=Arr::get($_POST,'kindlist');
		
		if($keyword)
		  $sql="select id,kindname,pinyin from sline_destinations where kindname like '%{$keyword}%' and isopen=1  order by pinyin asc";
		else 
		  $sql="select id,kindname,pinyin from sline_destinations where pid=$pid and isopen=1  order by pinyin asc";
		$destlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
        foreach($destlist as $key => $row)
        {
            $sql = "select count(*) as num from sline_destinations where pid='{$row['id']}' and isopen=1";
            $r = DB::query(1,$sql)->execute()->as_array();
            $destlist[$key]['childnum'] = $r[0]['num'];
        }
		if($kindlist)
		{
			$_arr=explode(',',$kindlist);
			foreach($_arr as $k=>$v)
			{
				$_dest=ORM::factory('destinations',$v);
				if($_dest->id)
				{
					$nv['id']=$_dest->id;
					$nv['kindname']=$_dest->kindname;
					$new_arr[]=$nv;
				}
			}
		}
		$dest_parents=Model_Destinations::getParents($pid);
		echo json_encode(array('nextlist'=>$destlist,'selected'=>$new_arr,'parents'=>$dest_parents));
	}
	public function action_ajax_setdest()
	{
		$typeid=Arr::get($_POST,'typeid');
		$productid=Arr::get($_POST,'productid');
		$kindlist=Arr::get($_POST,'kindlist');
		
		
		$productid_arr=explode('_',$productid);
		
		$is_success='ok';
		foreach($productid_arr as $k=>$v)
		{
			$model=ORM::factory($this->product_arr[$typeid],$v);
			if($model->id)
			{
				$model->kindlist=$kindlist;
				$model->save();
				if(!$model->saved())
				   $is_success='no';
			}
		}
		
		echo $is_success;
		/*
		$model=ORM::factory($product_arr[$typeid],$productid);
		$kindlist=trim($kindlist,',');
		$model->kindlist=$kindlist;
		$model->save();
		if($model->saved())
		   echo 'ok';
		else
		   echo 'no';   
		*/
		
	}
	
}