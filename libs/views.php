<?php
namespace mvc\libs;
/**
* Views Class
*/
class views
{

	public function render($name){

		require "views/".$name.'.php';
	}
}