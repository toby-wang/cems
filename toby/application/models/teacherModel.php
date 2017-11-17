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
	public function delete_exam($id)
	{
		$result = $this->delete("exam",array(
			'id'=>$id
		));
		return $result;
	}
	public function getOne($id)
	{
		$result = $this->get("exam",'*',array(
			'id'=>$id
		));
		return $result;
	}
	public function exam_edit($data,$edit_data)
	{
		$result = $this->update("exam",$data,$edit_data);
		return $result;
	}
}