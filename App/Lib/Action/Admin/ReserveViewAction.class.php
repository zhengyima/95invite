<?php
/**
 * 会议室预约情况控制器
 * by mzy
 */
class ReserveViewAction extends CommonAdminAction 
{
    public function index()
    {   
        $this->result = M() -> query("select * from house_order_list,house,member,lab where house_order_list.house_id = house.house_id and house_order_list.man_id = member.man_id and member.lab_id = lab.id and pass_flag = 0;");
        $this->count = count($this->result);
        $this->time_array =array("8:00-9:30","10:00-11:30","14:00-15:30","16:00-17:30","18:00-19:30");

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
}