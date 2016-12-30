<?php
$dbpath =   '/var/www/html/cse/dbconfig.php';
require($dbpath);
if(session_status() == PHP_SESSION_NONE){session_start();}
date_default_timezone_set('Asia/Calcutta');
/*
*log function as error log
*/

function logmydata($logstring){
	$file = '../log_ppl.txt';
	$date=date('d_F_Y_h_i_s_A');
	$finalstring= "\n --------------\n [".$_SERVER['REMOTE_ADDR']."] \n [$date] \n  $logstring ";
	file_put_contents($file, $finalstring, FILE_APPEND | LOCK_EX);
}


$conn = mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE);

	if (!$conn) {
    	logmydata ("Error: Unable to connect to MySQL." . PHP_EOL);
    	logmydata ("Debugging errno: " . mysqli_connect_errno() . PHP_EOL);
    	logmydata ("Debugging error: " . mysqli_connect_error() . PHP_EOL);
    	exit;
	}

/*
*api class
* @var $_SESSION id=md5 stored;
*/

class peopleapi {
	// public $conn = null;
	function __construct() {
		
	}

	/**
	*Filter string for SQL Injection attack possibility
	*/
	public function SQLInjFilter(&$unfilteredString){
		// $unfilteredString;
		$unfilteredString = mb_convert_encoding($unfilteredString, 'UTF-8', 'UTF-8');
		$unfilteredString = htmlentities($unfilteredString, ENT_QUOTES, 'UTF-8');

		
	}


	/**
	*updates sessionActivity table with login info , ip and md5
	*[working]
	*/
	public function updateSessionActivity(){
		$sql = "SELECT `ip`,`ipalt` FROM `sessionActivity`  WHERE `uid`= '".$_SESSION['uid']."'";
			// global $conn;
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if(!$result || mysqli_num_rows($result)<1){//not present
            	$sqlt = "INSERT INTO `sessionActivity`(uid,idmd5,ip,lastDateTime) VALUES ('".$_SESSION['uid']."', '".$_SESSION['id']."', '".$_SERVER['REMOTE_ADDR']."', NOW())";
        	}else{//present
        		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
        			if (!isset($row['ipalt']) || $row['ipalt']==""){
        				$sqlt = "UPDATE sessionActivity SET idmd5 = '".$_SESSION['id']."' , netlogin = netlogin + 1, nethit = nethit + 1, ipalt = '".$_SERVER['REMOTE_ADDR']."' , lastDateTime = NOW() WHERE `uid` = '".$_SESSION['uid']."'";
           			} else {
           					$sqlt = "UPDATE sessionActivity SET idmd5 = '".$_SESSION['id']."' , netlogin = netlogin + 1, nethit = nethit + 1, ip = '".$_SERVER['REMOTE_ADDR']."' , lastDateTime = NOW() WHERE `uid` = '".$_SESSION['uid']."'";
        			}
        		}
        	}
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE),$sqlt);
        	if($result){}
        	// echo $sqlt;
	}

	/*
	*function updating last login for a specific md5 code
	*[working]
	*/
	public function updateLastLogin($md5id){
		$sql = "UPDATE sessionActivity SET  nethit = nethit + 1, lastDateTime = NOW() WHERE idmd5 = '$md5id'";
        $result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE),$sql);
        if($result){}
	}

	/*
	* checklogin to check logged in status of user
	* returns true if logged in else false
	*[working]
	*/
	public function checkLogin(){
		if(isset($_SESSION['id']) && isset($_SESSION['uid'])){
			$sql = "SELECT `uid`,`ip`,`ipalt` FROM `sessionActivity`  WHERE `idmd5`= '".$_SESSION['id']."'";
			// global $conn;
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if($result){
            	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                	if ($_SESSION['uid']== $row['uid'] ){
                		//if($row['ip']==$_SERVER['REMOTE_ADDR'] || $row['ipalt']==$_SERVER['REMOTE_ADDR']){ 
                		$this->updateLastLogin($_SESSION['id']);
                		return true;
                		//}
                	} else { 
                		$_SESSION['uid']=null;
                		$_SESSION['id']=null;
                		return false;
                	}
            	}
        	} else {
        		return false;
                logmydata ("Error in Query Execution");
        	}
		} else {
			return false;
		}
	}

	/**
	*@var $field pass field required from `people` condition
	*@var $sq Query
	*@var $sp Param
	*[working]
	*/
	public function getfield($field,$sq,$sp){
		$sql = "SELECT `$field` FROM `people` WHERE `$sq`= '$sp'";
			// global $conn;
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if($result){
            	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            		return $row[$field];
            	}
            } else {return false;}
	}

	/**
	*@var username and pass 
	*Function only checks for correct password
	*Function must be called from a different function where the actual 
	*[Working]
	*/
	public function checkLoginCred($username,$pass){
		if(isset($username) && isset($pass)){
			$this->SQLInjFilter($username);
			$this->SQLInjFilter($pass);
			$sql = "SELECT `password` FROM `people`  WHERE `usrname`= '".$username."'";
			// global $conn;
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if(!$result || mysqli_num_rows($result)<1){
            	return 'Unknown Username,Password combination.';
			} else { 
				while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            		if ($row['password']==$pass){
            			return true;
            		} else {
            		 return 'Unknown Username,Password combination.';
            		}
            	}
			}
		}
	}

	/**
	*method calling checkLoginCred to log in
	*/
	public function loginUsr($username,$pass){
		$resultdata = $this->checkLoginCred($username,$pass);
		if($resultdata === true || $resultdata==1){
			$_SESSION['uid']=$this->getfield("uid","usrname",$username);
			$_SESSION['id']=md5($_SESSION['uid']);
			$this->updateSessionActivity();
			return true;
		} else { return $resultdata; }

	}

	function __destruct() {
      
    }
}
$ojfsb= new peopleapi;
//Testing purposes
// echo $ojfsb->getfield("usrname","uid",$_SESSION['uid']);
// $returnval =$ojfsb->loginUsr("tameeshb","pswd");
// if ($returnval===true || $returnval==1){
	// echo "truecred";
// }else{
	// echo"notrue ".$returnval;
// }
mysqli_close($conn);

?>