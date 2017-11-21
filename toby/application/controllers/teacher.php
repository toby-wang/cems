<?php
namespace application\controllers;
use core\lib\model;
use application\models\teacherModel;
use core\lib\Pagination;
class teacher extends \core\toby
{
	public $model;
	public $mem;
	function __construct() 
	{
		session_start();
		$this->model = new teacherModel();

		//初始化对象
		$this->mem = new \Memcache;
		//连接服务器
		$this->mem->connect("127.0.0.1", 11211);
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
	public function exam_add_cate()
	{
		$path='./upfile/teacher/'. time() . strtolower(strstr($_FILES['file']['name'], "."));
		upfile("teacher");
		$data = array(
      		"BeginTime" => $_POST["begin_time"],
      		"EndTime" => $_POST["end_time"],
      		"class" => $_POST["class"],
      		"IsAuto" => $_POST["auto"],
      		"subject" => $_POST["subject"],
      		"examnation" => $_FILES['file']['name'],
      		"path" => $path,
      		"creater" => $_POST["creater"]
		);
		//p($data);die;
		$a=$this->model->exam_add($data);
		if ($a==0) {
			echo "<script>alert(\"添加失败！！！\");history.go(-1)</script>";
		}else{
			echo "<script>alert(\"添加成功！！！\");location.href=\"../teacher/teacher_exam_list\";</script>";
		}
	}
	public function exam_delete()
	{
		$id=$this->uri(3);
		$data=$this->model->getOne($id);
		unlink($data["path"]);
		if($this->model->delete_exam($id)==1){
			echo "<script>alert(\"删除成功！！！\");location.replace(document.referrer)</script>";
		}
	}
	public function teacher_exam_list()
	{
		// $page = new Pagination();
  //       $page->init(2,1,'/cems/toby/teacher/teacher_exam_list');
  //       $index = $page->show();
        //echo $index;
		$data=$this->model->get_exam();
		foreach ($data as $k => $v) {
			if ($v["IsAuto"]==1) {
				// p($v["BeginTime"]);
				// echo "br";
				// p(date("Y-m-d H:i:s"));die;
				if ($v["BeginTime"]==date("Y-m-d H:i:s")) {
					$data=array(
						"IsBegin" => 1
					);
					$edit_data=array(
						"BeginTime" => date("Y-m-d H:i:s")
					);
					$result=$this->model->exam_edit($data,$edit_data);
					echo "<script>alert(\"考试开始！！！\");location.replace(location)</script>";
				}
			}
		}
		$this->assign('data',$data);
		$this->display('teacher/teacher_exam_list.php');
	}
	public function exam_open()
	{
		$name=$_POST['exam_name'];
		$data=array(
			"IsBegin" => 1
		);
		$edit_data=array(
			"subject" => $name
		);
		$result=$this->model->exam_edit($data,$edit_data);
		if ($result==1) {
			echo "<script>alert(\"启动成功！！！\");location.replace(document.referrer)</script>";
		}else{
			echo "<script>alert(\"该项目已启动或输入名称错误！！！\");location.replace(document.referrer)</script>";
		}
	}
	public function teacher_exam_situation()
	{
		$this->display('teacher/teacher_exam_situation.php');
	}

	public function teacher_exam_edit()
	{
		$id=$this->uri(3);
		$data=$this->model->getOne($id);
		$this->assign('data',$data);
		$this->display('teacher/teacher_exam_edit.php');
	}
	public function exam_edit_cate()
	{
		$path='./upfile/student/'. time() . strtolower(strstr($_FILES['file']['name'], "."));
		upfile("teacher");
		$data=array(
			"BeginTime" => $_POST["begin_time"],
      		"EndTime" => $_POST["end_time"],
      		"class" => $_POST["class"],
      		"IsAuto" => $_POST["auto"],
      		"subject" => $_POST["subject"],
      		"examnation" => $_FILES['file']['name'],
      		"path" => $path,
      		"creater" => $_POST["creater"]
		);
		$edit_data=array(
			"id"=>$this->uri(3)
		);	
		$a=$this->model->exam_edit($data,$edit_data);
		if ($a==0) {
			echo "<script>alert(\"修改失败！！！\");history.go(-1)</script>";
		}else{  
			echo "<script>alert(\"修改成功！！！\");location.href=\"../../teacher/teacher_exam_list\";</script>";
		}	
	}
	public function teacher_student_unlock()
	{
		$this->display('teacher/teacher_student_unlock.php');
	}
	public function search_ip()
	{
		$ip=$_POST['ip'];
		$info=$this->model->getip($ip);
		if ($info) {
			echo json_encode($info);	
		}else{
			echo "该IP不存在！！！";
		}
	}
	public function search_name()
	{
		$name=$_POST['name'];
		$info=$this->model->getname($name);
		if ($info) {
			if (is_null($info["ip"])) {
				echo "该用户未登录！！!";
			}else{
				echo json_encode($info);
			}
		}else{
			echo "该学生不存在！！！";
		}
	}
	public function teacher_exam_broadcast()
	{
		$data=$this->model->get_message();
		//p($data);die;
		$this->assign('data',$data);
		$this->display('teacher/teacher_exam_broadcast.php');
	}
	public function broadcast_add()
	{
		$data=array(
			"content"=>$_POST['content'],
			"time"=>date("y-m-d h:i:s")
		);
		$b=$this->model->message_add($data);
		if ($b==0) {
			echo "<script>alert(\"添加失败！！！\");history.go(-1)</script>";
		}else{
			echo "<script>alert(\"添加成功！！！\");location.href=\"../teacher/teacher_exam_broadcast\";</script>";
		}
	}
	public function broadcast_delete()
	{
		$id=$this->uri(3);
		$this->model->message_delete($id);
		echo "<script>location.replace(document.referrer)</script>";
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