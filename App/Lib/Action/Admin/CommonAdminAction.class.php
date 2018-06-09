<?php

/**
 * 通用身份检验控制器(Admin)
 * 在该身份下的控制器请务必继承该类
 * by mzy
 */
class CommonAdminAction extends Action 
{
	public function _initialize()
	{
		if(!isset($_SESSION['uid']))
		{
			$this->redirect('Index/Index/index');
		}
	}
	
	/**
	 * 空模块
	 * 处理非法访问
	 */
	public function _empty(){
		
	}
}
?>