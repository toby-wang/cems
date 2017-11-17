<?php
namespace application\controllers;
use core\lib\model;
use application\models\teacherModel;
class teacher extends \core\toby
{
	public $model;
	function __construct() 
	{
		$this->model = new teacherModel();
	}
	public function teacher_index()
	{
		$this->display('teacher/teacher_index.php');
	}
	public function teacher_intro()
	{
		$this->display('teacher/teacher_intro.php');
	}
	public function teacher_student_add()
	{
		$this->display('teacher/teacher_student_add.php');
	}
	public function student_add()
	{
		$info="";
		$filename='./upfile/teacher/'. time() . strtolower(strstr($_FILES['file']['name'], "."));
		upfile("teacher");
		$objPHPExcel=\PHPExcel_IOFactory::load($filename);//加载文件
		foreach ($objPHPExcel->getWorksheetIterator() as $sheet) {//循环获取sheet
			foreach ($sheet->getRowIterator() as $row) {
				if ($row->getRowIndex()<2) {
					continue; 
				}
				foreach ($row->getCellIterator() as $cell) {
					$data=$cell->getValue();
					$info[$row->getRowIndex()][]=$data;	
				}
			}
		}
		$length=count($info)+2;
		for ($j=2; $j <$length; $j++) { 
			$data = array(
        		"sId" => $info[$j][0],
      			"sName" => $info[$j][1],
       	 		"examId" => $info[$j][2]
			);
			$this->model->student_add($data);
		}
		echo "<script>alert(\"导入成功！！！\");history.go(-1)</script>";
	}
	public function student_add_one()
	{
		$data = array(
        	"sId" => $_POST["sid"],
      		"sName" => $_POST["sname"]
		);
		$this->model->student_add($data);
		echo "<script>alert(\"添加成功！！！\");history.go(-1)</script>";
	}
	public function teacher_pwd_change()
	{
		$this->display('teacher/teacher_pwd_change.php');
	}
	public function teacher_exam_add()
	{
		$this->display('teacher/teacher_exam_add.php');
	}
	public function teacher_exam_list()
	{
		$this->display('teacher/teacher_exam_list.php');
	}
	public function teacher_exam_situation()
	{
		$this->display('teacher/teacher_exam_situation.php');
	}
	public function teacher_exam_edit()
	{
		$this->display('teacher/teacher_exam_edit.php');
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