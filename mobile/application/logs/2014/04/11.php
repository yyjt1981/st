<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-11 00:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL raider/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-04-11 00:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL raider/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 00:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/line/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-04-11 00:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/line/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 00:37:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\default\search.php [ 62 ]
2014-04-11 00:37:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\default\search.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-11 01:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 01:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:08:07 --- ERROR: ErrorException [ 2048 ]: Redefining already defined constructor for class PSCWS4 ~ MODPATH\cloudsearch\pscws4.class.php [ 120 ]
2014-04-11 02:08:07 --- STRACE: ErrorException [ 2048 ]: Redefining already defined constructor for class PSCWS4 ~ MODPATH\cloudsearch\pscws4.class.php [ 120 ]
--
#0 E:\kohana\application\classes\Controller\index.php(29): Kohana_Core::error_handler(2048, 'Redefining alre...', 'E:\kohana\modul...', 120, Array)
#1 E:\kohana\application\classes\Controller\index.php(29): Controller_Index::action_search()
#2 [internal function]: Controller_Index->action_search()
#3 E:\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(111): Kohana_Request->execute()
#7 {main}
2014-04-11 02:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:10:13 --- ERROR: ErrorException [ 2048 ]: Redefining already defined constructor for class XDB_R ~ MODPATH\cloudsearch\xdb_r.class.php [ 34 ]
2014-04-11 02:10:13 --- STRACE: ErrorException [ 2048 ]: Redefining already defined constructor for class XDB_R ~ MODPATH\cloudsearch\xdb_r.class.php [ 34 ]
--
#0 E:\kohana\modules\cloudsearch\pscws4.class.php(42): Kohana_Core::error_handler(2048, 'Redefining alre...', 'E:\kohana\modul...', 34, Array)
#1 E:\kohana\modules\cloudsearch\pscws4.class.php(42): require_once()
#2 E:\kohana\application\classes\Controller\index.php(29): require('E:\kohana\modul...')
#3 [internal function]: Controller_Index->action_search()
#4 E:\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(111): Kohana_Request->execute()
#8 {main}
2014-04-11 02:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:10:36 --- ERROR: ErrorException [ 1 ]: Call to undefined function getLeftNav() ~ APPPATH\classes\Controller\index.php [ 57 ]
2014-04-11 02:10:36 --- STRACE: ErrorException [ 1 ]: Call to undefined function getLeftNav() ~ APPPATH\classes\Controller\index.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-11 02:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:10:53 --- ERROR: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_search' doesn't exist [ select a.* from (select *,case when title is not null then 1 when title is not null then 2 end as neworder from sline_search where title is not null) a order by neworder ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-11 02:10:53 --- STRACE: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_search' doesn't exist [ select a.* from (select *,case when title is not null then 1 when title is not null then 2 end as neworder from sline_search where title is not null) a order by neworder ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\index.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index->action_search()
#3 E:\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(111): Kohana_Request->execute()
#7 {main}
2014-04-11 02:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:22:15 --- ERROR: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_search' doesn't exist [ select a.* from (select *,case when title is not null then 1 when title is not null then 2 end as neworder from sline_search where title is not null) a order by neworder ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-04-11 02:22:15 --- STRACE: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_search' doesn't exist [ select a.* from (select *,case when title is not null then 1 when title is not null then 2 end as neworder from sline_search where title is not null) a order by neworder ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select a.* from...', false, Array)
#1 E:\kohana\application\classes\Controller\index.php(67): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index->action_search()
#3 E:\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(111): Kohana_Request->execute()
#7 {main}
2014-04-11 02:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.search ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.search ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 02:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183146.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183146.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183631.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183631.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183235.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183235.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183420.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805182729.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183420.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805182729.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183033.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183033.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183736.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183736.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183948.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183948.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183717.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183717.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184013.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184013.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183912.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805183912.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184148.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184230.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184230.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518432.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518432.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184430.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184430.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518468.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518468.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184647.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184539.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184647.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805184539.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185018.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185018.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185126.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185126.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185920.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190048.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185920.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185831.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518551.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ] ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185831.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180518551.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185722.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805185722.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190225.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190225.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190719.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190549.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190719.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190549.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180519067.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190930.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180519067.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805190930.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191027.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191027.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180519135.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/201403180519135.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191247.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191247.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191334.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191334.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191444.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191444.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191528.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191528.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191623.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191623.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 02:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191612.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-04-11 02:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploads/arcimgs/20140318/2014031805191612.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\kohana\index.php(111): Kohana_Request->execute()
#3 {main}
2014-04-11 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}
2014-04-11 04:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-04-11 04:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/base.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\kohana\index.php(111): Kohana_Request->execute()
#1 {main}