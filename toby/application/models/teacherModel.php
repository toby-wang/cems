<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class teacherModel extends model
{
	public $table = 'student';
	public function getUser($username)
	{
		$result = $this->get($this->table,'*',array(
			'name'=>$username
		));
		return $result;
	}
	public function student_add($data)
	{
		$result = $this->insert($this->table,$data);
		return $result;
	}
	public function exam_add($data)
	{
		$result = $this->insert("exam",$data);
		return $result;
	}
	public function get_exam()
	{
		$result = $this->select("exam",'*');
		return $result;
	}
}