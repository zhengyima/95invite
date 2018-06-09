<?php

/**
 * 登录控制器
 * by mzy full
 */
class OrderAction extends CommonAdminAction 
{
    
    public function index()
    {   
        $this->text="这是一段文本";
        $this->houseid=$_GET['houseid'];
        $this->array = ["1","2","3","4"];
        //以上两行用来演示前后端交互，可以到App/Tpl/Home_index.html去看一下前端怎么拿到的数据以及遍历数据
        $this->allhouse=M()->query("select * from house"); 
        $this->result = M() -> query("select * from house_order_list,house,member,lab where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and member.lab_id = lab.id and pass_flag = 0;");
        $this->count = count($this->result);
        //$this->time_array =array("8:00-9:30","10:00-11:30","14:00-15:30","16:00-17:30","18:00-19:30");
        $this->time_list = array("8:00","8:30","9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","13：00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00");

        if(!isset($_POST['find_text'])||!isset($_POST['inline-radios'])){
            $host=-1;
        }
        else{
            $host=$_POST['find_text'];
            $host = (string)$host;
            $choose=$_POST['inline-radios'];
        }
        if($host==-1||$host=='')
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id;");
        else if($choose==2){
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and house_order_list.house_id ="."'$host'".";");
        }
        else if($choose==3)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and house_name ="."'$host'".";");
        else if($choose==4)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and member.man_id ="."'$host'".";");
        else if($choose==5)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and m_name ="."'$host'".";");
        else if($choose==6)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and use_date ="."'$host'".";");
        else if($choose==7)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and use_time ="."'$host'".";");
        else if($choose==8)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and use_goal ="."'$host'".";");
        else if($choose==9)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and apply_dep ="."'$host'".";");
        else if($choose==10)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and pass_flag ="."'$host'".";");								
        else if($choose==1)
            $this->ps=M()->query("select * from house_order_list,house,member where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and apply_id ="."'$host'".";");				
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
        $this->date=$_GET['date'];

        $this->housename=$_GET['housename'];
        $this->time=$_GET['time'];
        $this->houseid=$_GET['houseid'];
        $this->uname = session('uname');
        $this->phone = M()->query("select telephone from teacher_info where name='%s'",$this->uname);
        $this->email = M()->query("select email from teacher_info where name='%s'",$this->uname);
        $this->display();
     

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
            $data['status']=$item;
        } 
        //$data['status']=1;
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
    public function test(){
        $this->display();
    }
}
