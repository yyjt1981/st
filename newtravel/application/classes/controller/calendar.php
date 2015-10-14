<?php defined('SYSPATH') or die('No direct script access.');
/*
    * 日历显示
    * */

class Controller_Calendar extends Stourweb_Controller{

       public static $priceTableArr=array(
           '1'=>'line_suit_price',
           '2'=>'hotel_room_price',
           '3'=>'car_suit_price'

       );

	   public function action_index()
	   {
		   $typeid = $this->params['typeid'];
           $suitid = $this->params['suitid'];
           $productid = $this->params['productid'];
           $year = date("Y"); //当前月
           $month = date("m");//当前年
           $out = '';
           for($i = 1;$i<=12;$i++)
           {
               if($month == 13)
               {
                   $year=$year+1;
                   $month=1;
               }
               $priceArr = self::getSuitPriceArr($year,$month,$suitid,$typeid);


               $out.=self::myCalender($year,$month,$priceArr,$productid,$suitid);
               $month++;
           }

           $this->assign('calendar',$out);
           $this->assign('typeid',$typeid);
           $this->display('stourtravel/calendar');
	   }
    /*
     * 动态修改报价
     * */
      public function action_ajax_modprice()
      {

              $typeid = Arr::get($_POST,'typeid');
              $basicprice = Arr::get($_POST,'basicprice') ?  Arr::get($_POST,'basicprice') : 0;
              $profit = Arr::get($_POST,'profit') ? Arr::get($_POST,'profit') : 0;
              $day = Arr::get($_POST,'day');
              $suitid = Arr::get($_POST,'suitid');
              $price = (int)$basicprice+(int)$profit;

              $table = self::$priceTableArr[$typeid];


              $flag = false;

              if($typeid==1 || $typeid==3)
              {
                  $basicp_f = 'adultbasicprice';
                  $profit_f = 'adultprofit';
                  $price_f = 'adultprice';
              }
              else
              {
                  $basicp_f = 'basicprice';
                  $profit_f = 'profit';
                  $price_f = 'price';

              }

             if($price==0)
              {
                  $sql = "update sline_{$table} set $basicp_f='0'";
                  $sql.= ", $profit_f='0'";
                  $sql.= ", $price_f='0'";
                  $sql.= " where suitid='$suitid' and day='$day'";
                  $result = DB::query(Database::UPDATE,$sql)->execute();
                  if($result) $flag = true;


              }
              else
              {
                  $sql = "update sline_{$table} set basicprice='$basicprice'";
                  $sql.= ", profit='$profit'";
                  $sql.= ", $price_f='$price'";
                  $sql.= " where suitid='$suitid' and day='$day'";
                  $result = DB::query(Database::UPDATE,$sql)->execute();
                  if($result) $flag = true;

              }
              $out = array();
              if($flag)
              {
                  $out['status'] = true;
                  $out['price'] = $price;
              }
              else
              {
                  $out['status'] = false;
              }
              echo json_encode($out);
              exit;

      }
    //动态添加报价
    public function action_ajax_addprice()
    {
        $typeid = Arr::get($_POST,'typeid');
        $basicprice = Arr::get($_POST,'basicprice') ?  Arr::get($_POST,'basicprice') : 0;
        $profit = Arr::get($_POST,'profit') ? Arr::get($_POST,'profit') : 0;
        $day = Arr::get($_POST,'day');
        $suitid = Arr::get($_POST,'suitid');
        $productid = Arr::get($_POST,'productid');
        $price = (int)$basicprice+(int)$profit;

        $table = self::$priceTableArr[$typeid];
        switch($typeid)
        {
            case 1:

                $field = 'lineid,suitid,adultbasicprice,adultprofit,adultprice,day';
                break;
            case 2:
                $field = 'hotelid,suitid,basicprice,profit,price,day';
                break;
            case 3:
                $field = 'carid,suitid,adultbasicprice,adultprofit,adultprice,day';
                break;

        }


        $flag = false;
        if($price!=0)
        {
            $sql = "insert into sline_{$table} ($field) values(";
            $sql.= "'{$productid}','{$suitid}','{$basicprice}','{$profit}','{$price}','{$day}')";
            $result = DB::query(Database::INSERT,$sql)->execute();
            if($result) $flag = true;

        }

        $out = array();
        if($flag)
        {
            $out['status'] = true;
            $out['price'] = $price;
        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);
        exit;
    }


