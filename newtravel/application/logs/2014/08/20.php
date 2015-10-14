<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-20 09:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 09:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 09:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 09:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 09:40:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.litpic' in 'where clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`spotname` AS `spotname`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`lineclass` AS `lineclass`, `sline_spot`.`doorprice` AS `doorprice`, `sline_spot`.`area` AS `area`, `sline_spot`.`spotpicid` AS `spotpicid`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`went` AS `went`, `sline_spot`.`want` AS `want`, `sline_spot`.`isjian` AS `isjian`, `sline_spot`.`isding` AS `isding`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`displayorder` AS `displayorder`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`webidfs` AS `webidfs`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`childkind` AS `childkind`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`dingjin` AS `dingjin`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`yesjian` AS `yesjian`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist` FROM `sline_spot` AS `sline_spot` WHERE a.litpic !='' or a.piclist !='' GROUP BY `spotname` ORDER BY `displayorder` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 09:40:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.litpic' in 'where clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`spotname` AS `spotname`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`lineclass` AS `lineclass`, `sline_spot`.`doorprice` AS `doorprice`, `sline_spot`.`area` AS `area`, `sline_spot`.`spotpicid` AS `spotpicid`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`went` AS `went`, `sline_spot`.`want` AS `want`, `sline_spot`.`isjian` AS `isjian`, `sline_spot`.`isding` AS `isding`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`displayorder` AS `displayorder`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`webidfs` AS `webidfs`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`childkind` AS `childkind`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`dingjin` AS `dingjin`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`yesjian` AS `yesjian`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist` FROM `sline_spot` AS `sline_spot` WHERE a.litpic !='' or a.piclist !='' GROUP BY `spotname` ORDER BY `displayorder` ASC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1043): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\model\line.php(33): Kohana_ORM->get_all()
#5 D:\web\backcms\admin\application\classes\controller\line.php(1016): Model_Line->autoGetSpot('%3Cp%20style%3D...', '{sline:var.fiel...', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 10:00:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':var.fields.aid/} and spotname='红珠山' and day=1' at line 1 [ select count(*) as num from sline_line_dayspot where lineid={sline:var.fields.aid/} and spotname='红珠山' and day=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 10:00:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':var.fields.aid/} and spotname='红珠山' and day=1' at line 1 [ select count(*) as num from sline_line_dayspot where lineid={sline:var.fields.aid/} and spotname='红珠山' and day=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('select count(*)...', 1)
#3 D:\web\backcms\admin\application\classes\model\line.php(78): Kohana_ORM->query('select count(*)...', 1)
#4 D:\web\backcms\admin\application\classes\model\line.php(64): Model_Line->insertDaySpot('{sline:var.fiel...', '?????????', '/uploads/main/l...', '1', '1679')
#5 D:\web\backcms\admin\application\classes\controller\line.php(1016): Model_Line->autoGetSpot('<p style="text-...', '{sline:var.fiel...', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 10:02:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':var.fields.aid/} and spotname='红珠山' and day=1' at line 1 [ select count(*) as num from sline_line_dayspot where lineid={sline:var.fields.aid/} and spotname='红珠山' and day=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 10:02:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':var.fields.aid/} and spotname='红珠山' and day=1' at line 1 [ select count(*) as num from sline_line_dayspot where lineid={sline:var.fields.aid/} and spotname='红珠山' and day=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('select count(*)...', 1)
#3 D:\web\backcms\admin\application\classes\model\line.php(79): Kohana_ORM->query('select count(*)...', 1)
#4 D:\web\backcms\admin\application\classes\model\line.php(64): Model_Line->insertDaySpot('{sline:var.fiel...', '?????????', '/uploads/main/l...', '1', '1679')
#5 D:\web\backcms\admin\application\classes\controller\line.php(1016): Model_Line->autoGetSpot('<p style="text-...', '{sline:var.fiel...', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 10:07:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1')' at line 1 [ insert into sline_line_dayspot(lineid,spotname,spotid,litpic,day) values(6007','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 10:07:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1')' at line 1 [ insert into sline_line_dayspot(lineid,spotname,spotid,litpic,day) values(6007','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('insert into sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(84): Kohana_ORM->query('insert into sli...', 2)
#4 D:\web\backcms\admin\application\classes\model\line.php(64): Model_Line->insertDaySpot('6007', '?????????', '/uploads/main/l...', '1', '1679')
#5 D:\web\backcms\admin\application\classes\controller\line.php(1016): Model_Line->autoGetSpot('<p><span style=...', '6007', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 10:09:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1')' at line 1 [ insert into sline_line_dayspot(lineid,spotname,spotid,litpic,day) values(6007','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 10:09:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1')' at line 1 [ insert into sline_line_dayspot(lineid,spotname,spotid,litpic,day) values(6007','红珠山','1679','/uploads/main/litimg/20140212/201402121118111-2.jpg','1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('insert into sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(82): Kohana_ORM->query('insert into sli...', 2)
#4 D:\web\backcms\admin\application\classes\model\line.php(62): Model_Line->insertDaySpot('6007', '?????????', '/uploads/main/l...', '1', '1679')
#5 D:\web\backcms\admin\application\classes\controller\line.php(1016): Model_Line->autoGetSpot('<p><span style=...', '6007', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 10:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/ajax_del_dayspot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-08-20 10:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/ajax_del_dayspot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 11:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 11:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 11:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 11:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 11:27:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'starttime' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`starttime`,`endtime`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505256','1408505256',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:27:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'starttime' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`starttime`,`endtime`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505256','1408505256',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(140): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:29:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'starttime' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`starttime`,`endtime`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505341','1408505341',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:29:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'starttime' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`starttime`,`endtime`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505341','1408505341',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(140): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:31:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'linephone' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505494','1408505494',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:31:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'linephone' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linephone`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505494','1408505494',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(142): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:31:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'istejia' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505517','1408505517',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:31:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'istejia' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`istejia`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','','156','142','1408505517','1408505517',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(143): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:32:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalprovince' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505543','1408505543',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:32:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalprovince' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalprovince`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505543','1408505543',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(144): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:32:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalcity' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505565','1408505565',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:32:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalcity' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalcity`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505565','1408505565',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(145): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:33:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalarea' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505587','1408505587',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:33:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'ssmalarea' at row 1 [ INSERT INTO sline_line (`webid`,`aid`,`linetype`,`linename`,`lineicon`,`oldname`,`wholesale`,`wholesalel`,`seotitle`,`startcity`,`overcity`,`linedate`,`lineclassid`,`tprice`,`profit`,`lineprice`,`lineday`,`linenight`,`linespot`,`linepic`,`linedoc`,`tagword`,`keyword`,`jieshao`,`biaozhun`,`beizu`,`payment`,`feeinclude`,`features`,`description`,`shownum`,`seatleft`,`storeprice`,`childprice`,`transport`,`linebefore`,`isjian`,`isding`,`yesjian`,`nojian`,`addtime`,`modtime`,`reserved1`,`reserved2`,`reserved3`,`displayorder`,`isbold`,`color`,`bigpic`,`ssmaltype`,`ssmalarea`,`sdisplayorder`,`childrule`,`kindlist`,`themelist`,`webidfs`,`attrid`,`satisfyscore`,`bookcount`,`ishidden`,`childkind`,`txtjieshao`,`isstyle`,`sellpoint`,`upstyle`,`piclist`,`distance`,`zijiaseat`,`zijiaprice`,`zijiacar`,`jifencomment`,`jifentprice`,`jifenbook`,`dingjin`,`showrepast`,`paytype`,`templet`,`iconlist`,`supplierlist`)VALUES ( '0','163601','','成都—卫星基地、泸山、邛海汽车往返二日游','','','','','','75','西昌 卫星基地 邛海 泸山','天天发团','','0','0','718','2','1','','/uploads/main/litimg/20140515/20140515162805.jpg','/uploads/doc/20140819160310.docx','卫星基地,邛海,泸山','','dfgf','
住宿安排及标准 
第一天：西昌市区； 
关于住宿特殊说明： 详细标准见最终确认行程中关于住宿的描述,同时住宿的次序会根据行程的变化而变化； 
交通安排及标准： 
汽车：空调旅游车或车站班线车，根据，上车车位一般不固定，随上随座，若有特殊要求，请与导游商量； 
导游安排及费用： 
行程中第 1 天至 2 天有导游，费用已含； 
特别说明：自由活动期间，由游客自行活动，无导游跟随游客需自行对自己的安全及财产负责

