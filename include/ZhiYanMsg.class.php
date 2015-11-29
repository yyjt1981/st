<?php

require_once("HttpHelper.class.php");
/**
 * Created by PhpStorm.
 * User: 金涛
 * Date: 2015/11/28
 * Time: 20:28
 */
class ZhiYanMsg
{
    //智能匹配模版发送接口的http地址
    var $URI_SEND_SMS = 'https://sms.zhiyan.net/sms/match_send.json';


    var $apiKey = '3b383d2e2d7349b18743e70764ebb655';//xljy2015
    var $appId = "7RYS788M36x2";

    function __construct(){
    }


    public function  sendMsg($mobile, $content){
        $json_arr = array(
            "mobile" => $mobile,
            "content" => $content,
            "appId"=>$this->appId,
            "apiKey"=>$this->apiKey,
            "extend" => "",
            "uid" => ""
        );
        $jsonStr =json_encode($json_arr);

        $resultJson = HttpHelper::postJson($this->URI_SEND_SMS, $jsonStr);

        $result = json_decode($resultJson);

        return $result;
    }
}