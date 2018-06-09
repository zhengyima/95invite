<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class UserLongTimeAction extends CommonUserAction 
{
    public function index()
    {
        $this->week = array("周一","周二","周三","周四","周五","周六","周日");
        $this->pflag = array("待审批","未通过","已通过");
        $usernumber = session('uid');
        $this->backinfo=M()->query("select * from house_order_batch_list where uid='%s'",$usernumber); 
        $this->display();
    }
}
?>