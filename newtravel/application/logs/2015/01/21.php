<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-21 10:59:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 10:59:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 10:59:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 10:59:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 10:59:59 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 10:59:59 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:00 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:00 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:01 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:01 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:00:13 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:00:13 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:25 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:25 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:26 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:26 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:28 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:28 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:29 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:29 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:30 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:30 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:31 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:31 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:32 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:32 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:35 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:35 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:01:44 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:01:44 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:02:36 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:02:36 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:02:37 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:02:37 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:02:38 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:02:38 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:02:39 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:02:39 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:02:40 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:02:40 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:03:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:03:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:03:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:03:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:03:05 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:03:05 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:03:07 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:03:07 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:03:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:03:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:05:09 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:05:09 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:05:19 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:05:19 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:05:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:05:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:05:44 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:05:44 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:05:45 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:05:45 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:13:42 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:13:42 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:13:57 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:13:57 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:13:58 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:13:58 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:13:59 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:13:59 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:14:00 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:14:00 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:15:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:15:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:15:36 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:15:36 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:16:16 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:16:16 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:16:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:16:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:16:18 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:16:18 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:16:19 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:16:19 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:16:20 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:16:20 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:17:10 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:17:10 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:17:17 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:17:17 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:17:43 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:17:43 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:18:33 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:18:33 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:18:38 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:18:38 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:20 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:20 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:22 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:22 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:23 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:23 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:25 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:25 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:26 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:26 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:19:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:19:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:20:35 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:20:35 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:20:36 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:20:36 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}
2015-01-21 11:20:38 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-01-21 11:20:38 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 F:\www\newtravel\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\www\newtravel\modules\orm\classes\kohana\orm.php(1763): Kohana_Database_MySQL->list_columns('admin')
#4 F:\www\newtravel\modules\orm\classes\kohana\orm.php(445): Kohana_ORM->list_columns()
#5 F:\www\newtravel\modules\orm\classes\kohana\orm.php(390): Kohana_ORM->reload_columns()
#6 F:\www\newtravel\modules\orm\classes\kohana\orm.php(255): Kohana_ORM->_initialize()
#7 F:\www\newtravel\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 F:\www\newtravel\application\classes\controller\login.php(56): Kohana_ORM::factory('admin')
#9 [internal function]: Controller_Login->action_ajax_login()
#10 F:\www\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#11 F:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 F:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#13 F:\www\newtravel\index.php(127): Kohana_Request->execute()
#14 {main}