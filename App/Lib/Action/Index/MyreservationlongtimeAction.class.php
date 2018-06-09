<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class MyreservationlongtimeAction extends CommonUserAction 
{
    public function index()
    {
        
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
       // $usernumber='001';


        $this->order=M()->query("select * from house_order_batch_list,member where flag=0 and house_order_batch_list.uid=member.man_id");


        $this->kind="会议室";
		$this->query= M() -> query("select * from house,house_order_batch_list,member where house.house_id=house_order_batch_list.lno and house_order_batch_list.uid=member.man_id");
		
		//$this->count = M()->num_rows($query);
		$this->time_array =array("8:00-9:30","10:00-11:30","14:00-15:30","16:00-17:30","18:00-19:30");
		$this->pflag =array("待审批","已通过","未通过");
        $this->week =array("周一","周二","周三","周四","周五","周六","周日");
		$this->display(); 
    }
    public function accept(){

        $update=M()->execute("update house_order_batch_list set flag=1 where lno=%d",I('l_id'));
        if($update){
            $data['status']=1;
        }
        else{
            $data['status']=0;
        }
        $this->ajaxReturn($data,'json');
    }
     public function deny(){

        $update=M()->execute("update house_order_batch_list set flag=2 where lno=%d",I('l_id'));
        if($update){
            $data['status']=1;
        }
        else{
            $data['status']=0;
        }
        $this->ajaxReturn($data,'json');
    }
}
?>