<?php

/**
 * 首页控制器
 * by mzy
 */
class HomeAction extends CommonUserAction 
{
    public function index()
    {   
        $this->text="这是一段文本";
        $this->array = [["1","2","3","4"],["5","6"]];
        //以上两行用来演示前后端交互，可以到App/Tpl/Home_index.html去看一下前端怎么拿到的数据以及遍历数据
        $this->display();
    }
}