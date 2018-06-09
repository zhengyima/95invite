
<?php
/**
 * 登录页验证控制器
 * by mzy
 */
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action 
{
    public function index()
    {
	    //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $this->display();
    }
    public function login()
    {
        $usernumber = I('uid');
        $password = I('upw');
        $suser = M()->query("select * from member where man_id = '%s' ", $usernumber);
        if($suser){
            if($suser[0]['user_password']==$password)
			{
                if($suser[0]['ismanager'] == 0){        
                    $data['status']=1;
                    session('uid', $usernumber);
                    session('uname',$suser[0]['m_name']);
                    session('type', 'student');
                    $this->ajaxReturn($data,'json');
                }
                else{
                    $data['status']=2;
                    session('uid', $usernumber);
                    session('uname',$suser[0]['m_name']);
                    session('type', 'Admin');
                    $this->ajaxReturn($data,'json');
                }
			}
			else
			{
				$data['status']=4;
				$this->ajaxReturn($data,'json');
			}
        }
        else {
            $data['status'] = 3;
            $data['uid'] = $usernumber;
            $data['upw'] = $password;
            $data['sql'] = M()->query("select database();");
        }
        $this->ajaxReturn($data,'json');

    }
}
