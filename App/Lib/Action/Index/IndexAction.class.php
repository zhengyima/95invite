<?php
/**
 * 登录页显示控制器
 * by mzy
 */
class IndexAction extends Action 
{
    public function index()
    {
        $this->display();
    }

    public function caslogin()
    {
    	$roothost = "http://10.77.110.10/ksystem/";
		//CAS Server的登陆URL
		$loginServer = "http://cas.ruc.edu.cn/cas/login";
		//CAS Server的验证URL
		$validateServer = "http://cas.ruc.edu.cn/cas/serviceValidate";

		//当前集成系统所在的服务器和端口号，服务器可以是机器名、域名或ip，建议使用域名。端口不指定的话默认是80
		//以及新增加的集成登录入口
		$myurl = $roothost."index.php/index/index/cas";

		//判断是否有验证成功后需要跳转页面，如果有，增加跳转参数
		if(isset($_REQUEST["redirectUrl"]) && !empty($_REQUEST["redirectUrl"])) {
			$myurl = $myurl."?redirectUrl=".$_REQUEST["redirectUrl"];
		}

		//判断是否已经登录
		if(isset($_REQUEST["ticket"]) && !empty($_REQUEST["ticket"])) {
			//获取登录后的返回信息
			try{
				$validateurl = $validateServer."?ticket=".$_REQUEST["ticket"]."&service=".$myurl;
				header("Content-Type:text/html;charset=utf-8");
				$validateResult = file_get_contents($validateurl);
				$validateResult = iconv("gb2312", "utf-8//IGNORE",$validateResult);
				//节点替换，去除sso:，否则解析的时候有问题
				$validateResult = preg_replace("/sso:/","",$validateResult);
				
				$validateXML = simplexml_load_string($validateResult);
				//获取验证成功节点
				$successnode = $validateXML->authenticationSuccess[0];
				if(!empty($successnode)){
					//获取用户账户
					$userid = $successnode->user;
				
					//实现集成系统的登录（需要集成系统开发人员完成）
					//............实现代码...................
					//实现登录完毕！
					
					//如果登录成功，执行下面代码，否则按集成系统业务逻辑处理
					//集成系统的首页URL
					$Rurl =  $roothost."index.php/index/index/cas";
					if(isset($_REQUEST["redirectUrl"]) && !empty($_REQUEST["redirectUrl"])) {
						$Rurl = $_REQUEST["redirectUrl"];
					}
					//重定向浏览器 
					header("Location: ".$Rurl);
					exit;
				}else{
					//重定向浏览器 
					header("Location: ".$loginServer."?service=".$myurl); 
					//确保重定向后，后续代码不会被执行 
					exit;
				}
			}catch(Exception $e){
				echo "出错了";
				echo $e-> getMessage(); 
			}
		}else{
			//重定向浏览器 
			header("Location: ".$loginServer."?service=".$myurl); 
			//确保重定向后，后续代码不会被执行 
			exit;
		}

		$this->display();
    }



    //统一认证
    public function cas()
    {
    	$roothost = "http://10.77.110.10/ksystem/";

		$validateServer = "http://cas.ruc.edu.cn/cas/serviceValidate";
    	$validateurl = $validateServer."?ticket=".I("ticket")."&service=".$roothost."index.php/index/index/cas";
		header("Content-Type:text/html;charset=utf-8");
		$validateResult = file_get_contents($validateurl);
		// $validateResult = iconv("gb2312", "utf-8//IGNORE",$validateResult);
		//节点替换，去除sso:，否则解析的时候有问题
		$validateResult = preg_replace("/sso:/","",$validateResult);
		$validateXML = simplexml_load_string($validateResult);
		//获取验证成功节点
		$successnode = $validateXML->authenticationSuccess[0];
		if(!empty($successnode)){
			//获取用户账户
			//modified by hfr at 201403112216
			$usernumber = $successnode->user."";
			$username = $successnode->attributes->attribute[4]->attributes()['value']."";
			$useremail = $successnode->attributes->attribute[1]->attributes()['value']."";
		}else{
			echo "CAS链接失败";
			exit;
		}
		
		//统一认证登录
		$susermodel = new Model();
		$suser = $susermodel->query("select * from member where man_id='". $usernumber."'");

		if(!$suser)
		{

            echo "<script>alert('该用户没有账号，请联系管理员申请账号！')</script>";
            $this->redirect('Index/Index/index');
        }
        else
		{
            
            session('uid', $usernumber);
            session('uname',$suser[0]['m_name']);
            if($suser[0]['ismanager'] == 1){
                session('type', 'Admin');
                $this->redirect('Admin/Order/index');
            }
            else{
                session('type', 'student');
                $this->redirect('Index/Order/index');
            }
		}
    }

    public function logout()
	{
		session_unset();
        session_destroy();
        session(null);
		$this->redirect('Index/Index/index');
		//header("Location: http://cas.ruc.edu.cn/cas");
	}
}
