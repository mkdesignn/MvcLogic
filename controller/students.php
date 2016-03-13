<?php
namespace mvc\controller;

use mvc\libs\controller;

class students extends Controller {

	function __construct()
	{
		//self::test();	
		parent::__construct();
		//$this->view->msg = "hey there this is first index page";
		$this->view->render("header");
		$this->view->render("index");
		$this->view->render("footer");
		//ini_set('error_reporting', E_ALL);
	}

	public function create(){

		echo "this is create action";
	}
}