    /**
     * 生成格式化的数据
     * 用于日历中进行呈现
     * @param $arr
     */
    public function getSuitPriceArr($year,$month,$suitid,$typeid)
    {


        $start = strtotime("$year-$month-1");
        $end = strtotime("$year-$month-31");

        $table = self::$priceTableArr[$typeid];
        $arr = ORM::factory($table)->where('suitid','=',$suitid)
                                   ->and_where('day','>=',$start)
                                   ->and_where('day','<=',$end)
                                   ->get_all();

        $price = array();
        foreach($arr as $row)
        {
            if($row)
            {

                $day = $row['day'];
                $price[$day]['basicprice'] = isset($row['adultbasicprice']) ? $row['adultbasicprice'] : $row['basicprice'];
                $price[$day]['profit'] = isset($row['adultprofit']) ? $row['adultprofit'] : $row['profit'];
                $price[$day]['price'] = isset($row['adultprice']) ? $row['adultprice'] : $row['price'];
                $price[$day]['suitid'] = $suitid;

            }


        }



        return $price;
    }


    /**
     *
     * 我的日历(DateTime版本)
     * date_default_timezone_set date mktime
     * @param int $year
     * @param int $month
     * @priceArr array 成人,儿童,老人报价
     * @param string $timezone
     */


