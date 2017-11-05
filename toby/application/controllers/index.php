<?php
namespace application\controllers;
use core\lib\model;
use application\models\loginModel;
class index extends \core\toby
{
	public function index()
	{
		// p('this is index!');
		// $model = new \core\lib\model();
		// $sql = "select * from article";
		// $info=$model->query($sql);

		//p($info->fetchAll());

		//$model = new articleModel();
		//$result = $model->delete1('foo');
		//dump($result);

		// $model = new model();
		// //$data = $model->select('article','*','');
		// $shuju = array(
  //       "title" => "foo1",
  //       "name" => "foo@bar.com",
  //       "time" => 25
		// );
		// $data = $model->insert("article",$shuju);
		
		//dump($result);

		//调取视图文件
		//$this->assign('data',$data);
		//$this->display('layout.html');
		
		//$this->uri(3);
		//url();die;
		$this->display('login.php');
		/**
		 * 控制器以及方法路径
		 * @var [type]
		 */
		// $temp = \core\lib\conf::get('CTRL','route');
		// $temp = \core\lib\conf::get('ACTION','route');
		// p($temp);
	}
	public function login()
	{
		$username = $_POST['username'];//输入姓名
		$password = $_POST['password'];
		$model = new loginModel();
		$getdata = $model->getUser($username);//获取数据库信息

		if ($_POST["radio"]=="admin") {
			if ($getdata['name']==$username&&$getdata['password']==$password&&$getdata['type']=="1")
			{
				echo "<script>alert(\"登录成功！！！\")</script>";
				$this->display('admin/admin_index.php');
			}else{
				echo "<script>alert(\"用户名或密码错误，请重新登录！\");history.go(-1)</script>";
			}
		}else if($_POST["radio"]=="teacher"){
			if ($getdata['name']==$username&&$getdata['password']==$password&&$getdata['type']=="0")
			{
				echo "<script>alert(\"登录成功！！！\")</script>";
				$this->display('teacher/teacher_index.php');
			}else{
				echo "<script>alert(\"用户名或密码错误，请重新登录！\");history.go(-1)</script>";
			}
		}else if($_POST["radio"]=="student"){
			$this->display('teacher/student_index.php');
		}
	}
}



