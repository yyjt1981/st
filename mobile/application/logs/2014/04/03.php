<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-03 09:39:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Visa_Area as array ~ APPPATH\views\default\visa\visa_list.php [ 41 ] in file:line
2014-04-03 09:39:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-03 09:48:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_visa_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-03 09:48:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-03 09:49:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_visa_kind`.`id` AS `id`, `sline_visa_kind`.`kindname` AS `kindname`, `sline_visa_kind`.`displayorder` AS `displayorder`, `sline_visa_kind`.`isopen` AS `isopen` FROM `sline_visa_kind` AS `sline_visa_kind` WHERE `pid` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 09:49:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_v...', 'Model_Visa_Kind', Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\kohana\application\views\default\visa\visa_list.php(52): Kohana_ORM->find_all()
#4 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#5 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#6 E:\kohana\application\classes\Controller\visa.php(19): Kohana_View->render()
#7 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#10 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 E:\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:20:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_my_array() ~ APPPATH\classes\Controller\visa.php [ 17 ] in file:line
2014-04-03 10:20:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-03 10:46:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:05 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:07 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:07 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=23 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=23 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=23 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:09 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'orderby displayorder' at line 1 [ select * from sline_visa where id is not null and nationid=22 orderby displayorder ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 10:46:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Controller\visa.php(57): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Visa->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Visa))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 13:30:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\database\classes\kohana\database\result.php [ 181 ]
2014-04-03 13:30:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\database\classes\kohana\database\result.php [ 181 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2014-04-03 13:32:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\database\classes\kohana\database\result.php [ 181 ]
2014-04-03 13:32:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\database\classes\kohana\database\result.php [ 181 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2014-04-03 13:33:14 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2014-04-03 13:33:14 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\wwwroot\mobile.666trip.com\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('pgv_pvi', NULL)
#1 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(202): Kohana_Cookie::get('pgv_pvi')
#2 D:\wwwroot\mobile.666trip.com\index.php(108): Kohana_Request::factory()
#3 {main}
2014-04-03 00:36:24 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
2014-04-03 00:36:24 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('weburl', 0)
#1 {main}
2014-04-03 00:45:34 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
2014-04-03 00:45:34 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('weburl', 0)
#1 {main}
2014-04-03 00:45:36 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
2014-04-03 00:45:36 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\webconfig.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('weburl', 0)
#1 {main}
2014-04-03 00:46:16 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2014-04-03 00:46:16 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\wwwroot\mobile.666trip.com\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('pgv_pvi', NULL)
#1 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(202): Kohana_Cookie::get('pgv_pvi')
#2 D:\wwwroot\mobile.666trip.com\index.php(108): Kohana_Request::factory()
#3 {main}
2014-04-03 00:46:17 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2014-04-03 00:46:17 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\wwwroot\mobile.666trip.com\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('pgv_pvi', NULL)
#1 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(202): Kohana_Cookie::get('pgv_pvi')
#2 D:\wwwroot\mobile.666trip.com\index.php(108): Kohana_Request::factory()
#3 {main}
2014-04-03 00:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 00:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 00:47:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\classes\Model\Line\day.php [ 69 ]
2014-04-03 00:47:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\classes\Model\Line\day.php [ 69 ]
--
#0 D:\wwwroot\mobile.666trip.com\application\classes\Model\Line\day.php(69): Kohana_Core::error_handler('1')
#1 D:\wwwroot\mobile.666trip.com\application\classes\Model\Line\day.php(47): Model_Line_Day::checkLineDay()
#2 D:\wwwroot\mobile.666trip.com\application\views\default\line\line_list.php(51): Model_Line_Day::getLineDay('D:\wwwroot\mobi...', Array)
#3 D:\wwwroot\mobile.666trip.com\system\classes\kohana\view.php(61): include('D:\wwwroot\mobi...')
#4 D:\wwwroot\mobile.666trip.com\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\wwwroot\mobile.666trip.com\application\classes\Controller\line.php(17): Kohana_View->render()
#6 [internal function]: Controller_Line->action_index(Object(Controller_Line))
#7 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#8 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#10 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#11 {main}
2014-04-03 00:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 00:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 00:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 00:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 00:48:05 --- ERROR: Database_Exception [ 1146 ]: Table 'demo_smore_com.sline_hotel_ranks' doesn't exist [ SHOW FULL COLUMNS FROM `sline_hotel_ranks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-03 00:48:05 --- STRACE: Database_Exception [ 1146 ]: Table 'demo_smore_com.sline_hotel_ranks' doesn't exist [ SHOW FULL COLUMNS FROM `sline_hotel_ranks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wwwroot\mobile.666trip.com\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\wwwroot\mobile.666trip.com\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('hotel_ranks')
#2 D:\wwwroot\mobile.666trip.com\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 D:\wwwroot\mobile.666trip.com\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\wwwroot\mobile.666trip.com\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\wwwroot\mobile.666trip.com\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\wwwroot\mobile.666trip.com\application\views\default\hotel\hotel_list.php(49): Kohana_ORM::factory('hotel_rank')
#7 D:\wwwroot\mobile.666trip.com\system\classes\kohana\view.php(61): include('D:\wwwroot\mobi...')
#8 D:\wwwroot\mobile.666trip.com\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wwwroot\mobi...', Array)
#9 D:\wwwroot\mobile.666trip.com\application\classes\Controller\hotel.php(18): Kohana_View->render()
#10 [internal function]: Controller_Hotel->action_index()
#11 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#12 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#15 {main}
2014-04-03 00:49:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::get() ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ]
2014-04-03 00:49:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::get() ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wwwroot\mobi...', Array)
#1 {main}
2014-04-03 00:49:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Visa::get() ~ APPPATH\classes\Controller\visa.php [ 22 ]
2014-04-03 00:49:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Visa::get() ~ APPPATH\classes\Controller\visa.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-03 00:58:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
2014-04-03 00:58:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_visa')
#1 {main}
2014-04-03 00:58:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
2014-04-03 00:58:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_visa')
#1 {main}
2014-04-03 00:58:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
2014-04-03 00:58:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_visa')
#1 {main}
2014-04-03 00:58:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\visa.php [ 22 ]
2014-04-03 00:58:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\visa.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_visa')
#1 {main}
2014-04-03 00:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 00:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 00:59:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 23 ]
2014-04-03 00:59:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\visa.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_visa')
#1 {main}
2014-04-03 00:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 00:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 00:59:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Visa_Area::get() ~ APPPATH\views\default\visa\visa_list.php [ 41 ]
2014-04-03 00:59:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Visa_Area::get() ~ APPPATH\views\default\visa\visa_list.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wwwroot\mobi...', Array)
#1 {main}
2014-04-03 01:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana3.2 ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana3.2 ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:00:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Visa_Area::get() ~ APPPATH\views\default\visa\visa_list.php [ 41 ]
2014-04-03 01:00:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Visa_Area::get() ~ APPPATH\views\default\visa\visa_list.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\wwwroot\mobi...', Array)
#1 {main}
2014-04-03 01:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL visa/undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-04-03 01:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL visa/undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-03 01:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL visa/undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-04-03 01:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL visa/undefined was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wwwroot\mobile.666trip.com\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\wwwroot\mobile.666trip.com\index.php(109): Kohana_Request->execute()
#3 {main}
2014-04-03 01:12:09 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2014-04-03 01:12:09 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 E:\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('demo_smore_com')
#1 E:\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 E:\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select weburl f...', false, Array)
#3 E:\kohana\application\classes\webconfig.php(6): Kohana_Database_Query->execute()
#4 E:\kohana\application\bootstrap.php(127): WebConfig::getWeb('weburl', 0)
#5 E:\kohana\index.php(102): require('E:\kohana\appli...')
#6 {main}
2014-04-03 01:12:10 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2014-04-03 01:12:10 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 E:\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('demo_smore_com')
#1 E:\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 E:\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select weburl f...', false, Array)
#3 E:\kohana\application\classes\webconfig.php(6): Kohana_Database_Query->execute()
#4 E:\kohana\application\bootstrap.php(127): WebConfig::getWeb('weburl', 0)
#5 E:\kohana\index.php(102): require('E:\kohana\appli...')
#6 {main}
2014-04-03 01:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 01:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 01:59:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::get() ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ]
2014-04-03 01:59:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Hotel_Rank::get() ~ APPPATH\views\default\hotel\hotel_list.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-03 02:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 02:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-03 21:41:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ APPPATH\classes\Controller\line.php [ 50 ]
2014-04-03 21:41:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ APPPATH\classes\Controller\line.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-03 21:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-03 21:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(109): Kohana_Request->execute()
#1 {main}