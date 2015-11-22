
<?php
require_once("../YunPianMsg.class.php");
/**
 * Created by PhpStorm.
 * User: 金涛
 * Date: 2015/11/14
 * Time: 20:28
 */
class YunPianMsgTest extends PHPUnit_Framework_TestCase
{
    public function testSendMsg(){
        $msg = new YunPianMsg();

        $text = '【云片网】您的验证码是123456';

        $result = $msg->sendMsg('18668140360', $text);

        echo $result;
    }
}
