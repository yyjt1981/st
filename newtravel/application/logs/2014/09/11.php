<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-11 09:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 09:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 10:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 10:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 10:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 10:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 10:22:34 --- ERROR: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api_v2.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api_v2.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 144 ]
2014-09-11 10:22:34 --- STRACE: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api_v2.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api_v2.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 144 ]
--
#0 D:\web\standsmore\newtravel\application\classes\model\upgrade.php(144): SoapClient->SoapClient('http://update.s...')
#1 D:\web\standsmore\newtravel\application\classes\controller\app.php(205): Model_Upgrade->checkLicense('www.lvyou.com', '35617317')
#2 [internal function]: Controller_App->action_ajax_bind_license()
#3 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2014-09-11 10:22:34 --- ERROR: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api_v2.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api_v2.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 144 ]
2014-09-11 10:22:34 --- STRACE: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api_v2.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api_v2.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-11 11:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-11 11:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-11 11:43:16 --- ERROR: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-09-11 11:43:16 --- STRACE: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 D:\web\standsmore\newtravel\application\classes\model\upgrade.php(22): SoapClient->SoapClient('http://update.s...')
#1 D:\web\standsmore\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#2 D:\web\standsmore\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#3 [internal function]: Controller_App->action_ajax_check_update()
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#8 {main}
2014-09-11 11:43:16 --- ERROR: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-09-11 11:43:16 --- STRACE: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-11 11:43:22 --- ERROR: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-09-11 11:43:22 --- STRACE: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 D:\web\standsmore\newtravel\application\classes\model\upgrade.php(22): SoapClient->SoapClient('http://update.s...')
#1 D:\web\standsmore\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#2 D:\web\standsmore\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#3 [internal function]: Controller_App->action_ajax_check_update()
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#8 {main}
2014-09-11 11:43:22 --- ERROR: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-09-11 11:43:22 --- STRACE: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : failed to load external entity "http://update.souxw.com/service/api.asmx?WSDL"
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}