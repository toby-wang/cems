<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class teacherModel extends model
{
	public function getUser($username)
	{
		$result = $this->get("student",'*',array(
			'name'=>$username
		));
		return $result;
	}
	public function getinfo($ip)
	{
		$result = $this->get("student",'*',array(
			'ip'=>$ip
		));
		return $result;
	}
	public function student_add($data)
	{
		$result = $this->insert("student",$data);
		return $result->rowCount();
	}
	public function exam_add($data)
	{
		$result = $this->insert("exam",$data);
		return $result->rowCount();
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
		return $result->rowCount();
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
		return $result->rowCount();
	}
	public function exam_open($data,$edit_data)
	{
		$result = $this->update("exam",$data,$edit_data);
		return $result->rowCount();
	}
	public function message_add($data)
	{
		$result = $this->insert("message",$data);
		return $result->rowCount();
	}
	public function message_delete($id)
	{
		$result = $this->delete("message",array(
			'id'=>$id
		));
		return $result->rowCount();
	}
	public function get_message()
	{
		$result = $this->select("message",'*');
		return $result;
	}
}