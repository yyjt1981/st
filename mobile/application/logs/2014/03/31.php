<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-31 16:16:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\line.php [ 41 ] in file:line
2014-03-31 16:16:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 16:25:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model::getLineList() ~ APPPATH\views\default\line\line_list.php [ 81 ] in file:line
2014-03-31 16:25:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 16:26:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model::getLineList() ~ APPPATH\views\default\line\line_list.php [ 81 ] in file:line
2014-03-31 16:26:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 16:31:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=36 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('36',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:38 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:38 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:39 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=3485 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('3485',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:39 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=3485 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('3485',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=3485 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('3485',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:31:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,$10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,$10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:32:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:33:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.* from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1) where a.id is not null   limit 0, ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:33:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:13 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=36 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('36',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:16 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=36 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('36',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:16 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '') order by b.isjian desc,b.displayorder asc limit 0,10' at line 1 [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist') order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:34:46 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:35:53 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:36:39 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_line left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:36:39 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:19 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:19 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=37 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('37',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'b.isjian' in 'order clause' [ select a.* from sline_line as a left join sline_kindorderlist as c on (c.classid=12 and a.id=c.aid  and c.typeid=1) where a.id is not null and find_in_set('12',a.kindlist) order by b.isjian desc,b.displayorder asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 16:37:31 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\line.php(44): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Line->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Line))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 17:04:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getTransport() ~ APPPATH\classes\Controller\line.php [ 92 ] in file:line
2014-03-31 17:04:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line