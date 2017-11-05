<?php
namespace application\controllers;
use core\lib\model;
use application\models\articleModel;
class admin extends \core\toby
{
	public function admin_index()
	{
		//if ($_POST["radio"]=="admin") {
		$this->display('admin/admin_index.php');
		//}else{
		//	echo 1;
		//}
		// $data='hello world11222211';
		// $this->assign('data',$data);
		// $this->display('test.html');
	}
	public function admin_intro()
	{
		$this->display('admin/admin_intro.php');
	}
	public function admin_teacher_add()
	{
		$this->display('admin/admin_teacher_add.php');
	}
	public function admin_pwd_change()
	{
		$this->display('admin/admin_pwd_change.php');
	}
	public function admin_teacher_delete()
	{
		$this->display('admin/admin_teacher_delete.php');
	}
	public function admin_teacher_all()
	{
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



