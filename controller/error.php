<?php
namespace mvc\controller;

use mvc\libs\controller;
/**
* 
*/
class error extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		echo "this controller is not defiend";
		$this->view->msg = "this message from error";
		$this->view->render("error/index");
	}
}