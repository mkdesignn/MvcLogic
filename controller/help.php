<?php
namespace mvc\controller;
use mvc\libs\controller;
/**
* Help class
*/
class help extends Controller
{
	
	function __construct()
	{
		echo "we are in help";
	}

	public function other(){

		echo "we are in other help";
	}
}