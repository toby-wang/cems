<?php
namespace application\controllers;
use core\lib\model;
use application\models\adminModel;
class admin extends \core\toby
{
	public function admin_index()
	{
		$this->display('admin/admin_index.php');
	}
	public function admin_intro()
	{
		$this->display('admin/admin_intro.php');
	}
	public function admin_teacher_add()
	{
		$this->display('admin/admin_teacher_add.php');
	}
	public function add_cate()
	{
		$model = new adminModel();
		$data = array(
        "name" => $_POST['name'],
        "password" => $_POST['psw'],
        "type" => $_POST['type']
		);
		if ($model->teacher_add($data)) {
			echo "<script>alert(\"添加成功！！！\");history.go(-1)</script>";
		}else{
			echo "<script>alert(\"添加失败,请重新添加！\");history.go(-1)</script>";
		}
	}
	public function admin_pwd_change()
	{
		$this->display('admin/admin_pwd_change.php');
	}
	public function pwd_change()
	{
		$model = new adminModel();
		$username = $_POST['name'];
		$password = $_POST['old_psw'];
		$getdata = $model->get_teacher($username);
		if ($getdata['name']==$username&&$getdata['password']==$password)
		{
			if ($_POST['new_psw']==$_POST['new_psw1']) {
				$data=array(
					'password'=> $_POST['new_psw']
				);
				$user=array(
					'type'=>0,
					'name'=>$_POST['name']
				);
				$model->pwd_change($data,$user);	
				echo "<script>alert(\"密码修改成功!\");history.go(-1)</script>";	
			}else{
				echo "<script>alert(\"两次密码不一致，请重新输入\");history.go(-1)</script>";
			}
		}else{
			echo "<script>alert(\"用户名或原密码错误，请重新输入！\");history.go(-1)</script>";
		}	
	}
	public function admin_teacher_delete()
	{
		$this->display('admin/admin_teacher_delete.php');
	}
	public function teacher_delete()
	{
		$model = new adminModel();
		$username=$_POST['name'];
		$getdata = $model->get_teacher($username);
		if (isset($getdata['name']))
		{
			if ($model->teacher_delete($username)) {
				echo "<script>alert(\"删除成功！\");history.go(-1)</script>";
			}else{
				echo 1;
			}
		}else{
			echo "<script>alert(\"该用户不存在！\");history.go(-1)</script>";
		}		
	}
	public function admin_teacher_all()
	{
		$model = new adminModel();
		$data = $model->teacher_list();//获取数据库信息

		$this->assign('data',$data);
		$this->display('admin/admin_teacher_all.php');
	}
	public function admin_exam_deal()
	{
		$this->display('admin/admin_exam_deal.php');
	}
	public function admin_system_set()
	{
		$this->display('admin/admin_system_set.php');
	}
}



