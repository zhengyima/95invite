<?php

/**
 * 登录控制器
 * 
 */
class OrderAction extends CommonUserAction 
{
    
    public function index()
    {   
        
        $this->text="这是一段文本";
        $this->array = ["1","2","3","4"];
        //以上两行用来演示前后端交互，可以到App/Tpl/Home_index.html去看一下前端怎么拿到的数据以及遍历数据
        $this->houseid=$_GET['houseid'];
        $this->housename=$_GET['housename'];
        $this->allhouse=M()->query("select * from house"); 
        $this->display();
    }
    public function detail()
    {   
        $this->allhouse=M()->query("select * from house");
        $this->backinfo=M()->query("select * from house_order_batch_list"); 
        $start=$_POST['time_select1'];
        $end=$_POST['time_select2'];
        $host=$_POST['select0'];
        $this->day=$_GET['date'];
       if((!$start||!$end)&&!$host){
            $this->query= M() -> query("select house_name,time from house,time_list where not EXISTS (select * from house_order_list where use_date= '%s' and house.house_id=house_order_list.house_id and time_list.tno=house_order_list.use_time)",$this->day);
        }
        else if(!$host){
            $start=$_POST['time_select1'];
            $end=$_POST['time_select2'];
            $this->query= M() -> query("select house_name,time from house,time_list where tno>%d and tno<=%d and not EXISTS (select * from house_order_list where use_date='%s' and house.house_id=house_order_list.house_id and time_list.tno=house_order_list.use_time)",$start,$end,$this->day);
        } 
        else
        {
            $start=$_POST['time_select1'];
            $end=$_POST['time_select2'];
            $host=$_POST['select0'];
            $this->query= M() -> query("select house_name,time from house,time_list where house_id = %d and tno>%d and tno<=%d and not EXISTS (select * from house_order_list where use_date='%s' and house.house_id=house_order_list.house_id and time_list.tno=house_order_list.use_time);",$host,$start,$end,$this->day);     
        }
        $this->display();
    } 

    public function form()
    {
        if($_POST['p_dep']){
            return ;
        }
        $this->date=$_GET['date'];

        $this->housename=$_GET['housename'];
        $this->time=$_GET['time'];
        $this->houseid=$_GET['houseid'];

        $this->uname = session('uname');
        $this->phone = M()->query("select telephone from teacher_info where name='%s'",$this->uname);
        $this->email = M()->query("select email from teacher_info where name='%s'",$this->uname);
   
        $time_list=explode('_', $this->time);
        $item=-1;
        $this->flag=0;
        for($i=0;$i<count($time_list)-1;$i++){

            $item=M()->query("select tno from time_list where time='%s';",$time_list[$i]);
            $house_id=M()->query("select house_id from house where house_name='%s';",$this->housename);


            $result=M()->query("select * from house_order_list where house_id=%d and use_date='%s' and use_time= %d ;",$house_id[0]['house_id'],$this->date,$item[0]['tno']);
            //$result_batch=M()->query("select * from house_order_batch_list where house_id=%d and s_time<=%d and e_time>= %d ;",$house_id[0]['house_id'],$item[0]['tno'],$item[0]['tno']);
            if(is_array($result) && count($result)>0){
                $this->flag=1;
                break;

            }
            /*else if(is_array($result_batch) && count($result_batch)>0){
                $this->flag=1;
                break;
            }*/
           
            
            //$this->ajaxReturn($data,'json');
        }  
        /*
        if($this->flag==0){
            $this->display();
        }
        else{
            $this->redirect('Index/Order/index');
        }*/
        //echo"<script>alert('test1!')</script>";
        $this->display();

        //echo "非法访问";

        
        
     

    }
    public function view()
    {
       // $data['status'] = 1;
       // $data['todo'] = I('p_date');
        //$this->ajaxReturn($data,'json');
        //$date=I('date');
        //console_log(1);
        
        
        $userid=$_SESSION['uid'];

        $time_list=explode('_',I('p_time')); 
        $item=-1;
        for($i=0;$i<count($time_list)-1;$i++){

            $item=M()->query("select tno from time_list where time='%s';",$time_list[$i]);
            $house_id=M()->query("select house_id from house where house_name='%s';",I('p_housename'));
            $todo=M()->execute("insert into house_order_list values(NULL,%d,'%s','%s',%d,'%s','%s',1,'%s','%s');",$house_id[0]['house_id'],$userid,I('p_date'),$item[0]['tno'],I('p_reason'),I('p_dep'),I('p_tel'),I('p_email'));
            // $todo=M()->execute("insert into house_order_list values(NULL,114,'001','2017-11-12','2','组会','窦老师实验室',1,'202119','873824');");

        }
        //$todo=1;
        if($todo){
               $data['status']=1; 
        }
        else{
            $data['status']=0;
        } 
        //$data['status']=1;
        //echo"<script>alert('test2!')</script>";
        $this->ajaxReturn($data,'json');
    }

