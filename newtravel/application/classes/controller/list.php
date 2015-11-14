<?php defined('SYSPATH') or die('No direct script access.');

class Controller_list extends Stourweb_Controller
{


    //导出
    public function action_export_lineOrder()
    {
        $keyword= Arr::get($_GET, 'keyword');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="线路订单.csv"');
        header('Cache-Control: max-age=0');

        $w = "where a.typeid = 1 ";
        if(!empty($keyword))
        {
            $w .=" and (a.ordersn like '%{$keyword}%' or a.linkman like '%{$keyword}%' or a.linktel like '%{$keyword}%')";
        }
        $order='order by a.addtime desc';
        $sql="select a.*  from sline_member_order as a $w $order";
        $stmt = DB::query(Database::SELECT, $sql)->execute()->as_array();
        // 打开PHP文件句柄，php://output 表示直接输出到浏览器
        $fp = fopen('php://output', 'a');
        // 输出Excel列名信息
        $head = array('订单号', '产品名称','联系人','联系电话', '申请日期', '预订数量', '价格', '订单状态');
        foreach ($head as $i => $v) {
            // CSV的Excel支持GBK编码，一定要转换，否则乱码
            $head[$i] = iconv('utf-8', 'gbk', $v);
        }

        // 将数据通过fputcsv写到文件句柄
        fputcsv($fp, $head);

        // 逐行取出数据，不浪费内存
        foreach ($stmt as $k => $v) {
            $row[0] = iconv('utf-8', 'gbk', ' ' + $v['ordersn']);
            $row[1] = iconv('utf-8', 'gbk', $v['productname']);
            $row[2] = iconv('utf-8', 'gbk', $v['linkman']);
            $row[3] = iconv('utf-8', 'gbk', $v['linktel']);
            $row[4] = iconv('utf-8', 'gbk', $this->formatDate($v['addtime']));
            $row[5] = iconv('utf-8', 'gbk', $v['dingnum'] + $v['childnum'] + $v['oldnum']);
            $row[6] = iconv('utf-8', 'gbk', $v['dingnum'] * $v['price'] + $v['childprice'] + $v['oldprice']);
            $row[7] = iconv('utf-8', 'gbk', $this->getStatus($v['status']));
            fputcsv($fp, $row);
        }
    }

    public function getStatus($status)
    {
        $realStatus = "";
        if ($status == 0) {
            $realStatus = "未处理";
        } elseif ($status == 1) {
            $realStatus = "处理中";
        } elseif ($status == 2) {
            $realStatus = "交易成功";
        } elseif ($status ==3) {
            $realStatus = "取消订单";
        }
        return $realStatus;
    }

    public function formatDate($date)
    {
        if ($date == null) {
            return;
        }
        return date('Y-m-d', $date);
    }

}