<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-25 09:23:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\default\index.php [ 26 ] in file:line
2014-03-25 09:23:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-25 09:54:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT * FROM `sline_line` LEFT JOIN `sline_allorderlist` ON (`sline_line`.`id` = `sline_allorderlist`.`aid` AND `sline_allorderlist`.`typeid` = `1`) ORDER BY `sline_allorderlist`.`isjian` DESC, `sline_allorderlist`.`displayorder` LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 09:54:01 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Controller\Welcome.php(21): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 10:13:40 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:13:40 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:37 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:37 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:47 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:57 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:58 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:14:58 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:15:10 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_weblists' doesn't exist [ SHOW FULL COLUMNS FROM `sline_weblists` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:15:10 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('weblists')
#2 E:\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\kohana\application\bootstrap.php(150): Kohana_ORM->__construct()
#6 E:\kohana\index.php(102): require('E:\kohana\appli...')
#7 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-25 10:32:48 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant WEBID - assumed 'WEBID' ~ APPPATH\classes\Model\Weblist.php [ 7 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:32:48 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\kohana\appli...', 7, Array)
#1 E:\kohana\application\bootstrap.php(152): Model_Weblist->getField('webname')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:33:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: webid ~ APPPATH\classes\Model\Weblist.php [ 7 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:33:35 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 7, Array)
#1 E:\kohana\application\bootstrap.php(152): Model_Weblist->getField('webname')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:34:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:34:58 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:35:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Weblist::execute() ~ APPPATH\classes\Model\Weblist.php [ 7 ] in file:line
2014-03-25 10:35:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-25 10:37:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:37:06 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:39:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:39:43 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:41:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:41:32 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:41:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:41:51 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:43:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:43:45 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:45:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:45:03 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:47:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:47:51 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:49:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:49:35 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:54:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 10:54:39 --- NOTICE: #0 E:\kohana\application\classes\Model\Weblist.php(7): Kohana_ORM->find()
#1 E:\kohana\application\bootstrap.php(153): Model_Weblist->getField('weburl')
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\Model\Weblist.php:7
2014-03-25 11:21:53 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SELECT' ~ APPPATH\classes\WebConfig.php [ 6 ] in file:line
2014-03-25 11:21:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-25 11:22:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\WebConfig.php [ 6 ] in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:51 --- NOTICE: #0 E:\kohana\application\classes\WebConfig.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 6, Array)
#1 E:\kohana\application\bootstrap.php(150): WebConfig::getWeb('webname', 0)
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\WebConfig.php [ 6 ] in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:52 --- NOTICE: #0 E:\kohana\application\classes\WebConfig.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 6, Array)
#1 E:\kohana\application\bootstrap.php(150): WebConfig::getWeb('webname', 0)
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\WebConfig.php [ 6 ] in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:54 --- NOTICE: #0 E:\kohana\application\classes\WebConfig.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 6, Array)
#1 E:\kohana\application\bootstrap.php(150): WebConfig::getWeb('webname', 0)
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\WebConfig.php [ 6 ] in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:22:55 --- NOTICE: #0 E:\kohana\application\classes\WebConfig.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 6, Array)
#1 E:\kohana\application\bootstrap.php(150): WebConfig::getWeb('webname', 0)
#2 E:\kohana\index.php(102): require('E:\kohana\appli...')
#3 {main} in E:\kohana\application\classes\WebConfig.php:6
2014-03-25 11:31:29 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\welcome.php [ 25 ] in file:line
2014-03-25 11:31:29 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-25 11:34:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT * FROM `sline_line` LEFT JOIN `sline_allorderlist` ON (`sline_line`.`id` = `sline_allorderlist`.`aid` AND `sline_allorderlist`.`typeid` = `1`) ORDER BY `sline_allorderlist`.`isjian` DESC, `sline_allorderlist`.`displayorder` LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:34:52 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Controller\welcome.php(23): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:35:10 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT * FROM `sline_line` LEFT JOIN `sline_allorderlist` ON (`sline_line`.`id` = `sline_allorderlist`.`aid` AND `sline_allorderlist`.`typeid` = `1`) ORDER BY `sline_allorderlist`.`isjian` DESC, `sline_allorderlist`.`displayorder` LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:35:10 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Controller\welcome.php(23): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:35:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT * FROM `sline_line` LEFT JOIN `sline_allorderlist` ON (`sline_line`.`id` = `sline_allorderlist`.`aid` AND `sline_allorderlist`.`typeid` = `1`) ORDER BY `sline_allorderlist`.`isjian` DESC, `sline_allorderlist`.`displayorder` LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:35:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Controller\welcome.php(23): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:41:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT * FROM `sline_line` LEFT JOIN `sline_allorderlist` ON (`sline_line`.`id` = `sline_allorderlist`.`aid` AND `sline_allorderlist`.`typeid` = `1`) ORDER BY `sline_allorderlist`.`isjian` DESC, `sline_allorderlist`.`displayorder` LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 11:41:03 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\kohana\application\classes\Controller\welcome.php(23): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 13:52:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Model\line.php [ 107 ] in E:\kohana\application\classes\Model\line.php:107
2014-03-25 13:52:38 --- NOTICE: #0 E:\kohana\application\classes\Model\line.php(107): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 107, Array)
#1 E:\kohana\application\classes\Controller\welcome.php(24): Model_Line::getLineList(Array)
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\application\classes\Model\line.php:107
2014-03-25 14:08:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Model\line.php [ 162 ] in E:\kohana\application\classes\Model\line.php:162
2014-03-25 14:08:15 --- NOTICE: #0 E:\kohana\application\classes\Model\line.php(162): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\kohana\appli...', 162, Array)
#1 E:\kohana\application\classes\Model\line.php(117): Model_Line::getLineRealPrice('140812', '0')
#2 E:\kohana\application\classes\Controller\welcome.php(24): Model_Line::getLineList(Array)
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\application\classes\Model\line.php:162
2014-03-25 15:10:09 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-25 15:10:09 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select weburl f...', false, Array)
#2 E:\kohana\application\classes\WebConfig.php(6): Kohana_Database_Query->execute()
#3 E:\kohana\application\bootstrap.php(149): WebConfig::getWeb('weburl', 0)
#4 E:\kohana\index.php(102): require('E:\kohana\appli...')
#5 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-25 15:47:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Destinations::navDestList(), called in E:\kohana\application\views\default\index.php on line 93 and defined ~ APPPATH\classes\Model\destinations.php [ 5 ] in E:\kohana\application\classes\Model\destinations.php:5
2014-03-25 15:47:39 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\kohana\appli...', 5, Array)
#1 E:\kohana\application\views\default\index.php(93): Model_Destinations::navDestList()
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:5
2014-03-25 15:47:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: litpic ~ APPPATH\classes\Model\destinations.php [ 25 ] in E:\kohana\application\classes\Model\destinations.php:25
2014-03-25 15:47:56 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 25, Array)
#1 E:\kohana\application\views\default\index.php(93): Model_Destinations::navDestList(Array)
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:25
2014-03-25 15:49:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: litpic ~ APPPATH\classes\Model\destinations.php [ 25 ] in E:\kohana\application\classes\Model\destinations.php:25
2014-03-25 15:49:22 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\kohana\appli...', 25, Array)
#1 E:\kohana\application\views\default\index.php(93): Model_Destinations::navDestList(Array)
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:25
2014-03-25 15:51:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Destinations::navDestList(), called in E:\kohana\application\views\default\index.php on line 93 and defined ~ APPPATH\classes\Model\destinations.php [ 5 ] in E:\kohana\application\classes\Model\destinations.php:5
2014-03-25 15:51:16 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\kohana\appli...', 5, Array)
#1 E:\kohana\application\views\default\index.php(93): Model_Destinations::navDestList()
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:5
2014-03-25 15:56:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\classes\Model\destinations.php [ 49 ] in E:\kohana\application\classes\Model\destinations.php:49
2014-03-25 15:56:32 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 49, Array)
#1 E:\kohana\application\views\default\index.php(102): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:49
2014-03-25 15:57:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\Model\destinations.php [ 60 ] in E:\kohana\application\classes\Model\destinations.php:60
2014-03-25 15:57:30 --- NOTICE: #0 E:\kohana\application\classes\Model\destinations.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 60, Array)
#1 E:\kohana\application\views\default\index.php(102): Model_Destinations::getDestList(Array)
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Model\destinations.php:60
2014-03-25 16:04:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/user/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 16:04:46 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/user/lo...')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/user/lo...', NULL)
#2 E:\kohana\application\views\default\index.php(126): Kohana_View::factory('default/user/lo...')
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#6 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 E:\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 16:17:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH\classes\Common.php [ 20 ] in E:\kohana\application\classes\Common.php:20
2014-03-25 16:17:28 --- NOTICE: #0 E:\kohana\application\classes\Common.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 20, Array)
#1 E:\kohana\application\views\default\index.php(8): Common::getScript('jquery-1.4.2.mi...')
#2 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#3 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#4 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#5 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\kohana\application\classes\Common.php:20
2014-03-25 16:42:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'cfg_beian' in 'field list' [ select cfg_beian from sline_sysconfig where varname='' and webid=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 16:42:59 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select cfg_beia...', false, Array)
#1 E:\kohana\application\classes\webconfig.php(12): Kohana_Database_Query->execute()
#2 E:\kohana\application\views\default\public\footer.php(3): WebConfig::getSysConf('cfg_beian')
#3 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#4 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#5 E:\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 E:\kohana\application\views\default\index.php(123): Kohana_View->__toString()
#7 E:\kohana\system\classes\Kohana\View.php(61): include('E:\kohana\appli...')
#8 E:\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\kohana\appli...', Array)
#9 E:\kohana\application\classes\Controller\index.php(21): Kohana_View->render()
#10 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 E:\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-25 17:07:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:07:52 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:01 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:04 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:08:05 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:09:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/car_list could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:09:06 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/car...')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/car...', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/car...')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:09:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/car/car_list could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\kohana\system\classes\Kohana\View.php:137
2014-03-25 17:09:10 --- NOTICE: #0 E:\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/car/car...')
#1 E:\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/car/car...', NULL)
#2 E:\kohana\application\classes\Controller\car.php(18): Kohana_View::factory('default/car/car...')
#3 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Car->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Car))
#6 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\kohana\system\classes\Kohana\View.php:137