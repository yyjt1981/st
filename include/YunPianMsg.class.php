<?php

require_once("HttpHelper.class.php");
/**
 * Created by PhpStorm.
 * User: 金涛
 * Date: 2015/11/14
 * Time: 19:28
 */

class YunPianMsg{

    //查账户信息的http地址
    var $URI_GET_USER_INFO = 'http://yunpian.com/v1/user/get.json';
    
    //智能匹配模版发送接口的http地址
    var $URI_SEND_SMS = 'http://yunpian.com/v1/sms/send.json';
    
    //模板发送接口的http地址
    var $URI_TPL_SEND_SMS = 'http://yunpian.com/v1/sms/tpl_send.json';
    
    //发送语音验证码接口的http地址
    var $URI_SEND_VOICE = 'http://yunpian.com/v1/voice/send.json';

    var $apikey = 'c4bd3aabcbc602d67f1a6b17a5a1a045';//442881396
//    var $apikey = 'e8ec3586d1a386967fad8b241a14c00e';xljy2015

    var $defaultParam = array();

    function __construct()
    {
        $this->defaultParam['apikey'] = $this->apikey;
    }

    public function  sendMsg($mobile, $text){
        $busiParamArray = array(
            'mobile' => $mobile,
            'text' => $text
        );

        $paramArray = array_merge($this->defaultParam,$busiParamArray);//合并数组
        $paramsStr = http_build_query($paramArray);

        $resultJson = HttpHelper::post($this->URI_SEND_SMS, $paramsStr);

        $result = json_decode($resultJson);

        return $result;
    }


}