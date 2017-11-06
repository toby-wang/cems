<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class articleModel extends model
{
	public $table = 'article';
	public function lists()
	{
		$result = $this->select($this->table,'*');
		return $result;
	}
	public function delete1($id)
	{
		$result = $this->delete($this->table,array(
			'title'=>$id
		));
	}
}