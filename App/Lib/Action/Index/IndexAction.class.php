<?php

class IndexAction extends Action 
{
    public function index()
    {
        $this->display();
    }
	
	public function success()
	{
		$wno = I('wno');
		$cm = M()->query("select * from wallet_invite where wno = '%s'",$wno);
		$this->code = "";
		if($cm){
			$this->code = $cm[0]['wicode'];
		}
		$this->display();
	}



	public function address_submit()
	{
		if(I("address") == ""){
			$data['status'] = 0;
			$this->ajaxReturn($data,'json');
		}

		$wm = M()->query("select * from wallet where wno = '%s'",I('address'));
		if($wm){
			$data['status'] = 2;
			$this->ajaxReturn($data,'json');
		}
		
		
		$flag = false;
		while(!$flag){
			$rstr = str_rand();
			$cm = M()->query("select * from wallet_invite where wicode = '%s'",$rstr);
			if(!$cm){
				$flag = true;
			}
		}

		

		$im = M()->execute("insert into wallet values('%s','%s')",I('address'),$rstr);
		$im2 = M()->execute("insert into wallet_invite values('%s','%s')",I('address'),$rstr);
		if($im && $im2){
			$data['status'] = 1;
			$data['wno'] = I('address');
			$data['wicode'] = $rstr;
		}
		else{
			$data['status'] = 0;
			$data['wno'] = I('address');
			$data['wicode'] = $rstr;
		}
		$this->ajaxReturn($data,'json');
		

	}
}
