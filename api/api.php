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

class peopleAPI {
	// public $conn = null;
	function __construct() {
		
	}

	/**
	*
	*Filter string for SQL Injection attack possibility
	*@todo More Work needed
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
                		return 0;
                	}
            	}
        	} else {
        		return 0;
                logmydata ("Error in Query Execution");
        	}
		} else {
			return 0;
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
	*[working]
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

	/**
	*Function newUser()
	*/
	public function newUser($usrname,$name,$pswd,$type){
		$this->SQLInjFilter($usrname);
		$this->SQLInjFilter($name);
		$this->SQLInjFilter($pswd);
		$this->SQLInjFilter($type);
		//validations
		//usrname must be same as webmailusername
		$sql = "INSERT INTO `people`(usrname,name,password,type) VALUES ('".$usrname."', '".$name."', '".$pswd."', '".$type."')";
		$link =mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE);
		$result = mysqli_query($link,$sql);
        if($result){
        	return 1;

        }else{ return mysqli_errno($link) . ": " . mysqli_error($link);}
        mysqli_close($link);
	}

	/**
	*Function to store deltas with delta indexes into DB , table: deltas
	*Later to add more delta types as application expands with other functions
	*@todo Add compatibility for other types of possibility
	*@var $deltaTitle Title of delta
	*@var $deltaType: Integer value for Delta type
	*		0:Event
	*		1:Awards & Recognition
	*@var $deltaPointer Resource locator address to redirect to
	*/
	protected function deltaStore($deltaTitle,$deltaType,$deltaPointer=null){
		//No SQLInjFilter as this function is to be called by other internal functions being triggered by admin 
		if(!isset($deltaPointer)){$deltaPointer=null;}//replace?

		$sql = "INSERT INTO `deltas`(deltaTitle,url,deltaType) VALUES ('$deltaTitle', '$deltaPointer', '$deltaType')";
		$link =mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE);
		
		$result = mysqli_query($link,$sql);
        
        if($result){
        	return 1;
        }else{
    		logmydata ("DB error storing data using deltaStore ".mysqli_errno($link) . ": " . mysqli_error($link). PHP_EOL);
         	return false;
     	}

        mysqli_close($link);
	}
	/**
	*Method returning all deltas since last delta for echoDeltaAJAX and otherwise
	*@var $deltaLast:get all deltas after this delta
	*@var $deltaType :gets deltas of specific kind.
	*		default=null :all deltas
	*/
	public function deltaGet($deltaLast,$deltaType=null){
		$sql = "SELECT `deltaTitle`,`url`,`deltaType`,`deltaIndex` FROM `deltas`  WHERE `deltaIndex`> $deltaLast ORDER BY `deltaIndex` DESC";
		
		if($deltaType){

			$sql = "SELECT `deltaTitle`,`url`,`deltaType`,`deltaIndex` FROM `deltas`  WHERE (`deltaIndex`> $deltaLast AND `deltaType` = $deltaType ) ORDER BY `deltaIndex` DESC";
		
		}
			// global $conn;
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if($result ){
        		$deltas=array();
        		$i=0;
        		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
        				$deltas[$i]['deltaIndex']=$row['deltaIndex'];
        				$deltas[$i]['deltaTitle']=$row['deltaTitle'];
        				$deltas[$i]['deltaType']=$row['deltaType'];
        				$deltas[$i++]['url']=$row['url'];
        				
        		}

        		return $deltas;	
        	} else {
    			logmydata ("DB error fetching data from deltaGet ".mysqli_errno($link) . ": " . mysqli_error($link). PHP_EOL);
    			return false;
        	}
	}

	/**
	*Method echoing for AJAX all deltas since last delta 
	*@var $deltaLast:get all deltas after this delta
	*@var $deltaType :gets deltas of specific kind.
	*		default=null :all deltas
	*/
	public function echoDeltaAJAX($deltaLast,$deltaType=null){
		$this->SQLInjFilter($deltaLast);
		$this->SQLInjFilter($deltaType);
		header('Content-type: application/json');
		$jsonEncodedDeltas = json_encode($this->deltaGet($deltaLast,$deltaType));
		echo $jsonEncodedDeltas;
	}

	/**
	*Just for test purposes
	*/
	public function dummy(){
		return $this->deltaStore("Visit Google.com",0,"http://google.com");
	}

	function __destruct() {
      
    }
}
//Testing purposes
 $ojfsb= new peopleAPI;
 // echo $ojfsb->dummy();
// echo json_encode($ojfsb->deltaGet(0)) ;
// $myvar='1 or 1=1';
// echo $ojfsb-> SQLInjFilter($myvar);
// echo $myvar;
// if ($returnval===true || $returnval==1){
	// echo "truecred";
// }else{
	// echo"notrue ".$returnval;
// }
mysqli_close($conn);

?>