<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class ReserveBatchViewAction extends CommonAdminAction 
{
    public function index()
    {
        $this->week = array("周日","周一","周二","周三","周四","周五","周六");
        $this->time_list = array("8:00","8:30","9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","13：00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00");
        $this->pflag = array("待审批","未通过","已通过");

        $this->allhouse=M()->query("select * from house");

        $this->backinfo=M()->query("select * from house_order_batch_list,member,house where man_id=uid and house.house_id=house_order_batch_list.house_id"); 
        $this->display();
    }
    public function insert_date()
    {
        $uid=I('p_number');
        $house_id=I('p_housename');
        $s_date=I('p_sdate');
        $e_date=I('p_edate');
        $day=I('p_weekday');
        $s_time=I('p_stime');
        $e_time=I('p_etime');
        $telno=I('p_tel');
        $email=I('p_email');
        $reason=I('p_reason');
        //$firm=I('p_firm');
        $date=$s_date;
        $date1=$s_date;
        //$data['status']=1;
        $month1 = date('m',strtotime($s_date));
        $month2 = date("m", strtotime($e_date));
        $day1 = date("d", strtotime($s_date));
        $day2 = date("d", strtotime($e_date));
        $year1 = date("Y", strtotime($s_date));
        $year2 = date("Y", strtotime($e_date));
        $from = mktime(0, 0, 0, $month1, $day1, $year1);
        $to = mktime(0, 0, 0, $month2, $day2, $year2);
        $time_list = array("8:00","8:30","9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","13：00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00");
        $data['status']=1;
        if ($from >= $to) {
            $data['status']=2;
            $this->ajaxReturn($data,'json');
        } 
        if($s_time>=$e_time)
        {
            $data['status']=3;
            $this->ajaxReturn($data,'json');
        }
        /*
        $justice=M()->query("select * from member where man_id='%s'",$uid);
        if(count($justice)==0)
        {
            $data['status']=4;
            $this->ajaxReturn($data,'json');
        }*/
        while($date1!=$e_date)
        {
            $s_day = date("w",strtotime($date1));
            if($s_day == $day)
            {
                for($j=$s_time+1;$j<=$e_time;$j++)
                {
                    $find=M()->query("select * from house_order_list where house_id=%d and use_date='%s' and use_time=%d",$house_id,$date1,$j);
                    if(count($find)!=0)
                    {
                        $findtime=M()->query("select * from time_list where tno=%d",$j);
                        $data['status']=5;
                    //    $data['wrongtime']=$findtime[0]['time'];
                        $data['wrongtime']=$time_list[$j-1]."~".$time_list[$j];
                        $data['wrongdate']=$date1;
                        $this->ajaxReturn($data,'json');
                    }
                }
            }
            $date1 = date('Y-m-d',strtotime($date1."+1 day"));
        }
        $s_day = date("w",strtotime($date1));
        if($s_day == $day)
        {
            for($j=$s_time+1;$j<=$e_time;$j++)
            {
                $find=M()->query("select * from house_order_list where house_id=%d and use_date='%s' and use_time=%d",$house_id,$date1,$j);
                if(count($find)!=0)
                {
                    $findtime=M()->query("select * from time_list where tno=%d",$j);
                    $data['status']=5;
                 //   $data['wrongtime']=$findtime[0]['time'];
                    $data['wrongtime']=$j;
                    $data['wrongdate']=$date1;
                    $this->ajaxReturn($data,'json');
                }
            }
        }    
        while($date!=$e_date)
        {
            $s_day = date("w",strtotime($date));
            if($s_day == $day)
            {
                for($j=$s_time+1;$j<=$e_time;$j++)
                {
                    $todo=M()->execute("insert into house_order_list values(NULL,%d,'2015201972','%s',%d,'%s','%s',1,'%s','%s');",$house_id,$date,$j,$reason,$uid,$telno,$email); 
                    if($todo){
                        $data['status']=1; 
                    }
                    else{
                        $data['status']=0;
                        $this->ajaxReturn($data,'json');
                    } 
                }
            }
            $date = date('Y-m-d',strtotime($date."+1 day"));
        }
        $s_day = date("w",strtotime($date));
        if($s_day == $day)
        {
            for($j=$s_time+1;$j<=$e_time;$j++)
            {
                $todo=M()->execute("insert into house_order_list values(NULL,%d,'2015201972','%s',%d,'%s','%s',1,'%s','%s');",$house_id,$date,$j,$reason,$uid,NULL,NULL,NULL); 
                if($todo){
                    $data['status']=1; 
                }
                else{
                    $data['status']=0;
                    $this->ajaxReturn($data,'json');
                } 
            }
        }
        $todo=M()->execute("insert into house_order_batch_list values(NULL,'2015201972',%d,'%s','%s',%d,%d,%d,'kong','%s','%s','%s','%s',1);",$house_id,$s_date,$e_date,$day,$s_time,$e_time,$telno,$email,$reason,$uid);
        if($todo){
            $data['status']=1; 
        }
        else{
            $data['status']=0;
            $this->ajaxReturn($data,'json');
        } 
        $this->ajaxReturn($data,'json');
    }
}
?>