<?php
/**
 * 公共静态类模块
 * User: Netman
 * Date: 14-4-1
 * Time: 下午1:48
 */
class Common {

   public static $pinyin = array();
    /**
     *  获取编辑器
     *
     * @access    public
     * @param     string  $fname 表单名称
     * @param     string  $fvalue 表单值
     * @param     string  $nheight 内容高度
     * @param     string  $etype 编辑器类型
     * @param     string  $gtype 获取值类型
     * @param     string  $isfullpage 是否全屏
     * @return    string
     */
   public static function getEditor($fname,$fvalue,$nwidth="700",$nheight="350",$etype="Sline",$ptype='',$gtype="print",$jsEditor=false)
    {


            require(DOCROOT . '/public/vendor/slineeditor/ueditor.php');
            $UEditor = new UEditor();
            $UEditor->basePath = $GLOBALS['cfg_cmspath'].'/public/vendor/slineeditor/';
            $nheight = $nheight==400 ? 300 : $nheight;
            $config = $events = array();
            $GLOBALS['tools'] = empty($toolbar[$etype])? $GLOBALS['tools'] : $toolbar[$etype] ;
            $config['toolbars'] = $GLOBALS['tools'];
            $config['minFrameHeight'] = $nheight;
            $config['initialFrameHeight'] = $nheight;
            $config['initialFrameWidth'] = $nwidth;
			if(!$jsEditor)
		    {
              $code = $UEditor->editor($fname, $fvalue, $config, $events);
			}
			else
		    {
			  $code = $UEditor->jseditor($fname,$fvalue,$config,$events);
			}

            if($gtype=="print")
            {
                echo $code;
            }
            else
            {
               return $code;
            }

    }
    //根据用，号隔开的字符串，生成script标签
    public static function getScript($filelist,$default=true)
    {
        $filearr = explode(',',$filelist);
        //$theme = Kohana::$config->load('webinfo','theme');
        $out = '';
        foreach($filearr as $file)
        {
            if($default == true)
            {
                $tfile = DOCROOT."/public/js/".$file;

                $file = '/public/js/'.$file;
            }
            else
            {
                $tfile = DOCROOT.$file;

            }
           // $tfile = $default ? DOCROOT."/public/js/".$file : DOCROOT.$file;
            if(file_exists($tfile))
            {
                $out.=HTML::script($file);
            }

        }
        return $out;

    }
    //根据用，号隔开的字符串，生成style标签
    public static function getCss($filelist,$folder='css')
    {
        $filearr = explode(',',$filelist);
        $out = '';
        //$theme = Kohana::$config->load('webinfo','theme');
        foreach($filearr as $file)
        {
            $tfile = DOCROOT."/public/{$folder}/".$file;
            $file = "/public/{$folder}/{$file}";
            if(file_exists($tfile))
            {
                $out.=HTML::style($file);
            }

        }
        return $out;
    }
    /*
     * 获取配置文件值
     * */
    public static function getConfig($group)
    {
        return Kohana::$config->load($group);
    }
    /*
     * 获取子站点信息
     *@param int webid
     *@return array
     *
     */
    public static function getWebInfo($webid)
    {
        $row = ORM::factory('weblist')
                  ->where('webid','=',$webid)
                  ->find()->as_array();
        return $row;
    }

    /*
     * 获取子站列表
     * return array
     * */
    public static function getWebList()
    {
        $arr = ORM::factory('weblist')->where('webid!=0','','')->get_all();

        return $arr;
    }