&nbsp;','关于特殊人群的说明：
【关于婴儿】
1、如果您的小孩未满两周岁，且不需要占用车位，床位等，将不收取费用，若产生其它费用需自理 

【关于儿童】
1、年满2--12周岁（不含12岁）之间的小孩，我们统一按照儿童计算收费，儿童费用只包含了车位费（车位费不包括景区观光车、电瓶车等费用）及儿童餐费，若产生的其他费用敬请自理。
2、如果您的小孩年满12周岁（含12岁），请在下单时，直接选择成人价，景区对特定人群有优惠政策，详见下方关于特殊人群优惠政策信息。
3、凡身高超过1.2米的儿童，可能会产生以下费用：（儿童优惠门票请各位家长自行前往景区门口购买或直接寻求导游协助购买。）
&nbsp;螺髻山景区门票费原价 &nbsp;90 元，儿童优惠价&nbsp;45&nbsp; 元

【关于儿童及老年人、军官、军残人士等特殊人群购票的特别提示】
凡需要购买儿童门票的家长，请一定携带儿童的学生证、户口簿等能证明儿童身份的有效证件，出行时请携带有效优惠证件，老年人请携带好有效身份证，导游购买门票时主动出示有效优惠证件，以免在景区购买门票时，耽误太多时间或引起不必要的误会及麻烦（个别景区需要儿童到达售票窗口现场，由工作人员现场核实后才会出售儿童优惠票）；
&nbsp;
【关于老年及有疾病史的游客】
考虑到老人身体状况，保证安全，70岁(含70岁)以上老人恕不接待！
患有冠心病，高血压等心、脑、肺、血管病史疾病的客人恕不接待
&nbsp;
特别提示
1、行程景点抵、离时间会受交通、景区游客人数及单个景点游玩时间长短所影响，故行程段内个别时间安排会与实际有所出入，但绝不会影响或减少景点的游览； 
2、参观卫星中心必须携带身份证，否则责任自负 
3、门票已为旅行社折扣价，任何人无优惠、退免 
4、本团为散客拼团，我社有权对行程顺序进行调整 
5、若因天气、交通、景点、拥挤或客人自身等原因导致游览项目减少或取消，我社只负责退还门票差额，不承担由此产生的其他任何损失和责任 
6、因人力不可抗拒以及春运、春节、黄金周等因素造成行程延误等，游客应协助旅行社解决，所产生费用由游客自理 
7、因游客自身原因放弃住宿、用餐、用车、门票等费用不退。&nbsp;
【购物安排】
此行程为纯玩团，不进购物店，在乐山景区及峨眉山景区内会有很多土特产及朝佛纪念品出售，凡在景区内的类似购物店形式的卖场均不属于我社推荐的合作购物店，请游客谨慎选购，我社均不负责游客在该类似购物店内购买物品质量的优劣，且不计算为进购物店。
&nbsp;【自费项目】

