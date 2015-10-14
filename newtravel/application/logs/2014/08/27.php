<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-27 09:26:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ]
2014-08-27 09:26:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 09:27:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ]
2014-08-27 09:27:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 09:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 09:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 09:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 09:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 09:39:14 --- ERROR: Kohana_Exception [ 0 ]: The paytype property does not exist in the Model_Line_Suit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
2014-08-27 09:39:14 --- STRACE: Kohana_Exception [ 0 ]: The paytype property does not exist in the Model_Line_Suit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
--
#0 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(703): Kohana_ORM->set('paytype', '1')
#1 D:\web\backcms\admin\application\classes\controller\line.php(814): Kohana_ORM->__set('paytype', '1')
#2 [internal function]: Controller_Line->action_ajax_suitsave()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-27 09:41:46 --- ERROR: Kohana_Exception [ 0 ]: The dingjin property does not exist in the Model_Line_Suit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
2014-08-27 09:41:46 --- STRACE: Kohana_Exception [ 0 ]: The dingjin property does not exist in the Model_Line_Suit class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
--
#0 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(703): Kohana_ORM->set('dingjin', '')
#1 D:\web\backcms\admin\application\classes\controller\line.php(814): Kohana_ORM->__set('dingjin', '')
#2 [internal function]: Controller_Line->action_ajax_suitsave()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-27 10:26:37 --- ERROR: View_Exception [ 0 ]: The requested view stourtravel/login could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2014-08-27 10:26:37 --- STRACE: View_Exception [ 0 ]: The requested view stourtravel/login could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\backcms\admin\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('stourtravel/log...')
#1 D:\web\backcms\admin\application\classes\stourweb\view.php(30): Stourweb_View->__construct('stourtravel/log...', NULL)
#2 D:\web\backcms\admin\application\classes\stourweb\controller.php(29): Stourweb_View::factory('stourtravel/log...')
#3 D:\web\backcms\admin\application\classes\controller\login.php(9): Stourweb_Controller->display('stourtravel/log...')
#4 [internal function]: Controller_Login->action_index()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-27 10:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 10:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 10:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-27 11:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-27 11:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-27 11:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-27 11:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-27 11:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/home' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 11:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 11:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:28:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
2014-08-27 13:28:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
--
#0 D:\web\backcms\admin\application\classes\controller\hotel.php(367): Kohana_ORM->update()
#1 [internal function]: Controller_Hotel->action_ajax_save()
#2 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#3 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#6 {main}
2014-08-27 13:28:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
2014-08-27 13:28:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
--
#0 D:\web\backcms\admin\application\classes\controller\hotel.php(367): Kohana_ORM->update()
#1 [internal function]: Controller_Hotel->action_ajax_save()
#2 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#3 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#6 {main}
2014-08-27 13:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:28:36 --- ERROR: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
2014-08-27 13:28:36 --- STRACE: Kohana_Exception [ 0 ]: Cannot update hotel model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1448 ]
--
#0 D:\web\backcms\admin\application\classes\controller\hotel.php(367): Kohana_ORM->update()
#1 [internal function]: Controller_Hotel->action_ajax_save()
#2 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#3 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#6 {main}
2014-08-27 13:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:54:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'jifencomment' at row 1 [ INSERT INTO `sline_hotel_room` (`roomname`, `roomstyle`, `roomarea`, `roomfloor`, `roomnum`, `jifencomment`, `jifentprice`, `jifenbook`, `dingjin`, `piclist`, `hotelid`) VALUES ('新户型', '大床1.8米', '', '', '', '', '', '', '', '', '419') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-27 13:54:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'jifencomment' at row 1 [ INSERT INTO `sline_hotel_room` (`roomname`, `roomstyle`, `roomarea`, `roomfloor`, `roomnum`, `jifencomment`, `jifentprice`, `jifenbook`, `dingjin`, `piclist`, `hotelid`) VALUES ('新户型', '大床1.8米', '', '', '', '', '', '', '', '', '419') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1414): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\application\classes\controller\hotel.php(744): Kohana_ORM->create()
#3 [internal function]: Controller_Hotel->action_ajax_room_save()
#4 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#8 {main}
2014-08-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 13:55:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'jifencomment' at row 1 [ INSERT INTO `sline_hotel_room` (`roomname`, `roomstyle`, `roomarea`, `roomfloor`, `roomnum`, `jifencomment`, `jifentprice`, `jifenbook`, `dingjin`, `piclist`, `hotelid`) VALUES ('新户型', '大床1.8米', '', '', '', '', '', '', '', '', '419') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-27 13:55:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'jifencomment' at row 1 [ INSERT INTO `sline_hotel_room` (`roomname`, `roomstyle`, `roomarea`, `roomfloor`, `roomnum`, `jifencomment`, `jifentprice`, `jifenbook`, `dingjin`, `piclist`, `hotelid`) VALUES ('新户型', '大床1.8米', '', '', '', '', '', '', '', '', '419') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1414): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\application\classes\controller\hotel.php(744): Kohana_ORM->create()
#3 [internal function]: Controller_Hotel->action_ajax_room_save()
#4 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#8 {main}
2014-08-27 17:36:44 --- ERROR: View_Exception [ 0 ]: The requested view stourtravel/login could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2014-08-27 17:36:44 --- STRACE: View_Exception [ 0 ]: The requested view stourtravel/login could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\backcms\admin\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('stourtravel/log...')
#1 D:\web\backcms\admin\application\classes\stourweb\view.php(30): Stourweb_View->__construct('stourtravel/log...', NULL)
#2 D:\web\backcms\admin\application\classes\stourweb\controller.php(29): Stourweb_View::factory('stourtravel/log...')
#3 D:\web\backcms\admin\application\classes\controller\login.php(11): Stourweb_Controller->display('stourtravel/log...')
#4 [internal function]: Controller_Login->action_index()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-27 17:36:59 --- ERROR: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
2014-08-27 17:36:59 --- STRACE: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:37:04 --- ERROR: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
2014-08-27 17:37:04 --- STRACE: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:37:17 --- ERROR: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
2014-08-27 17:37:17 --- STRACE: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:38:46 --- ERROR: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 71 ]
2014-08-27 17:38:46 --- STRACE: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:40:28 --- ERROR: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 73 ]
2014-08-27 17:40:28 --- STRACE: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\captcha.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:40:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH\captcha\classes\captcha.php [ 440 ]
2014-08-27 17:40:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH\captcha\classes\captcha.php [ 440 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:43:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH\captcha\classes\captcha.php [ 440 ]
2014-08-27 17:43:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH\captcha\classes\captcha.php [ 440 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 17:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 17:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 17:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 17:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-27 17:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-27 17:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}