<?php
namespace application\controllers;
use core\lib\model;
use application\models\studentModel;
use application\models\teacherModel;
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
		$model = new teacherModel();
		$get_exam=$model->get_exam();
		if ($get_exam[0]['IsBegin']!=1) {
			echo '<script>location.href="../";</script>';
		}else{
			$this->display('student/student_index.php');
		}
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
		$filename='./upfile/student/'.$_FILES['file']['name'];
		if (upfile("student")==1) {
			$data=array(
				"path"=>$filename,
				"time"=>date("y-m-d h:i:s"),
				"name"=>$_FILES['file']['name']
			);
			$rename=$this->model->path_add($data);
			if ($rename==0) {
				$edit_data1=array(
					"name"=>$_FILES['file']['name']
				);
				$data1=array(
					"time"=>date("y-m-d h:i:s")
				);
				$this->model->path_update($data1,$edit_data1);
			}
			$edit_data=array(
				"sName"=>$_SESSION['user']
			);
			$data=array(
				"isSubmit"=>1
			);
			$this->model->submit($data,$edit_data);
			echo "<script>alert(\"上传成功！！！\");location.replace(document.referrer)</script>";
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
		$data=$this->model->get_path($id);
		unlink($data["path"]);
		if($this->model->delete_file($id)==1){
			echo "<script>alert(\"删除成功！！！\");location.replace(document.referrer)</script>";
		}
	}
		
}