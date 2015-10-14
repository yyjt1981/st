<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-26 09:47:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Attr' not found ~ APPPATH\classes\Controller\car.php [ 17 ] in file:line
2014-03-26 09:47:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 09:56:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Attr' not found ~ APPPATH\classes\Controller\car.php [ 17 ] in file:line
2014-03-26 09:56:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 09:56:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Attr' not found ~ APPPATH\classes\Controller\car.php [ 17 ] in file:line
2014-03-26 09:56:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 10:25:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB::find() ~ APPPATH\classes\Controller\car.php [ 17 ] in file:line
2014-03-26 10:25:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 10:27:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `sline_car_attr` WHERE `attrname` = '租车类型'' at line 1 [ SELECT  FROM `sline_car_attr` WHERE `attrname` = '租车类型' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 10:27:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT  FROM `s...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(17): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 11:27:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/car_show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-26 11:27:41 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/car...')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/car...', NULL)
#2 E:\kohana\application\classes\Controller\car.php(34): Kohana_View::factory('default/car/car...')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-26 11:33:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Controller\car.php:31
2014-03-26 11:33:49 --- NOTICE: #0 E:\kohana\application\classes\Controller\car.php(31): Kohana_ORM->find()
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\car.php:31
2014-03-26 12:05:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Car\attr.php:42
2014-03-26 12:05:33 --- NOTICE: #0 E:\kohana\application\classes\Model\Car\attr.php(42): Kohana_ORM->find()
#1 E:\kohana\application\classes\Controller\car.php(40): Model_Car_Attr->getAttrName('5,7', 1)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\Car\attr.php:42
2014-03-26 14:21:50 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Car_Suit as array ~ APPPATH\views\default\car\car_show.php [ 66 ] in file:line
2014-03-26 14:21:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:26:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\car.php [ 39 ] in file:line
2014-03-26 14:26:30 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:26:48 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Car_Suit as array ~ APPPATH\views\default\car\car_show.php [ 66 ] in file:line
2014-03-26 14:26:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 14:56:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_sline_car_kind' doesn't exist [ SELECT * FROM `sline_sline_car_kind` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 14:56:16 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Model\Car\kind.php(10): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\car\car_list.php(48): Model_Car_Kind::getKindList()
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\car.php(21): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 15:06:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_sline_car_brand' doesn't exist [ SELECT * FROM `sline_sline_car_brand` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 15:06:45 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Model\Car\brand.php(10): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\car\car_list.php(59): Model_Car_Brand::getBrandList()
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\car.php(21): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 15:23:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Price' not found ~ APPPATH\views\default\car\car_list.php [ 70 ] in file:line
2014-03-26 15:23:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 15:23:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Price' not found ~ APPPATH\views\default\car\car_list.php [ 70 ] in file:line
2014-03-26 15:23:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 15:24:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Car_Price' not found ~ APPPATH\views\default\car\car_list.php [ 70 ] in file:line
2014-03-26 15:24:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 16:40:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:24 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.startplaceid=' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.carkindid=  and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:51 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:40:51 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:11 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:50 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:41:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:42:54 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplaceid=  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:42:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:52 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=75  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=75  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:43:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:44:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:44 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:47 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=75  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:47 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=75  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:47:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:48:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:48:44 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:50:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:50:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:51:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:51:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:51:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'a.startplace' in 'where clause' [ select distinct a.aid,a.*,b.minprice  from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null and a.startplace=29  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 16:51:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select distinct...', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(99): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:27:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:27:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:05 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:14 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:14 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:28:46 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:33:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) as num from sline_car a left join (select carid,min(price) as minprice from s' at line 1 [ select count(a.*) as num from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid   where a.webid is not null limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:33:04 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(a....', false, Array)
#1 E:\kohana\application\classes\Controller\car.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:20 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:23 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:24 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:57:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:18 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:58:19 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:59:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='4' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:59:15 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:59:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='4' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 17:59:38 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:01:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='4' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:01:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:01:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='4' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:01:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:02:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='4' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-26 18:02:29 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251