<?php
// ini_set( "display_errors", 0); 
/**
* New request lands in this class. After that it is routed accordingly to the respective controller.
* 
*/
class Routing
{

	function __construct()
	{
		return null;
	}

	public function Redirect($url)
	{
		return null;
	}

}

$url = $_SERVER['REQUEST_URI'];
// $url = rtrim($url,"/");
preg_match('@(.*)index.php(.*)$@', $_SERVER['PHP_SELF'], $mat );
$base = '@^'. $mat[1] ;

if (preg_match($base . '$@', $url, $match)) {
	require ('view/index.php');
} elseif (preg_match($base . 'index.php?$@', $url, $match)) {
	require ('view/index.php');
} elseif (preg_match($base . 'hod-message?$@', $url, $match)) {
	require ('view/hod.php');
} elseif (preg_match($base . 'people?$@', $url, $match)) {
	require ('view/people.php');
} elseif (preg_match($base . 'courses?$@', $url, $match)) {
	require ('view/courses.php');
} elseif (preg_match($base . 'research?$@', $url, $match)) {
	require ('view/research.php');
} elseif (preg_match($base . 'projects?$@', $url, $match)) {
	require ('view/projects.php');
} elseif (preg_match($base . 'contact-us?$@', $url, $match)) {
	require ('view/contact.php');
} elseif (preg_match($base . 'api/login?$@', $url, $match)) {
	require ('api/login.php');
} else {
	http_response_code(404);
	require ('404.php');
	// die('invalid url ' . $url);
	die();
}


?>
