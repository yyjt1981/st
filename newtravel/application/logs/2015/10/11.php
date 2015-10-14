<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-11 13:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:00:58 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:00:58 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:05 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:05 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:07 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:07 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:12 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:12 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:13 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:13 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:14 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:14 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:15 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:15 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:16 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:16 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:01:43 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:43 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:50 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:50 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:01:52 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:01:52 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:05:07 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:05:07 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:05:08 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:05:08 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:05:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:05:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:11:56 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:11:56 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:00 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:00 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:12:36 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:36 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:39 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:39 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:40 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:40 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:41 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:41 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:12:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:12:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:23:16 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:16 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:18 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:18 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:19 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:19 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:20 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:20 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:22 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:22 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:23:23 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:23:23 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:25:54 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:25:54 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:26:29 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:29 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:31 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:31 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:32 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:32 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:33 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:33 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:26:34 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:26:34 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:29:13 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:29:13 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:29:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:29:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:30:30 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:30:30 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:30:38 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:30:38 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:42:31 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:42:31 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:42:37 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:42:37 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:42:40 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:42:40 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:46:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:46:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:46:52 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:46:52 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:47:08 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 13:47:08 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 13:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 13:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 13:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:14:14 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:14:14 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:17:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:17:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:17:47 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:17:47 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:19:57 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:19:57 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:00 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:00 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:20:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-11 14:20:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\phpStudy\WWW\st\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-10-11 14:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:30:47 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 14:30:47 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 14:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:31:13 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 14:31:13 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 14:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/login-logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 14:37:54 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 14:37:54 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 14:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 14:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:01:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''
		  推荐线路 ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 15:01:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''
		  推荐线路 ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(2, '??insert into s...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\modules\orm\classes\kohana\orm.php(1064): Kohana_Database_Query->execute()
#2 D:\phpStudy\WWW\st\newtravel\application\classes\model\weblist.php(53): Kohana_ORM->get_sql('??insert into s...', 2)
#3 D:\phpStudy\WWW\st\newtravel\application\classes\controller\site.php(69): Model_Weblist->initData(1, 'hz')
#4 [internal function]: Controller_Site->action_ajax_addsave()
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Site))
#6 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-10-11 15:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:01:30 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 15:01:30 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 15:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 15:08:24 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 15:08:24 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 15:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 15:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:09:57 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 16:09:57 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 16:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:10:12 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 16:10:12 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 16:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:14:36 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 16:14:36 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 16:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 16:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 16:20:07 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 16:20:07 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 16:26:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 16:26:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-10-11 16:26:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=1 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 16:26:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=1 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-10-11 16:26:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and find_in_set(13,a.attrid) and a.webid=1 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 16:26:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and find_in_set(13,a.attrid) and a.webid=1 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-10-11 16:30:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-10-11 16:30:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(NULL, '1')
#1 {main}
2015-10-11 16:34:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 16:34:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-10-11 17:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 17:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 17:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 17:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 17:04:30 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 17:04:30 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2015-10-11 17:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 17:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/index_logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 17:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-11 17:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-10-11 17:04:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-11 17:04:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\phpStudy\WWW\st\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\phpStudy\WWW\st\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\phpStudy\WWW\st\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\st\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-10-11 17:04:59 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2015-10-11 17:04:59 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}