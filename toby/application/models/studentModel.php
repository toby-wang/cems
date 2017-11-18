<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class studentModel extends model
{
	public $table = 'studentfile';
	public function path_add($data)
	{
		$result = $this->insert($this->table,$data);
		return $result;
	}
	public function upfile_list()
	{
		$result = $this->select($this->table, "*");
		return $result;
	}
	public function delete_file($id)
	{
		$result = $this->delete($this->table,array(
			'id'=>$id
		));
		return $result;
	}
	public function get_exam()
	{
		$result = $this->select("exam",'*');
		return $result;
	}
}