邛海游船10元起、泸山索道25元起、邛池月色（含古城楼门票、船费、车费、司导加班费）50/人

&nbsp;','
&nbsp;网上预订：直接通过网站下单，在线选择产品并填写相关信息后，提交订单。
&nbsp;在线预订：拨打咨询/预订电话，由客服帮助您完成信息的确认和下单操作。预订热线：4000-88-4077
签约方式

&nbsp;
在线签约：在您确认合同范本以后，我们将盖章的电子档合同发送到您的邮箱，并电话通知您注意查收和尽快回复。
传真签约：双方在合同上签字盖章后，通过传真进行签约。如涉及签证材料需要快递，请在快件中注明合同订单号、顾问姓名及电话。
门市签约：四川省成都市青羊区少城路27号少城大厦705-6（人民公园对面） 邮编：610000
确认预订：网上提交的订单将由专属客服跟进处理，由该客服一对一的为您服务，你有任何疑问，均有该客服为您解答。

出团通知：签约支付完成后，省青客服会为您打理一切，您只需耐心等待出团通知，即可开心出游。
&nbsp;
在线支付
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;','交通：空调旅游车或车站班车（根据人数安排相应车型） 
住宿：当地相应酒店住宿
门票：西昌卫星基地门票90元/人
导游：若参团人数为11人以上，则含当地持证中文导游 ','','','685','10','780','0','2','10','0','1','156','142','1408505587','1408505587',' ','用餐：全程餐费
导游：若人数不足11人，则不含导游，司机兼导游
其他：一切自费项目和个人消费，以上&ldquo;费用包含&rdquo;中未注明的项目','','9999','0','#3366CC','/uploads/main/allimg/20140515/20140515162805.jpg','0','','9999','年龄2~12周岁之间（含2周岁，不含12周岁），不占床位，含旅游车位费用，其余费用自理。','36,12','','','84,86','98%','100','0','','成都—雅安—汉源—石棉—冕宁—西昌||||4||我的测试住宿||‍‍‍1123123‍‍‍||||||||||||, 0||||||||12312312||||||||||||','2','成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游成都—卫星基地、泸山、邛海汽车往返二日游','1','/uploads/main/allimg/20140515/20140515162747.jpg||1,/uploads/main/litimg/20140819/20140819163518.jpg||2,/uploads/main/litimg/20140819/2014081916351850.jpg||3','0','','','','0','0','0','0','1','3','line_new/line_show.htm','1,2,3','6'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(146): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#5 [internal function]: Controller_Line->action_ajax_clone_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 11:37:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'lineid' in 'field list' [ INSERT INTO sline_line (`lineid`,`day`,`title`,`breakfirsthas`,`breakfirst`,`transport`,`hotel`,`jieshao`,`lunchhas`,`lunch`,`supperhas`,`supper`)VALUES ( '6208','1','','0','','','','武侯祠是一个很好的地方,还有一个西必洛猿人保护区','0','','0',''); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 11:37:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'lineid' in 'field list' [ INSERT INTO sline_line (`lineid`,`day`,`title`,`breakfirsthas`,`breakfirst`,`transport`,`hotel`,`jieshao`,`lunchhas`,`lunch`,`supperhas`,`supper`)VALUES ( '6208','1','','0','','','','武侯祠是一个很好的地方,还有一个西必洛猿人保护区','0','','0',''); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sli...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1064): Kohana_Database_Query->execute()
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1092): Kohana_ORM->get_sql('INSERT INTO sli...', 2)
#3 D:\web\backcms\admin\application\classes\model\line.php(222): Kohana_ORM->query('INSERT INTO sli...', 2)
#4 D:\web\backcms\admin\application\classes\model\line.php(150): Model_Line->cloneJieShao('6007', 6208)
#5 D:\web\backcms\admin\application\classes\controller\line.php(1035): Model_Line->cloneLine('6007', '1')
#6 [internal function]: Controller_Line->action_ajax_clone_line()
#7 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#11 {main}
2014-08-20 13:43:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:43:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Suit', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1043): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\controller\line.php(100): Kohana_ORM->get_all()
#5 [internal function]: Controller_Line->action_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 13:44:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:44:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Suit', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1043): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\controller\line.php(100): Kohana_ORM->get_all()
#5 [internal function]: Controller_Line->action_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 13:44:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:44:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Suit', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1043): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\controller\line.php(100): Kohana_ORM->get_all()
#5 [internal function]: Controller_Line->action_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 13:47:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:47:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Suit', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1043): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\controller\line.php(100): Kohana_ORM->get_all()
#5 [internal function]: Controller_Line->action_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 13:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 13:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 13:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 13:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 13:52:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6 LIMIT 1' at line 1 [ SELECT `suplliername,linkman,qq,address,mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:52:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6 LIMIT 1' at line 1 [ SELECT `suplliername,linkman,qq,address,mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `supllie...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\controller\line.php(92): Kohana_ORM->find()
#4 [internal function]: Controller_Line->action_line()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-20 13:56:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6 LIMIT 1' at line 1 [ SELECT `suplliername` AS `linkman`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:56:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6 LIMIT 1' at line 1 [ SELECT `suplliername` AS `linkman`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `supllie...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\controller\line.php(92): Kohana_ORM->find()
#4 [internal function]: Controller_Line->action_line()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-20 13:59:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6'' LIMIT 1' at line 1 [ SELECT `suplliername`, `linkman`, `qq`, `address`, `mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6'' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 13:59:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6'' LIMIT 1' at line 1 [ SELECT `suplliername`, `linkman`, `qq`, `address`, `mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6'' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `supllie...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\controller\line.php(92): Kohana_ORM->find()
#4 [internal function]: Controller_Line->action_line()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-20 14:00:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'suplliername' in 'field list' [ SELECT `suplliername`, `linkman`, `qq`, `address`, `mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 14:00:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'suplliername' in 'field list' [ SELECT `suplliername`, `linkman`, `qq`, `address`, `mobile`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `supllie...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\controller\line.php(92): Kohana_ORM->find()
#4 [internal function]: Controller_Line->action_line()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-20 14:05:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'suplliername' in 'field list' [ SELECT `suplliername`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 14:05:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'suplliername' in 'field list' [ SELECT `suplliername`, `sline_supplier`.`id` AS `id`, `sline_supplier`.`suppliername` AS `suppliername`, `sline_supplier`.`linkman` AS `linkman`, `sline_supplier`.`telephone` AS `telephone`, `sline_supplier`.`mobile` AS `mobile`, `sline_supplier`.`fax` AS `fax`, `sline_supplier`.`address` AS `address`, `sline_supplier`.`litpic` AS `litpic`, `sline_supplier`.`qq` AS `qq`, `sline_supplier`.`addtime` AS `addtime`, `sline_supplier`.`modtime` AS `modtime` FROM `sline_supplier` AS `sline_supplier` WHERE id='6' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `supllie...', false, Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1160): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1008): Kohana_ORM->_load_result(false)
#3 D:\web\backcms\admin\application\classes\controller\line.php(92): Kohana_ORM->find()
#4 [internal function]: Controller_Line->action_line()
#5 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#9 {main}
2014-08-20 14:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 14:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 14:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 14:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 14:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 14:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 14:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 15:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 15:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 15:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 15:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 16:05:30 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete line_jieshao model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1528 ]
2014-08-20 16:05:30 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete line_jieshao model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1528 ]
--
#0 D:\web\backcms\admin\application\classes\controller\line.php(217): Kohana_ORM->delete()
#1 [internal function]: Controller_Line->action_line()
#2 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#3 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#5 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#6 {main}
2014-08-20 16:10:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:10:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `sline_line_suit`.`id` AS `id`, `sline_line_suit`.`lineid` AS `lineid`, `sline_line_suit`.`suitname` AS `suitname`, `sline_line_suit`.`description` AS `description`, `sline_line_suit`.`displayorder` AS `displayorder`, `sline_line_suit`.`jifenbook` AS `jifenbook`, `sline_line_suit`.`jifentprice` AS `jifentprice`, `sline_line_suit`.`jifencomment` AS `jifencomment`, `sline_line_suit`.`propgroup` AS `propgroup` FROM `sline_line_suit` AS `sline_line_suit` WHERE lineid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Suit', Array)
#1 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\backcms\admin\modules\orm\classes\Kohana\ORM.php(1033): Kohana_ORM->_load_result(true)
#3 D:\web\backcms\admin\application\classes\model\line.php(10): Kohana_ORM->find_all()
#4 D:\web\backcms\admin\application\classes\controller\line.php(216): Model_Line->deleteClear()
#5 [internal function]: Controller_Line->action_line()
#6 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#7 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#10 {main}
2014-08-20 16:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 16:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 16:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 16:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 16:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 16:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 16:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 16:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 16:38:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:38:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\hotel.php(63): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Hotel->action_hotel()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-20 16:38:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:38:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\hotel.php(63): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Hotel->action_hotel()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-20 16:38:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:38:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and (a.hotelname like '%419%' or a.id like '%419%') and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\hotel.php(63): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Hotel->action_hotel()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-20 16:38:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:38:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\hotel.php(63): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Hotel->action_hotel()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-20 16:38:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
2014-08-20 16:38:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select count(*) as num from sline_hotel a where a.id is not null and a.webid= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ]
--
#0 D:\web\backcms\admin\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 D:\web\backcms\admin\application\classes\controller\hotel.php(63): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Hotel->action_hotel()
#3 D:\web\backcms\admin\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#4 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#7 {main}
2014-08-20 16:47:28 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:28 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 16:47:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 16:47:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 16:47:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 16:47:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 16:47:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 16:47:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:35 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:35 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:36 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:36 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:39 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:39 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:43 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:43 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:45 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:45 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:48 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:48 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:14:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:14:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 17:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 17:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 17:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 17:15:36 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:15:36 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:16:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:16:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:17:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
2014-08-20 17:17:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function isNum() ~ APPPATH\classes\common.php [ 429 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-20 17:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 17:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 17:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 17:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/sea.js.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}
2014-08-20 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-08-20 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/artDialog/lib/jquery-1.10.2.min.map was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\backcms\admin\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\backcms\admin\system\classes\kohana\request.php(1156): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\backcms\admin\index.php(127): Kohana_Request->execute()
#3 {main}