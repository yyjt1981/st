<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Stourweb_Controller{

    public function before()
    {
        parent::before();
        $this->assign('cmsurl', URL::site());

    }
    //后台首页(框架)
    public function action_index()
    {
        //$config = Common::getConfig('menu.产品');
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $this->assign('configinfo',$configinfo);

        $this->display('stourtravel/index');
    }

    //index_home
    public function action_home()
    {
        $this->display('stourtravel/index_home');
    }
    //set_base
    public function action_base()
    {
        $this->display('stourtravel/config/config_index');
    }

    //index_new
    public function action_index_new()
    {

        $menu = Common::getConfig('menu_sub');
        $this->assign('menu',$menu);

        $this->display('stourtravel/index_new');
    }

    public function action_ajax_get_last_article()
    {
        $article = Common::objectToArray(json_decode(Common::http('www.stourweb.com/Api/index')));

        echo json_encode($article);
    }
    /*
     * 删除缓存
     * */
    public function action_ajax_clearcache()
    {
        $dir = array(SLINEDATA.'/tplcache',SLINEDATA.'/dest',APPPATH.'/cache/tplcache/stourtravel');
        //先删除目录下的文件：
        foreach($dir as $v)
        {
           self::delDirFile($v);
        }
        echo 'ok';
    }

    public function delDirFile($dir)
    {
        $dh=opendir($dir);
        while ($file=readdir($dh))
        {
            if($file!="." && $file!="..")
            {
                $fullpath=$dir."/".$file;
                if(!is_dir($fullpath))
                {
                    unlink($fullpath);
                }
                else
                {
                    self::delDirFile($fullpath);
                }

            }
        }
        closedir($dh);
    }

    //生成HTML
    public function action_ajax_makehtml()
    {
        $this->makeHtml();
        $this->sync_search();
        echo 'ok';
    }

    //同步search表
    public function sync_search()
    {
        $list=ORM::factory('line')->where('ishidden','=',0)->find_all()->as_array();
        $searchItem = new Search();
        foreach($list as $item){

//            $searchItem->webid = $row['webid'];
//            $searchItem->typeid = 1;
//            $searchItem->aid = $row['aid'];
//            $searchItem->title = $row['linename'];
//            $searchItem->description = '';
//            $searchItem->litpic = $row['linepic'];
//            $searchItem->shownum = $row['shownum'];
//            $searchItem->addSearchItem();
        }

//        global $dsql;
//
//        // 产品同步
//        $sql = "select * from  #@__line where ishidden = 0";
//        $arr = $dsql->getAll($sql);

//        $searchItem = new Search();
//        foreach ($arr as $row){
//            $searchItem->webid = $row['webid'];
//            $searchItem->typeid = 1;
//            $searchItem->aid = $row['aid'];
//            $searchItem->title = $row['linename'];
//            $searchItem->description = '';
//            $searchItem->litpic = $row['linepic'];
//            $searchItem->shownum = $row['shownum'];
//            $searchItem->addSearchItem();
//        }

    }

    /*
     * 生成HMTL
     * */
    public function makeHtml()
    {

        include(PUBLICPATH.'/vendor/httpdown.class.php');
        $storage = array(
            '/',
            '/lines/',
            '/hotels/',
            '/cars/',
            '/raiders/',
            '/spots/',
            '/visa/',
            '/tuan/',
            '/destination/'
        );
        $http = new HttpDown();//实例化下载类
        foreach($storage as $value)
        {
            $url = $GLOBALS['cfg_basehost'].$value.'index.php?genpage=1';
            $savepath = BASEPATH.$value.'index.html';
            $http->OpenUrl($url);
            $http->SaveToBin($savepath);



        }

    }


}