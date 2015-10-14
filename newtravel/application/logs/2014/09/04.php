<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-04 09:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 09:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 09:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 09:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 09:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 09:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 10:02:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:02:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:02:48 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:02:48 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:02:48 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:02:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:02:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:02:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:02:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:02:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:25 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:03:25 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:03:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:03:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:07 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:04:07 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:07 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:07 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:07 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:07 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:04:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:04:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:04:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:05:10 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:05:10 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:05:10 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:05:10 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:10:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:10:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:11:03 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:11:03 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:11:03 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:11:03 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:11:03 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
2014-09-04 10:11:03 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:11:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:11:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:12:10 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
2014-09-04 10:12:10 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 960 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-04 10:12:47 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:12:47 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:13:29 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:13:29 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:14:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:14:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(57): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:15:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
2014-09-04 10:15:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\backcms\admin\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(445): Kohana_ORM->list_columns()
#5 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(390): Kohana_ORM->reload_columns()
#6 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(255): Kohana_ORM->_initialize()
#7 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\web\backcms\admin\application\classes\controller\login.php(57): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#14 {main}
2014-09-04 10:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 10:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 10:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 10:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 11:13:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'childbasicprice' at row 1 [ INSERT INTO `sline_line_suit_price` (`lineid`, `suitid`, `adultbasicprice`, `adultprofit`, `adultprice`, `childbasicprice`, `childprofit`, `childprice`, `oldbasicprice`, `oldprofit`, `oldprice`, `day`) VALUES ('6007', '4', '100', '100', 200, '', '', 0, '', '', 0, 1410364800) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-09-04 11:13:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'childbasicprice' at row 1 [ INSERT INTO `sline_line_suit_price` (`lineid`, `suitid`, `adultbasicprice`, `adultprofit`, `adultprice`, `childbasicprice`, `childprofit`, `childprice`, `oldbasicprice`, `oldprofit`, `oldprice`, `day`) VALUES ('6007', '4', '100', '100', 200, '', '', 0, '', '', 0, 1410364800) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1415): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1516): Kohana_ORM->create(NULL)
#3 D:\web\backcms\admin\application\classes\controller\line.php(908): Kohana_ORM->save()
#4 D:\web\backcms\admin\application\classes\controller\line.php(845): Controller_Line->saveBaoJia('6007', '4', Array)
#5 [internal function]: Controller_Line->action_ajax_suitsave()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-09-04 11:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 11:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 11:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-04 11:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-04 11:13:27 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'childbasicprice' at row 1 [ INSERT INTO `sline_line_suit_price` (`lineid`, `suitid`, `adultbasicprice`, `adultprofit`, `adultprice`, `childbasicprice`, `childprofit`, `childprice`, `oldbasicprice`, `oldprofit`, `oldprice`, `day`) VALUES ('6007', '4', '100', '100', 200, '', '', 0, '', '', 0, 1410364800) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-09-04 11:13:27 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'childbasicprice' at row 1 [ INSERT INTO `sline_line_suit_price` (`lineid`, `suitid`, `adultbasicprice`, `adultprofit`, `adultprice`, `childbasicprice`, `childprofit`, `childprice`, `oldbasicprice`, `oldprofit`, `oldprice`, `day`) VALUES ('6007', '4', '100', '100', 200, '', '', 0, '', '', 0, 1410364800) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1415): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1516): Kohana_ORM->create(NULL)
#3 D:\web\backcms\admin\application\classes\controller\line.php(908): Kohana_ORM->save()
#4 D:\web\backcms\admin\application\classes\controller\line.php(845): Controller_Line->saveBaoJia('6007', '4', Array)
#5 [internal function]: Controller_Line->action_ajax_suitsave()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-09-04 11:42:53 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete supplier model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1529 ]
2014-09-04 11:42:53 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete supplier model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1529 ]
--
#0 D:\web\backcms\admin\application\classes\controller\hotsearch.php(67): Kohana_ORM->delete()
#1 [internal function]: Controller_Hotsearch->action_index()
#2 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotsearch))
#3 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#6 {main}