    /*
     * ico图标获取
     * @parameter string
     * @return img string
     * */
    public static function getIco($type,$helpid=0)
    {
        switch($type)
        {
            case 'help':
                $out = "<img class='fl' style='cursor:pointer' src='".$GLOBALS['cfg_public_url']."images/help-ico.png' onclick='ST.Util.helpBox(this,".$helpid.",event)' />";
                break;
            case 'edit':
                $out = "<img class='' src='".$GLOBALS['cfg_public_url']."images/xiugai-ico.gif' />";
                break;
            case 'del':
                $out = "<img class='' src='".$GLOBALS['cfg_public_url']."images/del-ico.gif' />";
                break;
            case 'hide':
                $out = "<img class='' src='".$GLOBALS['cfg_public_url']."images/close-s.png' data-show='0' />";
                break;
            case 'show':
                $out = "<img class='' src='".$GLOBALS['cfg_public_url']."images/show-ico.png' data-show='1' />";
                break;
            case 'preview':
                $out = "<img class='' src='".$GLOBALS['cfg_public_url']."images/preview.png' data-show='1' />";
                break;
        }

        return $out;
    }
    /*
     * 获取aid
     * @param string table
     * @param int webid
     * @return lastaid
     * */
    public static function getLastAid($tablename,$webid=0)
    {
            $aid=1;//初始值
            $sql="select max(aid) as aid from {$tablename} where webid=$webid order by id desc";
            $row= DB::query(1,$sql)->execute()->as_array();
            if(is_array($row))
            {
                $aid=$row[0]['aid']+1;
            }
            return $aid;
    }
    /*
	删除一个图片及它的所有缩略图和原图
	*/
	public static function deleteRelativeImage($imgpath)
	{
		if(empty($imgpath))
		    return;
		unlink(BASEPATH.$imgpath);
		$dir_arr=array('lit240','allimg','lit160','litimg');
		$dir_rep='';
		foreach($dir_arr as $k=>$v)
		{
			if(strpos($v,$imgpath)!==false)
			{
			   $dir_rep=$v;
			   unset($dir_arr[$k]);
			   break;
			}
		}
		if(!$dir_rep)
		{
			return;
		}
		foreach($dir_arr as $k=>$v)
		{
			$del_path=str_replace($dir_rep,$v,$imgpath);
			unlink(BASEPATH.$del_path);
		}

	}
	/*
	   删除内容里的图片
	*/
	public static function deleteContentImage($content,$folder='uploads')
	{
		$match=array();
		preg_match_all('/<img.+src=[\"\']?(.+\.(jpg|gif|bmp|bnp|png))[\"\']?.+\/?>/iU',$content,$match);
		$img_arr=$match[1];
		foreach($img_arr as $k=>$v)
		{
			$pos=strpos($v,$folder);
			if($pos===false)
			  continue;
			$img_relative_path=substr($v,$pos);
			$img_full_path=BASEPATH.'/'.$img_relative_path;
			unlink($img_full_path);
		}	
	}
    /*
     * 清空数组里的空值
     * */
    public static function removeEmpty($arr)
    {

            $newarr=array_diff($arr,array(null,'null','',' '));
            return $newarr;

    }
    /*
     * 根据,分隔的属性字符串获取相应的属性数组(修改页面用)
     */
    public static function getSelectedAttr($typeid,$attr_str)
    {
        $productattr_arr=array(1=>'line_attr',2=>'hotel_attr',3=>'car_attr',4=>'article_attr',5=>'spot_attr',6=>'photo_attr',13=>'tuan_attr');
        $attrid_arr=explode(',',$attr_str);
        $attr_arr=array();
        foreach($attrid_arr as $k=>$v)
        {
            $attr=ORM::factory($productattr_arr[$typeid])->where("pid!=0 and id='$v'")->find();
            if($attr->id)
            {
              $attr_arr[]=$attr->as_array();
            }
        }
        return $attr_arr;
    }
    /*
     * 根据,分隔的字符串获取图标数组(修改页面用)
     * */
    public static function getSelectedIcon($iconlist)
    {
       $iconid_arr=explode(',',$iconlist);
       $iconarr=array();
       foreach($iconid_arr as $k=>$v)
       {
           $icon=ORM::factory('icon',$v);
           if($icon->id)
               $iconarr[]=$icon->as_array();
       }

       return $iconarr;
    }
    /*
     * 根据逗号分隔的字符串供应商数组(修改页面用)
     * */
    public static function getSelectedSupplier($supplierlist)
    {
        $supplier_arr=explode(',',$supplierlist);
        $arr=array();
        foreach($supplier_arr as $k=>$v)
        {
            $row=ORM::factory('supplier',$v);
            if($row->id)
                $arr[]=$row->as_array();
        }

        return $arr;
    }

    /*
     * 根据,分隔字符串获取上传的图片数组(修改页面用)
     * */
    public static function getUploadPicture($piclist)
    {
        $out = array();

        $arr = self::removeEmpty(explode(',',$piclist));

        foreach($arr as $row)
        {
            $picinfo = explode('||',$row);
            $out[]=array('litpic'=>$picinfo[0],'desc'=>isset($picinfo[1]) ? $picinfo[1] : '');
        }
        return $out;
    }
    /*
     * 获取默认图片
     * */
    public static function getDefaultImage()
    {
        return !empty($GLOBALS['cfg_df_img']) ? $GLOBALS['cfg_df_img'] : $GLOBALS['cfg_public_url'].'images/nopic.jpg';
    }
    /*
     * 生成缩略图
     *
     * */
    public static function thumb($srcfile,$savepath,$w,$h)
    {
        Image::factory($srcfile)
            ->resize($w, $h,Image::WIDTH)
            ->save($savepath);
        return $savepath;
    }
    /*
     * 时间转换函数
     * */
    public static function myDate($format,$timest)
    {
        $addtime = 8 * 3600;
        if(empty($format))
        {
            $format = 'Y-m-d H:i:s';
        }
        return gmdate ($format, $timest+$addtime);
    }
    /*
     * 获取网站http网址
     * */
    public static function getWebUrl($webid=0)
    {
        return $GLOBALS['cfg_basehost'];
    }

