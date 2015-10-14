<?php

require_once('api/quickpay_service.php');
require  dirname(__FILE__).'/../include/common.inc.php';
try {
    $response = new quickpay_service($_POST, quickpay_conf::RESPONSE);
    if ($response->get('respCode') != quickpay_service::RESP_SUCCESS) {
        $err = sprintf("Error: %d => %s", $response->get('respCode'), $response->get('respMsg'));
        throw new Exception($err);
    }

    $arr_ret = $response->get_args();

    //更新数据库，将交易状态设置为已付款
    //注意保存qid，以便调用后台接口进行退货/消费撤销

    //以下仅用于测试
    file_put_contents('notify.txt', var_export($arr_ret, true));
    $out_trade_no = $arr_ret['orderNumber'];//订单号
    if(substr($out_trade_no,0,2)=='dz')
    {
        $updatesql="update sline_dzorder set status=2 where ordersn='{$out_trade_no}'";
    }
    else
    {
        $updatesql="update sline_member_order set status=2 where ordersn='{$out_trade_no}'"; //付款标志置为1,交易成功
        $dsql->ExecuteNoneQuery($updatesql);
    }



}
catch(Exception $exp) {
    //后台通知出错
    file_put_contents('notify.txt', var_export($exp, true));
}

?>
