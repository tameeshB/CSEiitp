<?php
require('dbconfig.php');
session_start();
/*
*api class
* @var $_SESSION id=md5 stored;
*/
class api {
	function __construct() {
		$conn = mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE);

	if (!$conn) {
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}
	}

	public function checklogin(){
		if(isset($_SESSION['id']) && isset($_SESSION['uid'])){
			
		}
	}


	function __destruct() {
		mysqli_close($conn);
      
    }
}
?>