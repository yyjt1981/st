<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-01 11:11:49 --- ERROR: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : EntityRef: expecting ';'
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-10-01 11:11:49 --- STRACE: SoapFault [ 0 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : EntityRef: expecting ';'
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 D:\phpStudy\WWW\newtravel\application\classes\model\upgrade.php(22): SoapClient->SoapClient('http://update.s...')
#1 D:\phpStudy\WWW\newtravel\application\classes\model\upgrade.php(69): Model_Upgrade->getRelease('new')
#2 D:\phpStudy\WWW\newtravel\application\classes\controller\app.php(52): Model_Upgrade->getReleaseList()
#3 [internal function]: Controller_App->action_ajax_check_update()
#4 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_App))
#5 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#7 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#8 {main}
2014-10-01 11:11:49 --- ERROR: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : EntityRef: expecting ';'
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-10-01 11:11:49 --- STRACE: ErrorException [ 1 ]: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://update.souxw.com/service/api.asmx?WSDL' : EntityRef: expecting ';'
 ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-10-01 11:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-10-01 11:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-10-01 11:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-10-01 11:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}