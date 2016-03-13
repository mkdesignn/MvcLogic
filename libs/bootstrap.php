<?php

namespace mvc\libs;

use mvc\controller;

/**
* Boostrap class
*/
class bootstrap
{

	/**
	 *
     */
	function __construct()
	{
		$url = "";
		//check if the url is set
		if(!empty($_GET["url"])) {

			$url = $_GET["url"];
			$url = explode('/', $url);

			if(file_exists('controller/'.$url[0].'.php')){
				$class = 'mvc\\controller\\'.$url[0];
				$controller = new $class();
			}
			else{
				$error = new \mvc\controller\error();
				return false;
			}
		}else{
			// index page 
			$controller = new \mvc\controller\index();
			return false;
		}

		// Access the method
		if(isset($url[1])) {
			echo "<br/>";
			if(method_exists($controller, $url[1])) {
				// check if the are any argument
				$controller->{$url[1]}();	
			}else{
				echo "this method '{$url[1]}' is not defiend yet";
			}
		}
	}
}
