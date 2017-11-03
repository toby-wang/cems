<?php
namespace application\controllers;
use core\lib\model;
use application\models\articleModel;
class index extends \core\toby
{
	public function index()
	{
		// p('this is index!');
		// $model = new \core\lib\model();
		// $sql = "select * from article";
		// $info=$model->query($sql);

		//p($info->fetchAll());

		//$model = new articleModel();
		//$result = $model->delete1('foo');
		//dump($result);

		// $model = new model();
		// //$data = $model->select('article','*','');
		// $shuju = array(
  //       "title" => "foo1",
  //       "name" => "foo@bar.com",
  //       "time" => 25
		// );
		// $data = $model->insert("article",$shuju);
		
		//dump($result);

		//调取视图文件
		//$data='hello world1dfdf111';
		//$this->assign('data',$data);
		//$this->display('layout.html');
		
		//$this->uri(3);
		
		$this->display('login.html');


		/**
		 * 控制器以及方法路径
		 * @var [type]
		 */
		// $temp = \core\lib\conf::get('CTRL','route');
		// $temp = \core\lib\conf::get('ACTION','route');
		// p($temp);
	}
	public function test()
	{
		$data='hello world11222211';
		$this->assign('data',$data);
		$this->display('test.html');
	}
}



