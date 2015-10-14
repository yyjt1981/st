<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-08 01:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-08 01:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-08 02:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-08 02:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-08 02:10:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-01-08 02:10:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Site\demo\wwwroot\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-01-08 02:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-08 02:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-08 23:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-08 23:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}