<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-02 09:22:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_rank' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 09:22:29 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 09:27:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The rankname property does not exist in the Model_Hotel_Rank class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\kohana\application\classes\Controller\hotel.php:27
2014-04-02 09:27:37 --- NOTICE: #0 E:\kohana\application\classes\Controller\hotel.php(27): Kohana_ORM->get('rankname')
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\hotel.php:27
2014-04-02 10:11:51 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_sline_hotel_attr' doesn't exist [ SELECT * FROM `sline_sline_hotel_attr` WHERE `pid` = 202 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 10:11:51 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Model\Hotel\attr.php(9): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\hotel.php(29): Model_Hotel_Attr::getAttrNames(202, '0')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Hotel->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 11:35:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Model\Spot\attr.php [ 12 ] in file:line
2014-04-02 11:35:23 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 11:35:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and isopen=1 limit 2' at line 1 [ select * from sline_spot_attr where pid=0 limit and isopen=1 limit 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 11:35:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 E:\kohana\application\classes\Model\Spot\attr.php(12): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\spot\spot_list.php(29): Model_Spot_Attr::getAttrGrpList(Array)
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:37:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Spot_Ticket::getTicketPrice() ~ APPPATH\classes\Model\spot.php [ 68 ] in file:line
2014-04-02 14:37:29 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:37:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Spot_Ticket::select() ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:37:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:40:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Spot_Ticket::select() ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:40:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:40:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Spot_Ticket::select() ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:40:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:41:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price` AS ``, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:14 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:35 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:37 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'min(ourprice) as price' in 'field list' [ SELECT `min(ourprice) as price`, `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`tnum` AS `tnum`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE `spotid` = '971' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:41:37 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `min(our...', false, Array)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 E:\kohana\application\classes\Model\Spot\ticket.php(7): Kohana_ORM->find()
#4 E:\kohana\application\classes\Model\spot.php(68): Model_Spot_Ticket->getMinPrice('971')
#5 E:\kohana\application\views\default\spot\spot_list.php(108): Model_Spot::getSpotList(Array)
#6 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#7 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#8 E:\kohana\application\classes\Controller\spot.php(18): Kohana_View->render()
#9 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#12 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 E:\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 14:43:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function next() on a non-object ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:43:21 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:43:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:43:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 14:43:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ APPPATH\classes\Model\Spot\ticket.php [ 7 ] in file:line
2014-04-02 14:43:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:33:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 15:33:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:33:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 15:33:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:33:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 15:33:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:33:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 15:33:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:33:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-02 15:33:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 15:39:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:42 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:42 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(5,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid) and find_in_set(2,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 15:39:51 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:22 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(24,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:08:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(21,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:38 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(21,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:38 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(21,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:39 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(21,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(21,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:11:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=36 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('36',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:56 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=36 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('36',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:57 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=36 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('36',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:12:58 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=36 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('36',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=37 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('37',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:41 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=37 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('37',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:42 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=37 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('37',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:58 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:13:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:48 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:14:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:00 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:15:06 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=37 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('37',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:23 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=37 and a.id=b.aid  and b.typeid=5) where a.id is not null and find_in_set('37',a.kindlist) and find_in_set(undefined,a.attrid)  limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:26 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:29 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:30 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:31 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:31 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:33 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:35 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:49 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid) and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:50 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:57 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:16:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:24 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:25 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:42 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:43 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where a.id is not null and find_in_set(undefined,a.attrid)   limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:17:45 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\spot.php(58): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_ajax_search()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-04-02 16:42:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 16:42:43 --- NOTICE: #0 E:\kohana\application\classes\Controller\spot.php(25): Kohana_ORM->find()
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 16:43:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 16:43:47 --- NOTICE: #0 E:\kohana\application\classes\Controller\spot.php(25): Kohana_ORM->find()
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 16:43:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 16:43:51 --- NOTICE: #0 E:\kohana\application\classes\Controller\spot.php(25): Kohana_ORM->find()
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Spot->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Spot))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\spot.php:25
2014-04-02 17:37:39 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Spot_Ticket as array ~ APPPATH\classes\Controller\spot.php [ 31 ] in file:line
2014-04-02 17:37:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 17:38:16 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Spot_Ticket as array ~ APPPATH\classes\Controller\spot.php [ 32 ] in file:line
2014-04-02 17:38:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-02 17:39:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\views\default\spot\spot_show.php [ 77 ] in file:line
2014-04-02 17:39:11 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line