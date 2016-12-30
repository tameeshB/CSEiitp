<?PHP
session_start();
if (isset($_GET['id']) && isset($_SESSION['id'])){
	if($_GET['id']==$_SESSION['id']){
	$_SESSION['id']=null;
	$_SESSION['uid']=null;
	header("Location: ../index.php");}
} else {
	echo "invalid token!";
}

?>