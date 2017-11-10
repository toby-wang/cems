<?php 
namespace application\models;
use core\lib\model;
/**
* 
*/
class loginModel extends model
{
	public $table = 'user';
	public function getUser($username)
	{
		$result = $this->get($this->table,'*',array(
			'name'=>$username
		));
		return $result;
	}
}