    public function myCalender($year = '', $month = '', $priceArr=NULL, $productid=null,$suitid='')
    {

        date_default_timezone_set ( 'Asia/Shanghai' );
        $year = abs ( intval ( $year ) );
        $month = abs ( intval ( $month ) );
        $tmonth = $month < 10 ? "0".$month : $month;
        $defaultYM = $year.'-'.$tmonth;
        $nowDate = new DateTime();

        if ($year <= 0)
        {
            $year = $nowDate->format( 'Y' );
        }

        if ($month <= 0 or $month > 12)
        {
            $month = $nowDate->format('m' );
        }

        //上一年
        $pretYear = $year - 1;
        //上一月
        $mpYear = $year;
        $preMonth = $month - 1;
        if ($preMonth <= 0)
        {
            $preMonth = 1;
            $mpYear = $pretYear;
        }
        $preMonth = $preMonth < 10 ? '0'.$preMonth : $preMonth;

        //下一年
        $nextYear = $year + 1;
        //下一月
        $mnYear = $year;
        $nextMonth = $month + 1;
        if ($nextMonth > 12)
        {
            $nextMonth = 1;
            $mnYear = $nextYear;
        }
        $nextMonth = $nextMonth < 10 ? '0'.$nextMonth : $nextMonth;


        //日历头
        $html = '<div class="tab">
<table width="380" border="1" style="border-collapse: collapse;">

  <tr align="center" >
    <td colspan="3" class="top_title">'.$year.'年'.$month.'月</td>

  </tr>
  <tr>
  	<td colspan="5">
		<table width="100%" border="1" height="350">
			<tr align="center">
				<td style="background-color:#DAF0DD;height:25px;">星期一</td>
				<td style="background-color:#DAF0DD;height:25px;">星期二</td>
				<td style="background-color:#DAF0DD;height:25px;">星期三</td>
				<td style="background-color:#DAF0DD;height:25px;">星期四</td>
				<td style="background-color:#DAF0DD;height:25px;">星期五</td>
				<td style="background-color:#F60;color:#fff;font-weight: bold;">星期六</td>
				<td style="background-color:#F60;color:#fff;font-weight: bold;">星期天</td>
			</tr>
';

        $currentDay = $nowDate->format('Y-m-j' );

        //当月最后一天
        $creatDate = new DateTime("$year-$nextMonth-0");
        $lastday = $creatDate->format('j');
        $creatDate = NULL;

        //循环输出天数
        $day = 1;
        $line = '';
        while ( $day <= $lastday )
        {
            $cday = $year . '-' . $month . '-' . $day;

            //当前星期几
            $creatDate = new DateTime("$year-$month-$day");
            $nowWeek = $creatDate->format('N');
            $creatDate = NULL;

            if ($day == 1)
            {
                $line = '<tr align="center">';
                $line .= str_repeat ( '<td>&nbsp;</td>', $nowWeek - 1 );
            }
            if ($cday == $currentDay)
            {
                $style = 'style="font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;color:#FF6600;line-height:22px;"';
            } else
            {
                $style = 'style=" font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;line-height:22px;"';
            }
            //判断当前的日期是否小于今天
            $defaultmktime = mktime(1,1,1,$month,$day,$year);

            $currentmktime = mktime(1,1,1,date("m"),date("j"),date("Y"));
            //echo '<hr>';
            $tday   = ($day<10) ? '0'.$day : $day;
            $cdaydate = $defaultYM . '-' . $tday;
            $cdayme = strtotime($cdaydate);
            //单价
            $dayPrice = $priceArr[$cdayme]['price'];
            //成本
            $daybasicprice = $priceArr[$cdayme]['basicprice'];
            //利润
            $dayprofitprice = $priceArr[$cdayme]['profit'];

            //suitid
            $daysuitid = $suitid;

            //定义单元格样式，高，宽
            $tdStyle   = "height='50'";
            //判断当前的日期是否小于今天
            $tdcontent = '<span class="num">'.$day.'</span>';
            if($defaultmktime>=$currentmktime)
            {


                if($dayPrice)
                {

                    $dayPriceStrs  = '¥'.$dayPrice.'<br>';
                    //$dayPriceStrs.= '成本:¥'.$daybasicprice.'<br>';
                    //$dayPriceStrs.= '利润:¥'.$dayprofitprice.'<br>';

                    $tdcontent.='<b class="yes_yd">'.$dayPriceStrs.'</b>';
                    $onclick   = 'onclick="modPrice(this)"';






                }
                else
                {
                    $dayPriceStrs  = '';
                    $tdcontent.='<b class="no_yd">'.$dayPriceStrs.'</b>';
                    $onclick = 'onclick="addPrice(this)"';

                }
                $line     .= "<td $tdStyle $onclick style='cursor:pointer;' data-price='".$dayPrice."' data-basicprice='".$daybasicprice."' data-profit='".$dayprofitprice."' data-suitid='".$daysuitid."' data-day='".$cdayme."' data-date='".$cdaydate."' data-productid='".$productid."' >".$tdcontent."</td>";
            }
            else
            {
                $dayPriceStrs  = '&nbsp;&nbsp;';
                $tdcontent.='<b class="no_yd">'.$dayPriceStrs.'</b>';
                $line     .= "<td $tdStyle >".$tdcontent."</td>";
            }



            //$line .= "<td $style>$day <div>不可订</div></td>";

            //一周结束
            if ($nowWeek == 7)
            {
                $line .= '</tr>';
                $html .= $line;
                $line = '<tr align="center">';
            }

            //全月结束
            if ($day == $lastday)
            {
                if ($nowWeek != 7)
                {
                    $line .= str_repeat ( '<td>&nbsp;</td>', 7 - $nowWeek );
                }
                $line .= '</tr>';
                $html .= $line;

                break;
            }

            $day ++;
        }

        $html .= '
		</table>
	</td>
  </tr>
</table>
</div>
';
        return $html;
    }


}