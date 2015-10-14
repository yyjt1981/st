<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-17 11:12:19 --- ERROR: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
2014-11-17 11:12:19 --- STRACE: ErrorException [ 1 ]: Class 'SoapClient' not found ~ APPPATH\classes\model\upgrade.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('new')
#1 {main}
2014-11-17 11:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-11-17 11:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}