<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class RoommanageAction extends CommonUserAction 
{
    public function index()
    {
        
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

        if(!isset($_POST['find_text'])||!isset($_POST['inline-radios'])){
            $host=-1;
        }
        else{
            $host=$_POST['find_text'];
            $host = (string)$host; 
            $choose=$_POST['inline-radios'];
        }
        if($host==-1||$host=='')
            $this->ps=M()->query("select * from house ;");
        else if($choose==1){ 
            $this->ps=M()->query("select * from house where house_id ="."'$host'".";");
        }
        else if($choose==2)
            $this->ps=M()->query("select * from house where  house_name ="."'$host'".";");
        else if($choose==3)
            $this->ps=M()->query("select * from house where  house_tips ="."'$host'".";");
        $this->display();      
    }
    public function update()
    {
        $tips=I('p_tips');
        $name=I('p_name');
        $id=I('p_id');
        if($id==""){
            $todo=M()->execute("insert into house values(NULL,'%s','%s');",$name,$tips);
            if($todo){
                $data['status']=1;
            }
            else{
                $data['status']=0;
            }
        }
        else{
            $todo1=M()->execute("delete from house where house_id=%d;",$id);
            if($todo1){
                $todo2=M()->execute("insert into house values(%d,'%s','%s');",$id,$name,$tips);
                if($todo2){
                     $data['status']=1;
                }
                else{
                     $data['status']=0;
                }
            }
            else{
                $data['status']=0;
            } 
        }
        $this->ajaxReturn($data,'json');
    }
    public function delete()
    {    
        $id=I('p_id');
        $todo=M()->execute("delete from house where house_id=%d;",$id);
        if($todo){
            $data['status']=1;
        }
        else{
            $data['status']=0;
        }
        $this->ajaxReturn($data,'json'); 
    }
}
?>