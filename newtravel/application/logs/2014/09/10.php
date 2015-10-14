<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-10 09:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 09:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 10:29:18 --- ERROR: ErrorException [ 1 ]: Class 'rr' not found ~ APPPATH\classes\controller\visa.php [ 261 ]
2014-09-10 10:29:18 --- STRACE: ErrorException [ 1 ]: Class 'rr' not found ~ APPPATH\classes\controller\visa.php [ 261 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-10 10:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 10:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 10:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 10:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 10:29:32 --- ERROR: ErrorException [ 1 ]: Class 'rr' not found ~ APPPATH\classes\controller\visa.php [ 261 ]
2014-09-10 10:29:32 --- STRACE: ErrorException [ 1 ]: Class 'rr' not found ~ APPPATH\classes\controller\visa.php [ 261 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-09-10 10:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 10:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 10:38:07 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'circuit' at row 1 [ UPDATE `sline_visa` SET `webid` = 0, `seotitle` = '马来西亚旅游签证_成都代办马来西亚签证', `shownum` = 0, `circuit` = '第一条签证产品内容及其标准1、 为客户所提供的所有签证服务类别，均属于协助办理性质，您的签证申请是否成功，完全由该国的签证官根据您递交的申请材料独立判断，本公司不得以任何方式的干预或交涉；并且在任何情况下，本公司都不承担由签证申请结果而导致被追溯任何赔偿的责任和义务。 2、 提供所有材料并不意味着使领馆一定颁发签证。如遇使领馆拒签，我司所收的全部费用不予以退还。　 第二条取消您的已生效订单 在您按要求付清所有签证费用后，如因佰程原因，致使您的签证无法办理而取消或不能按时出签的，佰程应当立即通知您，除无条件退返您已支付的所有费用外，还应按如下标准支付违约金，但不涉及其他赔偿： 1. 如所收取费用中不包含签证费的，按照所收取费用的10%作为违约金。 2. 如所收取费用中包含签证费的，按照收取费用中扣除签证费后的10%作为违约金。 第三条您应履行的义务 1. 提供真实有效的材料。如由于提供虚假材料而被使领馆拒签，责任自负，并赔偿我公司由此受到的一切损失。 2. 您应确保自身身体条件适合外出旅行。 3. 您应确保您不属于中国政府限制出境的人员之列。 4. 您提供给佰程的证件和相关资料，及通讯联络方式及配送地址等必须真实有效。\n 5. 您应确保订单中的出发日期为实际出发日期，如选择的出发日期与实际不符导致无法在预计时间出行的情况，须责任自负。6. \n使领馆在受理签证材料时，会根据个人情况提出增补材料，请您及时提供有效真实的材料。如因为增补材料而致使领馆无法在原受理时间内签发签证、进而延误您原\n定行程的，责任自负。 第五条佰程应履行的义务 佰程代理您办理签证所需的手续，应妥善保管您的各项证件、材料，如有遗失或毁损，应立即主动补办，并承担补办相关材料的所需费用。 第六条涉及第三方的相关责任 第三方指在办理签证事宜中涉及的签证机关、同行团友及其他相关机构、企业和个人。 对于佰程无法控制，您与第三方出现的下列情况，佰程应协助处理，但不承担责任。 是否发放签证，是否准予出入境，系有关机构之行政权或主权，您应按要求提供真实情况，佰程可协助办理。如因您自身原因或提供材料问题不能及时办理签证而影响行程的，以及被相关机关拒发签证或拒绝入境的。 第七条解决争议适用法律法规约定 在您的预订生效后，如果在本须知或订单约定内容履行过程中，您对相关事宜的履行发生争议，您只同意按照中华人民共和国国家旅游局颁布的相关法律法规来解决争议。 第八条其它 本须知未尽的其他事项，佰程在相应签证产品中会加入详细说明。同时合同双方需承担对等的义务。', `yesjian` = 0, `satisfyscore` = 0, `bookcount` = 0, `modtime` = 1410316687 WHERE `id` = '12' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-09-10 10:38:07 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'circuit' at row 1 [ UPDATE `sline_visa` SET `webid` = 0, `seotitle` = '马来西亚旅游签证_成都代办马来西亚签证', `shownum` = 0, `circuit` = '第一条签证产品内容及其标准1、 为客户所提供的所有签证服务类别，均属于协助办理性质，您的签证申请是否成功，完全由该国的签证官根据您递交的申请材料独立判断，本公司不得以任何方式的干预或交涉；并且在任何情况下，本公司都不承担由签证申请结果而导致被追溯任何赔偿的责任和义务。 2、 提供所有材料并不意味着使领馆一定颁发签证。如遇使领馆拒签，我司所收的全部费用不予以退还。　 第二条取消您的已生效订单 在您按要求付清所有签证费用后，如因佰程原因，致使您的签证无法办理而取消或不能按时出签的，佰程应当立即通知您，除无条件退返您已支付的所有费用外，还应按如下标准支付违约金，但不涉及其他赔偿： 1. 如所收取费用中不包含签证费的，按照所收取费用的10%作为违约金。 2. 如所收取费用中包含签证费的，按照收取费用中扣除签证费后的10%作为违约金。 第三条您应履行的义务 1. 提供真实有效的材料。如由于提供虚假材料而被使领馆拒签，责任自负，并赔偿我公司由此受到的一切损失。 2. 您应确保自身身体条件适合外出旅行。 3. 您应确保您不属于中国政府限制出境的人员之列。 4. 您提供给佰程的证件和相关资料，及通讯联络方式及配送地址等必须真实有效。\n 5. 您应确保订单中的出发日期为实际出发日期，如选择的出发日期与实际不符导致无法在预计时间出行的情况，须责任自负。6. \n使领馆在受理签证材料时，会根据个人情况提出增补材料，请您及时提供有效真实的材料。如因为增补材料而致使领馆无法在原受理时间内签发签证、进而延误您原\n定行程的，责任自负。 第五条佰程应履行的义务 佰程代理您办理签证所需的手续，应妥善保管您的各项证件、材料，如有遗失或毁损，应立即主动补办，并承担补办相关材料的所需费用。 第六条涉及第三方的相关责任 第三方指在办理签证事宜中涉及的签证机关、同行团友及其他相关机构、企业和个人。 对于佰程无法控制，您与第三方出现的下列情况，佰程应协助处理，但不承担责任。 是否发放签证，是否准予出入境，系有关机构之行政权或主权，您应按要求提供真实情况，佰程可协助办理。如因您自身原因或提供材料问题不能及时办理签证而影响行程的，以及被相关机关拒发签证或拒绝入境的。 第七条解决争议适用法律法规约定 在您的预订生效后，如果在本须知或订单约定内容履行过程中，您对相关事宜的履行发生争议，您只同意按照中华人民共和国国家旅游局颁布的相关法律法规来解决争议。 第八条其它 本须知未尽的其他事项，佰程在相应签证产品中会加入详细说明。同时合同双方需承担对等的义务。', `yesjian` = 0, `satisfyscore` = 0, `bookcount` = 0, `modtime` = 1410316687 WHERE `id` = '12' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\standsmore\newtravel\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_v...', false, Array)
#1 D:\web\standsmore\newtravel\modules\orm\classes\Kohana\ORM.php(1489): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\newtravel\application\classes\controller\visa.php(302): Kohana_ORM->update()
#3 [internal function]: Controller_Visa->action_ajax_save()
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Visa))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#8 {main}
2014-09-10 13:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 13:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/uploadify/img/uploadify-cancel.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 13:47:59 --- ERROR: Kohana_Exception [ 0 ]: Directory D:\web\standsmore\data/mark must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2014-09-10 13:47:59 --- STRACE: Kohana_Exception [ 0 ]: Directory D:\web\standsmore\data/mark must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 D:\web\standsmore\newtravel\application\classes\controller\uploader.php(162): Kohana_Upload::save(Array, 'mark.gif')
#1 [internal function]: Controller_Uploader->action_uploadmarkimg()
#2 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploader))
#3 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#6 {main}
2014-09-10 16:31:34 --- ERROR: Database_Exception [ 1052 ]: Column 'seotitle' in field list is ambiguous [ select a.id,a.kindname,a.isopen,a.pinyin,kindid,seotitle,keyword,description,tagword,jieshao,isfinishseo,isnav,ishot,displayorder from sline_destinations a left join sline_line_kindlist b on a.id=b.kindid where a.pid=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-09-10 16:31:34 --- STRACE: Database_Exception [ 1052 ]: Column 'seotitle' in field list is ambiguous [ select a.id,a.kindname,a.isopen,a.pinyin,kindid,seotitle,keyword,description,tagword,jieshao,isfinishseo,isnav,ishot,displayorder from sline_destinations a left join sline_line_kindlist b on a.id=b.kindid where a.pid=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\standsmore\newtravel\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.k...', false, Array)
#1 D:\web\standsmore\newtravel\application\classes\controller\destination.php(46): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Destination->action_destination()
#3 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Destination))
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2014-09-10 16:31:53 --- ERROR: Database_Exception [ 1052 ]: Column 'seotitle' in field list is ambiguous [ select a.id,a.kindname,a.isopen,a.pinyin,kindid,seotitle,keyword,description,tagword,jieshao,isfinishseo,isnav,ishot,displayorder from sline_destinations a left join sline_line_kindlist b on a.id=b.kindid where a.pid=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-09-10 16:31:53 --- STRACE: Database_Exception [ 1052 ]: Column 'seotitle' in field list is ambiguous [ select a.id,a.kindname,a.isopen,a.pinyin,kindid,seotitle,keyword,description,tagword,jieshao,isfinishseo,isnav,ishot,displayorder from sline_destinations a left join sline_line_kindlist b on a.id=b.kindid where a.pid=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\standsmore\newtravel\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.k...', false, Array)
#1 D:\web\standsmore\newtravel\application\classes\controller\destination.php(46): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Destination->action_destination()
#3 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Destination))
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2014-09-10 16:42:48 --- ERROR: Kohana_Exception [ 0 ]: The  property does not exist in the Model_Destinations class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
2014-09-10 16:42:48 --- STRACE: Kohana_Exception [ 0 ]: The  property does not exist in the Model_Destinations class ~ MODPATH\orm\classes\Kohana\ORM.php [ 761 ]
--
#0 D:\web\standsmore\newtravel\modules\orm\classes\Kohana\ORM.php(703): Kohana_ORM->set('', NULL)
#1 D:\web\standsmore\newtravel\application\classes\controller\destination.php(81): Kohana_ORM->__set('', NULL)
#2 [internal function]: Controller_Destination->action_destination()
#3 D:\web\standsmore\newtravel\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Destination))
#4 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#7 {main}
2014-09-10 16:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 16:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 16:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 16:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 16:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 16:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}
2014-09-10 17:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-09-10 17:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/ico-bg.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\newtravel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\newtravel\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\newtravel\index.php(127): Kohana_Request->execute()
#3 {main}