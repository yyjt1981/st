<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-06 02:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 02:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\52jscn_admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\52jscn_admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\52jscn_admin\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 02:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 02:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\52jscn_admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\52jscn_admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\52jscn_admin\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 02:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 02:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 52jscn_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 02:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 02:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 03:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 03:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 03:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 03:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 03:33:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-01-06 03:33:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Site\demo\wwwroot\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-01-06 03:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 03:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 03:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 03:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 04:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 04:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 04:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 04:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 04:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 04:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 11:43:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-01-06 11:43:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.ishidden' in 'field list' [ select a.id,a.aid,a.photoname,a.litpic,a.headimgid,a.alt,a.title,a.kindlist,a.attrid,a.webid,a.photokind,a.addtime,a.modtime,a.ishidden,b.isjian,b.displayorder,b.isding from sline_photo as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=6) where a.id is not null and a.webid=0 order by a.modtime desc limit 0,30 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Site\demo\wwwroot\newtravel\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\controller\photo.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Photo->action_photo()
#3 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Photo))
#4 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2015-01-06 11:50:46 --- ERROR: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
2015-01-06 11:50:46 --- STRACE: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
--
#0 [internal function]: SoapClient->__doRequest('<?xml version="...', 'http://update.s...', 'http://tempuri....', 1, 0)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(29): SoapClient->__soapCall('GetNewestPatch', Array)
#2 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#3 D:\Site\demo\wwwroot\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#4 [internal function]: Controller_App->action_ajax_check_update()
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-01-06 11:50:49 --- ERROR: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
2015-01-06 11:50:49 --- STRACE: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
--
#0 [internal function]: SoapClient->__doRequest('<?xml version="...', 'http://update.s...', 'http://tempuri....', 1, 0)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(29): SoapClient->__soapCall('GetNewestPatch', Array)
#2 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#3 D:\Site\demo\wwwroot\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#4 [internal function]: Controller_App->action_ajax_check_update()
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-01-06 11:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 11:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 13:10:11 --- ERROR: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
2015-01-06 13:10:11 --- STRACE: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
--
#0 [internal function]: SoapClient->__doRequest('<?xml version="...', 'http://update.s...', 'http://tempuri....', 1, 0)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(29): SoapClient->__soapCall('GetNewestPatch', Array)
#2 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#3 D:\Site\demo\wwwroot\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#4 [internal function]: Controller_App->action_ajax_check_update()
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-01-06 13:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 13:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 13:13:31 --- ERROR: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
2015-01-06 13:13:31 --- STRACE: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
--
#0 [internal function]: SoapClient->__doRequest('<?xml version="...', 'http://update.s...', 'http://tempuri....', 1, 0)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(29): SoapClient->__soapCall('GetNewestPatch', Array)
#2 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#3 D:\Site\demo\wwwroot\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#4 [internal function]: Controller_App->action_ajax_check_update()
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-01-06 13:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 13:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 13:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 13:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 21:48:48 --- ERROR: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
2015-01-06 21:48:48 --- STRACE: SoapFault [ 0 ]: Could not connect to host ~ APPPATH\classes\model\upgrade.php [ 29 ]
--
#0 [internal function]: SoapClient->__doRequest('<?xml version="...', 'http://update.s...', 'http://tempuri....', 1, 0)
#1 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(29): SoapClient->__soapCall('GetNewestPatch', Array)
#2 D:\Site\demo\wwwroot\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#3 D:\Site\demo\wwwroot\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#4 [internal function]: Controller_App->action_ajax_check_update()
#5 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#6 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}
2015-01-06 23:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 23:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2015-01-06 23:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-01-06 23:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Site\demo\wwwroot\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\Site\demo\wwwroot\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}