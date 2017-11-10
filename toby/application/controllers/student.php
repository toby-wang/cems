<?php
namespace application\controllers;
use core\lib\model;
use application\models\articleModel;
class student extends \core\toby
{
	public function student_index()
	{
		//if ($_POST["radio"]=="teacher") {
		$this->display('student/student_index.php');
		//}else{
		//	echo 1;
		//}
		// $data='hello world11222211';
		// $this->assign('data',$data);
		// $this->display('test.html');
	}
	public function student_download()
	{
		$this->display('student/student_download.php');
	}
	public function student_intro()
	{
		$this->display('student/student_intro.php');
	}
	public function student_upload()
	{
		$this->display('student/student_upload.php');
	}
}