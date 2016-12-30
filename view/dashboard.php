<?php
    require_once ('htmlrender/htmlrender.php');
    require_once ('api/api.php');
    $pplobj=new peopleAPI;
    $loginStatus=$pplobj->checkLogin();
    if ($loginStatus===false || $loginStatus ==0){

        require("404.php");
        exit();
    }
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    
    // $obj->openHTML();
 

$obj->openMain();
?>

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">Contact<hr><small class="text-muted">Dashboard</small></h1>
                        <h1 class="h1-responsive"><small><?php echo $pplobj->getfield("name","uid",$_SESSION['uid']); ?></small></h1>
                        
                    </div>
                    <!--/.Post-->
					<hr>
                    <h1></h2>
                    

                    <hr>
                    <?php 
$obj->mainlClose();
$obj->sbopen();
$obj->loginwidget();
$obj->tickerwidget();
$obj->quicklinks();
$obj->sideclose();
$obj->footer();




                    ?>
