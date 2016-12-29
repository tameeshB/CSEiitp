<?php
// ini_set( "display_errors", 0); 
/**
* New request lands in this class. After that it is routed accordingly to the respective controller.
* Also provides basic functions for loading models.
* Also provides basic methods for HTTP responses and redirects.
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
preg_match('@(.*)index.php(.*)$@', $_SERVER['PHP_SELF'], $mat );
$base = '@^'. $mat[1] ;

if (preg_match($base . '$@', $url, $match)) {
	require ('view/index.php');
} elseif (preg_match($base . 'updates?$@', $url, $match)) {
	require ('view/updates.php');
} else {
	http_response_code(404);
	die('invalid url ' . $url);
}


?>
