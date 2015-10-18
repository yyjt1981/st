<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-18
 * Time: 16:48
 */
class Search
{
    var $webid =''; //站点id
    var $aid; //文章id（线路id，攻略id，团购id）
    var $typeid;//channel
    var $title;//标题
    var $description;
    var $litpic; //短信接口地址
    var $shownum;

    // 添加搜索表
    function addSearchItem()
    {
        global $dsql;
        $insertsql = "insert into #@__search(webid,aid,typeid,title,description, litpic, shownum) values($this->webid, $this->aid, $this->typeid, $this->title, $this->description, $this->litpic,$this->shownum)";
        $dsql->ExecuteNoneQuery($insertsql);
    }
}