<?php
namespace mvc\controller;
use mvc\libs\controller;
/**
* Controller class
*/
class index extends Controller
{


	function __construct()
	{
		parent::__construct();
		$this->view->render("header");
		$this->view->render("index");
		$this->view->render("footer");
	}

}