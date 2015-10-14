<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-24 10:07:04 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 10:07:04 --- NOTICE: #0 E:\kohana\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Non-static meth...', 'E:\kohana\appli...', 11, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 10:07:07 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 10:07:07 --- NOTICE: #0 E:\kohana\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Non-static meth...', 'E:\kohana\appli...', 11, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 10:07:08 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 10:07:08 --- NOTICE: #0 E:\kohana\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(2048, 'Non-static meth...', 'E:\kohana\appli...', 11, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 15:41:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_line' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-24 15:41:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 15:41:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Line' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-24 15:41:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 15:45:11 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'www_stand_smore' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-24 15:45:11 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('www_stand_smore')
#1 E:\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM l...', false, Array)
#3 E:\kohana\application\classes\Controller\Welcome.php(9): Kohana_Database_Query->execute()
#4 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\kohana\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-24 15:45:47 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'www_standsmore_com.line' doesn't exist [ SELECT * FROM line limit 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-24 15:45:47 --- NOTICE: #0 E:\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM l...', false, Array)
#1 E:\kohana\application\classes\Controller\Welcome.php(9): Kohana_Database_Query->execute()
#2 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-03-24 15:51:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 15:51:41 --- NOTICE: #0 E:\kohana\application\classes\Controller\Welcome.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\kohana\appli...', 11, Array)
#1 E:\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\kohana\application\classes\Controller\Welcome.php:11
2014-03-24 15:52:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query::find() ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2014-03-24 15:52:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line