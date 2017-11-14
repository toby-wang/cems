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
		$this->display('student/student_download.php');
	}
	public function student_intro()
	{
		$this->display('student/student_intro.php');
	}
	public function student_upload_act()
	{
		p(date('y-m-d h:i:s',time()));die;
		$filename='./upfile/student/'. time() . strtolower(strstr($_FILES['file']['name'], "."));
		upfile("student");
		$data=array(
			"path"=>$filename,
			"time"=>date('y-m-d h:i:s',time())
		);
		$this->model->path_add($data);
		echo "<script>alert(\"提交成功！！！\");history.go(-1)</script>";
	}
	public function student_upload()
	{
		//p($_SESSION);die;
		//$this->assign('data',$data);
		$this->display('student/student_upload.php');
	}
}