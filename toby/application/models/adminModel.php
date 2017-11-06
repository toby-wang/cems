<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class adminModel extends model
{
	public $table = 'user';
	public function get_teacher($username)
	{
		$result = $this->get($this->table,'*',array(
			'name'=>$username,
			'type'=>0
		));
		return $result;
	}
	public function teacher_list()
	{
		$result = $this->select($this->table, "*" , [
    		"type" => 0
		]);
		return $result;
	}
	public function teacher_add($data)
	{
		$result = $this->insert($this->table,$data);
		return $result;
	}
	public function teacher_delete($user)
	{
		$result = $this->delete($this->table,array(
			'type'=>"0",
			'name'=>$user
		));
		return $result;
	}
	public function pwd_change($data,$user)
	{
		$this->update($this->table,$data,$user);
	}
}