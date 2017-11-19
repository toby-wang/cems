<?php
namespace application\controllers;
use core\lib\model;
use application\models\loginModel;
use core\lib\Pagination;
class index extends \core\toby
{
	public $mem;
	function __construct() 
	{
		//初始化对象
		$this->mem = new \Memcache;
		//连接服务器
		$this->mem->connect("127.0.0.1", 11211);
	}
	public function index()
	{
		//$this->uri(3);
		//url();die;
		$this->mem->flush(); 
		$this->display('login.php');
	}
	public function login()
	{
		$username = $_POST['username'];//输入姓名
		$password = $_POST['password'];
		$model = new loginModel();
		$getstu=$model->getStudent($username);
		$getdata = $model->getUser($username);//获取数据库信息

		if ($_POST["radio"]=="admin") {
			if ($getdata['name']==$username&&$getdata['password']==$password&&$getdata['type']=="1")
			{
				$_SESSION['user']=$getdata['name'];
				$data=$_SESSION['user'];
				$this->assign('data',$data);
				$this->display('admin/admin_index.php');
			}else{
				echo "<script>alert(\"用户名或密码错误，请重新登录！\");history.go(-1)</script>";
			}
		}else if($_POST["radio"]=="teacher"){
			if ($getdata['name']==$username&&$getdata['password']==$password&&$getdata['type']=="0")
			{
				//echo "<script>alert(\"登录成功！！！\")</script>";
				$_SESSION['user']=$getdata['name'];
				$data=$_SESSION['user'];
				$this->assign('data',$data);
				$this->display('teacher/teacher_index.php');
			}else{
				echo "<script>alert(\"用户名或密码错误，请重新登录！\");history.go(-1)</script>";
			}
		}else if($_POST["radio"]=="student"){
			if ($getstu['sName']==$username&&$getstu['sPassword']==$password)
			{
				$_SESSION['user']=$getstu['sName'];
				$_SESSION['sId']=$getstu['sId'];
				$data=$_SESSION['user'];
				session_id(md5($getstu['sName']));
				session_start();
				$id=md5($getstu['sName']);
				$ip=$this->mem->get($id);
				if ($ip) {
					if ($ip==$_SERVER['REMOTE_ADDR']) {
						echo '<script>alert("本电脑已经登录此用户了,请勿重复登录！");location.href="../"</script>';
						// $this->assign('data',$data);
						// $this->display('admin/admin_index.php');
					}else{
						echo '<script>alert("这个用户已经在其他电脑上登录了！");location.href="../"</script>';
					}
				}else{
					$this->mem->set($id,$_SERVER['REMOTE_ADDR'], 0, 0);
					$this->assign('data',$data);
					$this->display('student/student_index.php');
				}
			}else{
				echo "<script>alert(\"用户名或密码错误，请重新登录！\");history.go(-1)</script>";
			}
		}
	}
	public function logout()
	{
		session_start();
		$this->mem->delete(session_id());
		session_destroy();
		echo '<script>location.href="../";</script>';
	}

	//分页类测试
	public function test(){

        /**
         * 参数
         * total 总条数
         * pageSize 每页条数
         * base_uri 基础路由
         */
        $page = new Pagination();
        $page->init(100,5,'/cems/toby/index/test');
        $index = $page->show();
        echo $index;
    }

}


