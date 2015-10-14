<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-01 10:05:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select columnname,chinesename from sline_line_content where webid=0 and isopen=1 order by displayorder asc` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:05:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(219): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select columnname,chinesename from sline_line_content where webid=0 and isopen=1 order by displayorder asc` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(219): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select columnname,chinesename from sline_line_content where webid=0 and isopen=1 order by displayorder asc` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:05 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(219): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select columnname,chinesename from sline_line_content where webid=0 and isopen=1 order by displayorder asc` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(219): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from #@__line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:06:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:07:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from #@__line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:07:12 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:07:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from #@__line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:07:13 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:08:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from #@__line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:08:44 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:29 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:42 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0'` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:09:44 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `1`, `se...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:10:02 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'showrepast' in 'field list' [ select isstyle,lineday,txtjieshao,jieshao,showrepast from sline_line where aid='140599' and webid='0' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 10:10:02 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select isstyle,...', false, Array)
#1 E:\kohana\application\classes\Model\line.php(271): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Model\line.php(250): Model_Line::getJieShao('140599', '0', NULL)
#3 E:\kohana\application\classes\Controller\line.php(105): Model_Line::getLineContent(Array)
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_show()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-01 11:59:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::execute() ~ APPPATH\views\default\hotel\hotel_list.php [ 50 ] in file:line
2014-04-01 11:59:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 12:00:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get() ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ] in file:line
2014-04-01 12:00:25 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 12:00:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ] in file:line
2014-04-01 12:00:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:27:48 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:27:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:28:26 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:28:26 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:28:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:28:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:30:35 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Line as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:30:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:30:38 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Line as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:30:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:32:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:32:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:32:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:32:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:32:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:46:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::select_all() ~ APPPATH\views\default\hotel\hotel_list.php [ 50 ] in file:line
2014-04-01 13:46:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:46:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:48 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:48 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:49 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:49 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:46:56 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:47:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultindex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:47:05 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('defaultindex')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('defaultindex', NULL)
#2 E:\kohana\application\classes\Controller\index.php(20): Kohana_View::factory('defaultindex')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-04-01 13:47:35 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ] in file:line
2014-04-01 13:47:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:49:56 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:49:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:49:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:49:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:50:11 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:50:11 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:50:12 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:50:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:50:13 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:50:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:03 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:05 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:05 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 13:52:05 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Hotel_Rank as array ~ APPPATH\views\default\hotel\hotel_list.php [ 55 ] in file:line
2014-04-01 13:52:05 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 14:17:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query::select() ~ APPPATH\classes\Model\Hotel\pricelist.php [ 15 ] in file:line
2014-04-01 14:17:19 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 15:17:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH\classes\common.php [ 16 ] in E:\kohana\application\classes\common.php:16
2014-04-01 15:17:17 --- NOTICE: #0 E:\kohana\application\classes\common.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 16, Array)
#1 E:\kohana\application\views\default\hotel\hotel_list.php(8): Common::getScript('jquery-1.4.2.mi...')
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\common.php:16
2014-04-01 15:18:02 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\default\hotel\hotel_list.php [ 81 ] in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:18:02 --- NOTICE: #0 E:\kohana\application\views\default\hotel\hotel_list.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\kohana\appli...', 81, Array)
#1 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#2 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#3 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:18:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function GetHotelMinPrice() ~ APPPATH\classes\Model\hotel.php [ 79 ] in file:line
2014-04-01 15:18:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 15:19:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: minprice ~ APPPATH\classes\Model\hotel.php [ 90 ] in E:\kohana\application\classes\Model\hotel.php:90
2014-04-01 15:19:17 --- NOTICE: #0 E:\kohana\application\classes\Model\hotel.php(90): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 90, Array)
#1 E:\kohana\application\classes\Model\hotel.php(79): Model_Hotel::getHotelMinPrice('0', '363')
#2 E:\kohana\application\views\default\hotel\hotel_list.php(80): Model_Hotel::getHotelList(Array)
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\application\classes\Model\hotel.php:90
2014-04-01 15:19:45 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\default\hotel\hotel_list.php [ 81 ] in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:19:45 --- NOTICE: #0 E:\kohana\application\views\default\hotel\hotel_list.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\kohana\appli...', 81, Array)
#1 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#2 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#3 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:20:13 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\default\hotel\hotel_list.php [ 81 ] in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:20:13 --- NOTICE: #0 E:\kohana\application\views\default\hotel\hotel_list.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\kohana\appli...', 81, Array)
#1 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#2 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#3 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:20:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\default\hotel\hotel_list.php [ 81 ] in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:20:16 --- NOTICE: #0 E:\kohana\application\views\default\hotel\hotel_list.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\kohana\appli...', 81, Array)
#1 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#2 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#3 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\application\views\default\hotel\hotel_list.php:81
2014-04-01 15:20:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: minprice ~ APPPATH\classes\Model\hotel.php [ 92 ] in E:\kohana\application\classes\Model\hotel.php:92
2014-04-01 15:20:55 --- NOTICE: #0 E:\kohana\application\classes\Model\hotel.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 92, Array)
#1 E:\kohana\application\classes\Model\hotel.php(79): Model_Hotel::getHotelMinPrice('0', '363')
#2 E:\kohana\application\views\default\hotel\hotel_list.php(80): Model_Hotel::getHotelList(Array)
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\application\classes\Model\hotel.php:92
2014-04-01 15:34:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\default\hotel\hotel_list.php [ 69 ] in E:\kohana\application\views\default\hotel\hotel_list.php:69
2014-04-01 15:34:51 --- NOTICE: #0 E:\kohana\application\views\default\hotel\hotel_list.php(69): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 69, Array)
#1 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#2 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#3 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\application\views\default\hotel\hotel_list.php:69
2014-04-01 15:43:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:49 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:49 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:49 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 42 ] in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 15:43:59 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 42, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:42
2014-04-01 16:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 59 ] in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 59, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 59 ] in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 59, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 59 ] in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 59, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 59 ] in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 59, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: linelist ~ APPPATH\classes\Controller\hotel.php [ 59 ] in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 16:25:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 59, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:59
2014-04-01 17:17:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:03 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:05 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:05 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\hotel.php [ 50 ] in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:17:17 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 50, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:50
2014-04-01 17:18:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:18:19 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:46 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:46 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:21:56 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:24:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\classes\Model\destinations.php [ 21 ] in E:\kohana\application\classes\Model\destinations.php:21
2014-04-01 17:24:49 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 21, Array)
#1 E:\kohana\application\views\default\hotel\hotel_list.php(37): Model_Destinations::navDestList(Array)
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\hotel.php(18): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:21
2014-04-01 17:26:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:39 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:42 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:42 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 83 ] in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:26:44 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 83, Array)
#1 E:\kohana\application\classes\Controller\hotel.php(60): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\destinations.php:83
2014-04-01 17:35:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:35:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:35:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:35:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:35:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:35:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:36:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:36:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:36:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:36:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:36:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:36:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:36:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:36:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:36:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:36:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:37:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:37:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:37:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:37:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 17:37:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::GetHotelMinPrice() ~ APPPATH\classes\Controller\hotel.php [ 55 ] in file:line
2014-04-01 17:37:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-01 18:03:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Model_Hotel' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-01 18:03:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line