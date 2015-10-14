<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-27 09:44:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='1' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:44:21 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:44:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='1' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:44:23 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:45:07 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='1' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:45:07 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:45:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'score1' in 'field list' [ select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_member_order
		where articleid='1' and typeid='3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 09:45:18 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select sum(scor...', false, Array)
#1 E:\kohana\application\classes\Model\Member\order.php(15): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\car.php(108): Model_Member_Order::getSatisfyScore(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 10:37:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Model\destinations.php [ 25 ] in file:line
2014-03-27 10:37:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 10:37:34 --- EMERGENCY: Database_Exception [ 1051 ]: Unknown table 'a' [ select a.* from sline_destinations where a.isnav=1 and a.isopen=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 10:37:34 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(25): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\index.php(90): Model_Destinations::navDestList()
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 11:36:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.id=c.aid and c.typeid=4)  where  FIND_IN_SET(37,a.kindlist)  order by c.is' at line 1 [ select a.id,a.aid,a.webid,a.allow,a.articlename,a.seotitle,a.shownum,a.content,a.addtime,a.webid,a.attrid,a.litpic as litpic,a.kindlist,a.author from sline_article as a left join sline_kindorderlist as c on (c.classid= and a.id=c.aid and c.typeid=4)  where  FIND_IN_SET(37,a.kindlist)  order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc  limit 0,8 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 11:36:28 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 E:\kohana\application\classes\Model\article.php(112): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\article\article_list.php(77): Model_Article::getArticleList(Array)
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\raider.php(18): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Raider->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Raider))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 13:38:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-9,9' at line 1 [ select a.id,a.aid,a.webid,a.allow,a.articlename,a.seotitle,a.shownum,a.content,a.addtime,a.webid,a.attrid,a.litpic as litpic,a.kindlist,a.author from sline_article as a left join sline_kindorderlist as c on (c.classid=36 and a.id=c.aid and c.typeid=4)  where  FIND_IN_SET(36,a.kindlist)  order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc  limit -9,9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 13:38:36 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 E:\kohana\application\classes\Model\article.php(122): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\raider.php(32): Model_Article::getArticleList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Raider->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Raider))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 14:01:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::execute() ~ APPPATH\classes\Controller\raider.php [ 26 ] in file:line
2014-03-27 14:01:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 14:02:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Controller\raider.php:26
2014-03-27 14:02:11 --- NOTICE: #0 E:\kohana\application\classes\Controller\raider.php(26): Kohana_ORM->find()
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Raider->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Raider))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\raider.php:26
2014-03-27 16:15:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:15:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:15:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:15:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:15:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:15:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:15:56 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:16:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:16:10 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:16:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:16:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:16:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:16:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:16:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:16:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:17:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:17:45 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:18:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:18:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:20:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:20:09 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:20:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:20:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:20:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:20:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:20:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:20:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:23:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:23:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:23:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:23:52 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:23:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:23:52 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:24:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:24:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:24:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::getPhotoList() ~ APPPATH\classes\Controller\photo.php [ 44 ] in file:line
2014-03-27 16:24:30 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-27 16:25:22 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 16:25:22 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 16:25:27 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 16:25:27 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 16:25:27 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 16:25:27 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:52 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:54 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:54 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:54 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.a' doesn't exist [ select a.kindname,a.id,a.pinyin from  a left join sline_photo_kindlist b on a.id=b.kindid where  a.isopen=1  and a.pid=0 order by b.isnav desc,b.displayorder,a.pinyin asc limit 0,10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-27 18:02:55 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.kindna...', false, Array)
#1 E:\kohana\application\classes\Model\destinations.php(102): Kohana_Database_Query->execute()
#2 E:\kohana\application\classes\Controller\photo.php(53): Model_Destinations::getDestList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Photo->action_ajax_search()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photo))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251