    public function getBusyDay()
    {
        $shortresult = M()->query("SELECT COUNT(*),use_date FROM house_order_list group by use_date");

        /*
        $longrecords = M()->query("select * from house_order_batch_list");
        for($i=0;$i<count($longrecords);$i++){
            $datestart = $longrecords[$i]['s_date'];
            $dateend = $longrecords[$i]['e_date'];
            $weekday = $longrecords[$i]['day'];
            $weekdaystart = date("w",$datestart);
            //if($weekdaystart <= $weekday){
            //    $datestart = date('Y-m-d',strtotime((string)($datestart)+" + "+(string)($weekday-$weekdaystart)+" day"));  
            //}
            $cnt = 0;

            $days = [];
            while($datestart!=$dateend){
                $day = date("w",strtotime($datestart));

                $cnt+=1;


                array_push($days,[$datestart=>$day]);
                if($day == $weekday){
                    for($j=0;$j<count($shortresult);$j++){
                        if($shortresult[$j]['use_date'] == $datestart){
                            $shortresult[$j]['COUNT(*)'] += 1;break;
                        }
                    }

                    if($j>=count($shortresult)){
                        //$shortresult.append({"COUNT(*)":1,"use_date":$datestart});
                        $jarray = array ('COUNT(*)'=>1,'use_date'=>$datestart);
                        Array_push($shortresult,$jarray);
                        //$this->ajaxReturn($shortresult,'json');
                    }
                }
                $str1 = $datestart;
                $datestart = date('Y-m-d',strtotime($datestart."+1 day"));
            }
            
        }  */
        
        
        //$this->ajaxReturn($shortresult,'json');

        $housecount = M()->query("select count(*) from house");
        $housesize = $housecount[0]['count(*)'];

        $rel = [];

        for($i<0;$i<count($shortresult);$i++){
            //$this->ajaxReturn([$shortresult,$str1,$datestart,$cnt,$weekday,$days],'json');
            $num = $shortresult[$i]['COUNT(*)'];
           
            if($num == 27 * $housesize){

                Array_push($rel,$shortresult[$i]['use_date']);
            }
           
        }

        $events = M()->query("select house.house_name,house_order_list.use_date,time_list.time from house,house_order_list,time_list where house.house_id = house_order_list.house_id and house_order_list.use_time = time_list.tno");
        
        $this->ajaxReturn([$rel,$events],'json');

    }
/*
    public function test(){
        $this->display();
    }
*/
    public function getBusyDay1()
    {
        $houseid=I('p_houseid');
        $shortresult = M()->query("SELECT COUNT(*),use_date FROM house_order_list group by use_date where house_id=%d",$houseid);


        

        $rel = [];

        for($i<0;$i<count($shortresult);$i++){
            //$this->ajaxReturn([$shortresult,$str1,$datestart,$cnt,$weekday,$days],'json');
            $num = $shortresult[$i]['COUNT(*)'];
           
            if($num == 27 ){

                Array_push($rel,$shortresult[$i]['use_date']);
            }
           
        }

        $events = M()->query("select house_order_list.man_id,house_order_list.use_date,time_list.time,house_order_list.use_time,use_goal,apply_dep from house_order_list,time_list where house_order_list.house_id=%d and house_order_list.use_time = time_list.tno order by house_order_list.use_date asc, house_order_list.use_time asc",$houseid);
        $age=array(array("use_date"=>"","time"=>""));
        $s=explode("-",$events[0]['time'])[0];
        $e=explode("-",$events[0]['time'])[1];
        $i=1;
        $t=0;
        while($events[$i]){
           if(($events[$i]['man_id']==$events[$i-1]['man_id']&&$events[$i]['use_date']==$events[$i-1]['use_date'])&&$events[$i+1]&&$events[$i]['use_time']==$events[$i-1]['use_time']+1){
                //$age[$t]['use_date']=$events[$i]['use_date'];
                $e=explode("-",$events[$i]['time'])[1];
            }
            else{
                $age[$t]['use_date']=$events[$i-1]['use_date'];
                if(!$events[$i+1]&&($events[$i]['man_id']==$events[$i-1]['man_id']&&$events[$i]['use_date']==$events[$i-1]['use_date'])&&$events[$i]['use_time']==$events[$i-1]['use_time']+1)
                    $e=explode("-",$events[$i]['time'])[1];
                $age[$t]['time']=(string)$s."-".(string)$e;
                $age[$t]['mname'] = $events[$i-1]['apply_dep'];
                $age[$t]['goal'] = $events[$i-1]['use_goal'];
                $s=explode("-",$events[$i]['time'])[0];
                $e=explode("-",$events[$i]['time'])[1];
                $t=$t+1;
            }
            $i++;
        }
        $i=$i-1;
        if($events[$i]['man_id']!=$events[$i-1]['man_id']||$events[$i]['use_date']!=$events[$i-1]['use_date']||$events[$i]['use_time']!=$events[$i-1]['use_time']+1)
        {
            $s=explode("-",$events[$i]['time'])[0];
            $e=explode("-",$events[$i]['time'])[1];
            
            $age[$t]['use_date']=$events[$i]['use_date'];
            $age[$t]['time']=(string)$s."-".(string)$e;
            //$age[$t]['mname'] = getUserName($events[$i]['man_id']);
            $age[$t]['mname'] = $events[$i]['apply_dep'];
            $age[$t]['goal'] = $events[$i]['use_goal'];
        }
        $this->ajaxReturn([$rel,$age],'json');
      //  $this->ajaxReturn([$rel,$events],'json');

    }
}
