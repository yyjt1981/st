<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-21 09:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 09:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 09:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 09:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 09:27:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 93 ]
2014-08-21 09:27:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-21 09:28:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 104 ]
2014-08-21 09:28:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-21 09:33:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''7'' LIMIT 1' at line 1 [ SELECT `sline_car_attr`.`id` AS `id`, `sline_car_attr`.`webid` AS `webid`, `sline_car_attr`.`aid` AS `aid`, `sline_car_attr`.`attrname` AS `attrname`, `sline_car_attr`.`displayorder` AS `displayorder`, `sline_car_attr`.`isopen` AS `isopen`, `sline_car_attr`.`pid` AS `pid`, `sline_car_attr`.`destid` AS `destid`, `sline_car_attr`.`issystem` AS `issystem`, `sline_car_attr`.`litpic` AS `litpic` FROM `sline_car_attr` AS `sline_car_attr` WHERE pid!=0 and id='7'' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 09:33:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''7'' LIMIT 1' at line 1 [ SELECT `sline_car_attr`.`id` AS `id`, `sline_car_attr`.`webid` AS `webid`, `sline_car_attr`.`aid` AS `aid`, `sline_car_attr`.`attrname` AS `attrname`, `sline_car_attr`.`displayorder` AS `displayorder`, `sline_car_attr`.`isopen` AS `isopen`, `sline_car_attr`.`pid` AS `pid`, `sline_car_attr`.`destid` AS `destid`, `sline_car_attr`.`issystem` AS `issystem`, `sline_car_attr`.`litpic` AS `litpic` FROM `sline_car_attr` AS `sline_car_attr` WHERE pid!=0 and id='7'' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_c...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\common.php(250): Kohana_ORM->find()
#4 D:\web\backcms\admin\application\classes\controller\car.php(524): Common::getSelectedAttr(3, '7,8,3,5,6')
#5 [internal function]: Controller_Car->action_edit()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-21 09:34:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'satisfyscore' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584863, `satisfyscore` = '', `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 09:34:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'satisfyscore' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584863, `satisfyscore` = '', `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1488): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1515): Kohana_ORM->update(NULL)
#3 D:\web\backcms\admin\application\classes\controller\car.php(587): Kohana_ORM->save()
#4 [internal function]: Controller_Car->action_ajax_carsave()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-21 09:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 09:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 09:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 09:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 09:34:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'satisfyscore' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584869, `satisfyscore` = '', `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 09:34:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'satisfyscore' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584869, `satisfyscore` = '', `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1488): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1515): Kohana_ORM->update(NULL)
#3 D:\web\backcms\admin\application\classes\controller\car.php(587): Kohana_ORM->save()
#4 [internal function]: Controller_Car->action_ajax_carsave()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-21 09:35:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'bookcount' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584930, `satisfyscore` = 90, `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 09:35:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'bookcount' at row 1 [ UPDATE `sline_car` SET `addtime` = 1408584930, `satisfyscore` = 90, `bookcount` = '', `kindlist` = '37,36', `supplierlist` = '6' WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_c...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1488): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1515): Kohana_ORM->update(NULL)
#3 D:\web\backcms\admin\application\classes\controller\car.php(587): Kohana_ORM->save()
#4 [internal function]: Controller_Car->action_ajax_carsave()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-21 09:39:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 92 ]
2014-08-21 09:39:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\cache\tplcache\stourtravel\car\edit.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-21 09:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 09:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 11:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 11:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 11:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 11:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 11:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 11:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 11:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 11:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 13:09:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%1%' or a.id like '%1%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:09:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%1%' or a.id like '%1%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%10%' or a.id like '%10%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:18:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 13:18:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ select count(*) as num from sline_visa a where a.id is not null and a.title like '%8%' or a.id like '%8%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\visa.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Visa->action_visa()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 13:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tuna/tuan/action/read was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 13:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tuna/tuan/action/read was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 14:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 14:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 15:04:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 15:04:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(55): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 15:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 15:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 15:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 15:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 15:50:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 15:50:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(55): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 16:07:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 16:07:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 16:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:08:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 16:08:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 16:11:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 16:11:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 16:11:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-21 16:11:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-21 16:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 16:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 16:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL help/admin/public/css/common.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-21 17:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL help/admin/public/css/common.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/default/css/ueditor.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 17:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/default/css/ueditor.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 17:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 17:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 17:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 17:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 17:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/default/css/ueditor.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/default/css/ueditor.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/themes/iframe.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-21 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-21 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/vendor/slineeditor/js/third-party/codemirror/codemirror.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}