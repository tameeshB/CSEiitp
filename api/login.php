<?php
header('Content-type:application/json');
$arr=array();
if(session_status() == PHP_SESSION_NONE){session_start();}
require('/var/www/html/cse/api/api.php');
$people=new peopleapi;
$resultdata= $people->checkLogin();
if($resultdata== true){
	$expstr= explode(" ", $people->getfield("name","uid",$_SESSION['uid']));
	$arr[]=1;
	$arr[]= '<h2>Welcome, '.$expstr[0].'!</h2><br>
                                    <a href="view/logout.php?id='.$_SESSION["id"].'">Logout</a>';
    echo json_encode($arr);
} else {
	if (isset($_POST['usrname']) && isset($_POST['pswd'])){
	//authentication
	$phpresult = $people->login($_POST['usrname'],$_POST['pswd']);
	if($phpresult==true ){
		$arr[]=1;
		$arr[]= '<h2>Welcome, '.$expstr[0].'!</h2><br>
                                    <a href="view/logout.php?id='.$_SESSION["id"].'">Logout</a>'; 
                                    echo json_encode($arr);
	} else {
		$arr[]=-1;
		$arr[]= "Auth failed";
		echo json_encode($arr);
	}

	}else {
		$arr[]=-1;
		$arr[]= "Missing params";
		echo json_encode($arr);
	}
}

?>