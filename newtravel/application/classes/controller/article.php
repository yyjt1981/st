<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Article  extends Stourweb_Controller{
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);
        $this->assign('weblist',Common::getWebList());

    }
     /*
	文章列表  
	 */
	public function action_article()
	{
		$action=$this->params['action'];
		if(empty($action))  //显示线路列表页
		{
           $this->assign('kindmenu',json_encode(Common::getConfig('menu_sub.articlekind')));//分类设置项
		   $this->display('stourtravel/article/list');
		}
		else if($action=='read')    //读取列表
		{
			$start=Arr::get($_GET,'start');
			$limit=Arr::get($_GET,'limit');
			$keyword=Arr::get($_GET,'keyword');
			$kindid=Arr::get($_GET,'kindid');
			$attrid=Arr::get($_GET,'attrid');
            $webid=Arr::get($_GET,'webid');
            $webid = empty($webid) ? 0 : $webid;
            $keyword = Common::getKeyword($keyword);
			$sort=json_decode(Arr::get($_GET,'sort'));
			$order='order by a.modtime desc';
			if($sort[0]->property)
			{
				if($sort[0]->property=='displayorder')
				{
					$order='order by displayorder '.$sort[0]->direction.',a.modtime desc';
				}
			    else if($sort[0]->property=='ishidden')
				{
					$order='order by a.ishidden '.$sort[0]->direction;
				}
				else if($sort[0]->property=='addtime')
				{
					$order='order by a.addtime '.$sort[0]->direction;
				}
			}
			$w="a.id is not null";
			$w.=empty($keyword)?'':" and a.articlename like '%{$keyword}%'";
			$w.=empty($kindid)?'':" and find_in_set($kindid,a.kindlist)";
			$w.=empty($attrid)?'':" and find_in_set($attrid,a.attrid)";
            $w.=$webid=='-1' ? '' : " and a.webid=$webid";
			
			if(empty($kindid))
			{
			  $sql="select a.id,a.allow,a.aid,a.articlename,a.attrid,a.kind,a.kindlist,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where $w $order limit $start,$limit";
			}
			else
			{
			   $sql="select a.id,a.allow,a.aid,a.articlename,a.attrid,a.kind,a.kindlist,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_kindorderlist as b on (b.classid=$kindid and a.id=b.aid and b.typeid=4)  where $w $order limit $start,$limit";
				
			}
			$totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_article a where $w")->execute()->as_array();
			$list=DB::query(Database::SELECT,$sql)->execute()->as_array();
		
			$new_list=array();
			foreach($list as $k=>$v)
			{
				
				$v['kindname']=Model_Destinations::getKindnameList($v['kindlist']);
			    $v['attrname']=Model_Article_Attr::getAttrnameList($v['attrid']);
                $v['modtime']=Common::myDate('Y-m-d',$v['modtime']);
				$new_list[]=$v;
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
		   
		   if(is_numeric($id)) 
		   {
		    $model=ORM::factory('article',$id);
		    $model->deleteClear();
		   }
		  
		   
		}
		else if($action=='update')//更新某个字段
		{
			$id=Arr::get($_POST,'id');
			$field=Arr::get($_POST,'field');
			$val=Arr::get($_POST,'val');
			$kindid=Arr::get($_POST,'kindid');
			
			
			if($field=='displayorder')  //如果是排序
			{ 
			    $displayorder=empty($val)?9999:$val;
			    if(is_numeric($id))//
				{
				    if(empty($kindid))  //全局排序
				   {
					 $order=ORM::factory('allorderlist');
					 $order_mod=$order->where("aid='$id' and typeid=4 and webid=0")->find();
					
					 if($order_mod->id)  //如果已经存在
					 {
					   $order_mod->displayorder=$displayorder;
					 }
					 else   //如果这个排序不存在
					 {
						$order_mod->displayorder=$displayorder;
						$order_mod->aid=$id;
						$order_mod->webid=0;
						$order_mod->typeid=4;
					 }
					 $order_mod->save();
					 if($order_mod->saved())
					 {
						 echo 'ok';
					 }
					 else
					     echo 'no';
				   }
				   else  //按目的地排序
				   {
					  Common::debug('here');
					  $kindorder=ORM::factory('kindorderlist');
					  $kindorder_mod=$kindorder->where("aid='$id' and typeid=4 and classid=$kindid")->find();
					  if($kindorder_mod->id)
					  {
					   $kindorder_mod->displayorder=$displayorder;
					  }
					  else
					  {
						$kindorder_mod->displayorder=$displayorder;
						$kindorder_mod->aid=$id;
						$kindorder_mod->classid=$kindid;
						$kindorder_mod->typeid=4;
					  }
					  $kindorder_mod->save();
					  if($kindorder->saved())
					     echo 'ok';
					  else
					     echo 'no';	  
					   
				   }
				}
				
				
			}
			else  //如果不是排序字段
			{
				if(is_numeric($id))
				{
					$model=ORM::factory('article',$id);
				}
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

	}

    /*
     * 添加页面
     * */
    public function action_add()
    {
        $this->assign('webid',0);
        $this->assign('position','添加攻略');
        $this->assign('action','add');
        $this->display('stourtravel/article/edit');
    }
    /*
    * 修改页面
    * */
    public function action_edit()
    {
        $productid = $this->params['id'];

        $this->assign('action','edit');
        $info = ORM::factory('article',$productid)->as_array();
        $info['kindlist_arr'] = ORM::factory('destinations')->getKindlistArr($info['kindlist']);//目的地数组
        $info['attrlist_arr'] = Common::getSelectedAttr(4,$info['attrid']);//属性数组
        $info['iconlist_arr'] = Common::getSelectedIcon($info['iconlist']);//图标数组
        //$info['piclist_arr'] =  json_encode(Common::getUploadPicture($info['piclist']));//图片数组
        $this->assign('info',$info);
        $this->assign('position','修改文章'.$info['articlename']);
        $this->display('stourtravel/article/edit');


    }
    /*
     * 保存(ajax)
     * */
    public function action_ajax_save()
    {
        $action = Arr::get($_POST,'action');//当前操作
        $id = Arr::get($_POST,'productid');
        $status = false;
        $webid = Arr::get($_POST,'webid');//所属站点
        $allow = Arr::get($_POST,'allow');//封面图片上传方式.
        $content = Arr::get($_POST,'content');//文章内容
        //添加操作
        if($action == 'add' && empty($id))
        {
            $model = ORM::factory('article');
            $model->aid = Common::getLastAid('sline_article',$webid);
            $model->addtime = time();
        }
        else
        {
            $model = ORM::factory('article',$id);
            if($model->webid != $webid) //如果更改了webid重新生成aid
            {
               $aid = Common::getLastAid('sline_article',$webid);
               $model->aid = $aid;
            }
        }

        if($allow == 'allow')
        {
            $litpic = Arr::get($_POST,'litpic');

        }
        else
        {

           $litpic = self::dowloadPicture($content);
        }



        $model->articlename = Arr::get($_POST,'articlename');
        $model->fromsite = Arr::get($_POST,'fromsite');
        $model->author = Arr::get($_POST,'author');
        $model->webid = $webid;
        $model->content = Arr::get($_POST,'content');
        $model->modtime = Arr::get($_POST,'modtime');
        $model->allow = $allow;
        $model->comefrom = Arr::get($_POST,'comefrom');
        $model->litpic = $litpic;

        $model->seotitle = Arr::get($_POST,'seotitle');//优化标题
        $model->tagword = Arr::get($_POST,'tagword');
        $model->keyword = Arr::get($_POST,'keyword');
        $model->description = Arr::get($_POST,'description');
        $model->shownum = Arr::get($_POST,'shownum')? Arr::get($_POST,'shownum'):0;
        $model->redirecturl = Arr::get($_POST,'redirecturl');




        $model->kindlist = implode(',',Arr::get($_POST,'kindlist'));//所属目的地
        $model->attrid = implode(',',Arr::get($_POST,'attrlist'));//属性
        $model->iconlist = implode(',',Arr::get($_POST,'iconlist'));//图标
        $model->modtime = time();


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
     * 下载远程图片到本地
     * */

    private  function dowloadPicture($content)
    {

        include(PUBLICPATH.'/vendor/httpdown.class.php');

        //截取内容图片路径正则
        $rule="/(src)=[\"|'| ]{0,}([^>]*\.(gif|jpg|bmp|png))/isU";

        if(preg_match($rule,$content,$array))
        {

            $url=str_replace("\"","",$array[2]);

            if(stristr($url,"http://") && !stristr($url,'arcimgs'))
            {

                $htd = new HttpDown();//实例化
                $htd->OpenUrl($url);


                $sparr = Array("image peg", "image/jpeg", "image/gif", "image/png", "image/xpng", "image/wbmp");
                if(!in_array($htd->GetHead("content-type"),$sparr))
                {
                    return '';
                }
                else
                {
                    $date=date("Ymd");
                    $name=date("YmdHis").rand(1,50);
                    $path=UPLOADPATH."/arcimgs/";

                    $url=$path.$date."/";
                    $imgUrl = $url.$name;


                    //创建路径
                    if(!file_exists($url))
                    {
                        mkdir($url);
                    }
                    $itype = $htd->GetHead("content-type");

                    if($itype=="image/gif")
                    {
                        $itype = '.gif';
                    }
                    else if($itype=="image/png")
                    {
                        $itype = '.png';
                    }
                    else if($itype=="image/wbmp")
                    {
                        $itype = '.bmp';
                    }
                    else
                    {
                        $itype = '.jpg';
                    }
                    $fileurl = $imgUrl.$itype;
                    $ok = $htd->SaveToBin($fileurl);
                    $litpic = $fileurl;


                    $litpic = Common::thumb($litpic,$litpic,240,180);

                    $litpic=str_replace(BASEPATH,'',$litpic);//去掉头
                    $litpic=str_replace('\\','/',$litpic);


                }

            }
            else
            {
                $litpic=$url;
            }

            return $litpic;



        }
    }
	

}