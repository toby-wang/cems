<?php
namespace application\controllers;
use core\lib\model;
use application\models\articleModel;
class teacher extends \core\toby
{
	public function teacher_index()
	{
		//if ($_POST["radio"]=="teacher") {
		$this->display('teacher/teacher_index.php');
		//}else{
		//	echo 1;
		//}
		// $data='hello world11222211';
		// $this->assign('data',$data);
		// $this->display('test.html');
	}
	public function teacher_intro()
	{
		$this->display('teacher/teacher_intro.php');
	}
	public function teacher_student_add()
	{
		$this->display('teacher/teacher_student_add.php');
	}
	public function teacher_pwd_change()
	{
		$this->display('teacher/teacher_pwd_change.php');
	}
	public function teacher_exam_add()
	{
		$this->display('teacher/teacher_exam_add.php');
	}
	public function teacher_exam_situation()
	{
		$this->display('teacher/teacher_exam_situation.php');
	}
	public function teacher_student_unlock()
	{
		$this->display('teacher/teacher_student_unlock.php');
	}
	public function teacher_exam_broadcast()
	{
		$this->display('teacher/teacher_exam_broadcast.php');
	}
	public function teacher_student_check()
	{
		$this->display('teacher/teacher_student_check.php');
	}
	public function teacher_exam_end()
	{
		$this->display('teacher/teacher_exam_end.php');
	}
}