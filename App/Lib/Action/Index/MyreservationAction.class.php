<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class MyreservationAction extends CommonUserAction 
{
    public function index()
    {
        
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $usernumber = session('uid');
       // $usernumber='001';
        $this->kind="会议室";
		$this->query= M() -> query("select * from house,house_order_list,time_list where time_list.tno=house_order_list.use_time and house.house_id=house_order_list.house_id and house_order_list.man_id='%s'",$usernumber );
		
		//$this->count = M()->num_rows($query);
		$this->pflag =array("待审批","未通过","已通过");
		$this->display(); 
    }
}
?>