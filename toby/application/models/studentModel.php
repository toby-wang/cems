<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class studentModel extends model
{
	public $table = 'student';
	public function path_add($data)
	{
		$result = $this->insert($this->table,$data);
		return $result;
	}
}