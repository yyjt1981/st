<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-18
 * Time: 16:48
 */
class Search
{
    var $webid =''; //վ��id
    var $aid; //����id����·id������id���Ź�id��
    var $typeid;//channel
    var $title;//����
    var $description;
    var $litpic; //���Žӿڵ�ַ
    var $shownum;

    // ���������
    function addSearchItem()
    {
        global $dsql;
        $insertsql = "insert into #@__search(webid,aid,typeid,title,description, litpic, shownum) values($this->webid, $this->aid, $this->typeid, $this->title, $this->description, $this->litpic,$this->shownum)";
        $dsql->ExecuteNoneQuery($insertsql);
    }
}