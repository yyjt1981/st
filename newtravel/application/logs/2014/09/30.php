<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-30 11:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-30 11:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-30 11:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templet_info.php ~ SYSPATH\classes\kohana\request.php [ 1146 ]
2014-09-30 11:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templet_info.php ~ SYSPATH\classes\kohana\request.php [ 1146 ]
--
#0 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#1 {main}
2014-09-30 11:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-30 11:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-30 11:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-30 11:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/msg-ico.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-30 12:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-30 12:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-30 12:01:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: D:\phpStudy\WWW\uploads\main\allimg\20140930\20140930120124.jpg ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2014-09-30 12:01:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: D:\phpStudy\WWW\uploads\main\allimg\20140930\20140930120124.jpg ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\phpStudy\WWW\newtravel\modules\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\phpStudy\WWW...')
#1 D:\phpStudy\WWW\newtravel\modules\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\phpStudy\WWW...')
#2 D:\phpStudy\WWW\newtravel\application\classes\controller\uploader.php(280): Kohana_Image::factory('D:\phpStudy\WWW...')
#3 D:\phpStudy\WWW\newtravel\application\classes\controller\uploader.php(90): Controller_Uploader->thumbPicture('D:\phpStudy\WWW...', 'D:\phpStudy\WWW...', 'D:\phpStudy\WWW...', 480, 320, '20140930120124....')
#4 [internal function]: Controller_Uploader->action_uploadfile()
#5 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploader))
#6 D:\phpStudy\WWW\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\phpStudy\WWW\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#8 D:\phpStudy\WWW\newtravel\index.php(127): Kohana_Request->execute()
#9 {main}