<?php

/**
 * @return the public path of the framework
 *
 * @param string $var
 * @return string
 */
function public_Path ($var = ''){
	$path = substr( dirname(__DIR__), strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) );
	$path = str_replace("\\", '/', $path);
	return "http://".$_SERVER["SERVER_NAME"].$path."/public/".$var;
};

/**
 * return style import file
 *
 * @param string $var
 */
function style($var = ''){
	echo "<link type='text/css' href='".$var."' rel='stylesheet'/>";
}

/**
 * return javascript import file
 *
 * @param string $var
 */
function script($var = ''){
	echo "<link type='text/javascript' src='".$var."' rel='javascript'/>";
}

