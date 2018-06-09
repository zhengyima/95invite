<?php

/**
 * 登录控制器
 * by mzy
 */
class OrderBatchAction extends CommonUserAction 
{
    public function index()
    {   
        //以上两行用来演示前后端交互，可以到App/Tpl/Home_index.html去看一下前端怎么拿到的数据以及遍历数据
        $this->display();
    }
    public function detail()
    {   
        $this->display();
    } 
    public function orderSubmit()
    {
        $model = new Model();
        //$dates = dp2ds(I('datestart'));
        //$datee = dp2ds(I('dateend'));
        $month = substr(I('datestart'),0,2);
        $day = substr(I('datestart'),3,2);
        $year = substr(I('datestart'),6,4);
        $date1 = $year."-".$month."-".$day;
        $month = substr(I('dateend'),0,2);
        $day = substr(I('dateend'),3,2);
        $year = substr(I('dateend'),6,4);
        $date2 = $year."-".$month."-".$day;
        $insert = $model->execute("insert into house_order_batch_list
         values(NULL,'%s','%s','%s',%d,%d,%d,'%s','%s','%s','%s',0)"
         ,session('uid'),$date1,$date2,I('weekday'),I('timestart'),I('timeend'),I('contact'),I('person'),I('reason'),I('firm'));
        if($insert){
            $data['status'] =1;
        }
        else{
            $data['status'] = 0;
        }
        $this->ajaxReturn($data,'json');
    }
}