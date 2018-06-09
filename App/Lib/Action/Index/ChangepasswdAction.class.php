<?php
class ChangepasswdAction extends CommonUserAction
{
    public function index()
    {
       /* $this->man_id=$_GET['id1'];
        $this->name=$_GET['id2'];
        $this->old_passwd=$_GET['id3'];
        $this->new_passwd1=$_GET['id4'];
        $this->new_passwd2=$_GET['id5'];*/
        $this->uid = session('uid');
        $this->uname = session('uname');        
        $this->display();
    }
    public function changepwd()
    {
        $usernumber = session('uid');
        $old_pwd=I('old_pwd');
        $new_pwd=I('new_pwd');
        $user_pwd=M()->query("select user_password from member where man_id='%s'",$usernumber);
        if($user_pwd[0]['user_password']==$old_pwd)
        {
            $todo=M()->execute("update member set user_password='%s' where man_id='%s'",$new_pwd,$usernumber);
            if($todo)
                $data['status']=1;
            else
                $data['status']=0;
        }
        else
            $data['status']=2;
        $this->ajaxReturn($data,'json');
    }
}
?>
