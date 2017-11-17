<?php
namespace application\controllers;
use core\lib\model;
use application\models\studentModel;
class student extends \core\toby
{
	public $model;
	function __construct() 
	{
		$this->model = new studentModel();
		session_start();
	}
	public function student_index()
	{
		$this->display('student/student_index.php');
	}
	public function student_download()
	{
		$data=$this->model->get_exam();
		$this->assign('data',$data);
		$this->display('student/student_download.php');
	}
	public function student_intro()
	{
		$this->display('student/student_intro.php');
	}
	public function student_upload_act()
	{
		$filename='./upfile/student/'. time() . strtolower(strstr($_FILES['file']['name'], "."));
		if (upfile("student")==1) {
			$data=array(
				"path"=>$filename,
				"time"=>date("y-m-d h:i:s"),
				"name"=>$_FILES['file']['name']
			);
			$this->model->path_add($data);
			echo "<script>alert(\"提交成功！！！\");history.go(-1)</script>";
		}
	}
	public function student_upload()
	{
		$data=$this->model->upfile_list();
		
		$this->assign('data',$data);
		$this->display('student/student_upload.php');
	}
	public function student_delete()
	{
		$id=$this->uri(3);
		$this->model->delete_file($id);
		echo "<script>alert(\"删除成功！！！\");history.go(-1)</script>";
	}
		
}