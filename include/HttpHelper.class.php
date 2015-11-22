<?php

/**
 * Created by PhpStorm.
 * User: 金涛
 * Date: 2015/11/14
 * Time: 19:48
 */
class HttpHelper
{
    public static function post($url, $postfields){
        return HttpHelper::http($url, $postfields, 'POST');
    }

    public static function get($url){
        return HttpHelper::http($url);
    }

    public static function http($url, $postfields='', $method='GET')
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
}