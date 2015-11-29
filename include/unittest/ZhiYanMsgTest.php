
<?php
require_once("../ZhiYanMsg.class.php");
/**
 * Created by PhpStorm.
 * User: 金涛
 * Date: 2015/11/14
 * Time: 20:28
 */
class ZhiYanMsgTest extends PHPUnit_Framework_TestCase
{
    public function testSendMsg(){
        $msg = new ZhiYanMsg();

        $text = '您的验证码为：123456，5分钟内有效，请尽快验证。如非本人操作，请忽略本短信。【夏令王国】';

        $result = $msg->sendMsg('18668140360', $text);

        assertTrue($result);
    }
}
