<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-05 15:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 15:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-05 15:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 15:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-05 15:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 15:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-05 16:18:56 --- ERROR: Kohana_Exception [ 0 ]: The  property does not exist in the Model_Destinations class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
2014-09-05 16:18:56 --- STRACE: Kohana_Exception [ 0 ]: The  property does not exist in the Model_Destinations class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
--
#0 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(703): Kohana_ORM->set('', NULL)
#1 D:\web\backcms\admin\application\classes\controller\destination.php(78): Kohana_ORM->__set('', NULL)
#2 [internal function]: Controller_Destination->action_destination()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Destination))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-09-05 16:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 16:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-05 16:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 16:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-05 16:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-05 16:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}