    /*
    * 获取文件扩展名
    * */
    public static function getExtension($file)
    {
        return end(explode('.', $file));
    }

    /*
     * 级联删除文件夹
     */
    public static function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") self::rrmdir($dir."/".$object); else unlink($dir."/".$object);
                }
            }
            reset($objects);
            rmdir($dir);
        }

    }
    /*
     * 调试信息
     * */
    public static function debug($log)
    {

        ChromePhp::log($log);

    }
    /*
     * 保存文件
     * */
    public static function saveToFile($file,$content)
    {

        $fp = fopen($file,"wb");
        flock($fp,3);
        //@flock($this->open,3);
        $result = fwrite($fp,$content);
        fclose($fp);
        return $result;
    }
    /*
     * 获取编号
     * */
    //获取编号,共6位,不足6位前面被0
    public static function getSeries($id,$prefix)
    {
          $ar = array(
            '01'=>'A',
            '02'=>'B',
            '05'=>'C',
            '03'=>'D',
            '08'=>'E',
            '13'=>'G'
          );
        $prefix = $ar[$prefix];
        $len=strlen($id);
        $needlen=4-$len;
        if($needlen==3)$s='000';
        else if($needlen==2)$s='00';
        else if($needlen==1)$s='0';

        $out=$prefix.$s."{$id}";
        return $out;

    }
    //检查一个串是否存在在某个串中
    public static function checkStr($str,$substr)
    {

        $tmparray = explode($substr,$str);
        if(count($tmparray)>1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    /*
     * 后台获取搜索词
     * */
    public static function getKeyword($keyword)
    {
        $keyword = str_replace(' ','',trim($keyword));
        $num = substr($keyword,1,strlen($keyword));
        $out = '';
        if(intval($num))
        {
            $out = intval($num);
        }
        else
        {
            $out = $keyword;
        }
       /* $flag = intval($keyword);

        if($flag)
        {
            $num = substr($keyword,1,strlen($keyword));

            $keyword = intval($num);
        }*/

        return $out;
    }
    /*
     * curl http访问
     * */
    public static function http($url,$method='get',$postfields='')
    {

        $ci=curl_init();

        curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);

        if($method=='POST')
        {
            curl_setopt($ci, CURLOPT_POST, TRUE);
            if($postfields!='')curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
        }

        curl_setopt($ci, CURLOPT_URL, $url);
        $response=curl_exec($ci);
        curl_close($ci);
        return $response;

    }

    public static function objectToArray($array)
    {
        if(is_object($array)){
            $array = (array)$array;
        }
        if(is_array($array)){
            foreach($array as $key=>$value){
                $array[$key] = self::objectToArray($value);
            }
        }
        return $array;
    }
    /**
     *  获取拼音信息
     *
     * @access    public
     * @param     string  $str  字符串
     * @param     int  $ishead  是否为首字母
     * @param     int  $isclose  解析后是否释放资源
     * @return    string
     */
    public static function getPinYin($str, $ishead=0, $isclose=1)
    {
        $str = iconv('utf-8','gbk//ignore',$str);
        $restr = '';
        $str = trim($str);
        $slen = strlen($str);
        if($slen < 2)
        {
            return $str;
        }

        if(count(self::$pinyin) == 0)
        {
            $fp = fopen(PUBLICPATH.'/vendor/pinyin/pinyin.dat', 'r');
            while(!feof($fp))
            {
                $line = trim(fgets($fp));
                self::$pinyin[$line[0].$line[1]] = substr($line, 3, strlen($line)-3);
            }
            fclose($fp);
        }
        for($i=0; $i<$slen; $i++)
        {
            if(ord($str[$i])>0x80)
            {
                $c = $str[$i].$str[$i+1];
                $i++;
                if(isset(self::$pinyin[$c]))
                {
                    if($ishead==0)
                    {
                        $restr .= self::$pinyin[$c];
                    }
                    else
                    {
                        $restr .= self::$pinyin[$c][0];
                    }
                }else
                {
                    $restr .= "_";
                }
            }else if( preg_match("/[a-z0-9]/i", $str[$i]) )
            {
                $restr .= $str[$i];
            }
            else
            {
                $restr .= "_";
            }
        }
        if($isclose==0)
        {
            unset(self::$pinyin);
        }
        $sheng = "/.*sheng.*/";
        $shi = "/.*shi.*/";
        $qu = "/.*qu.*/";
        if(preg_match($sheng,$restr,$matches))
        {
            $restr = str_replace('sheng','',$matches[0]);
        }
        if(preg_match($shi,$restr,$matches))
        {
            $restr = str_replace('shi','',$matches[0]);
        }
        if(preg_match($qu,$restr,$matches))
        {
            $restr = str_replace('qu','',$matches[0]);
        }
        return $restr;
    }

}
