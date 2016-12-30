<?php
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    // $obj->openHTML();
 

$obj->openMain();
?>

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">Contact<hr><small class="text-muted">Address</small></h1><!-- 
                        <h5>Written by <a href="">Name</a>, 30.04.2016</h5> -->
                        <p><strong>Department of Computer Science and Engineering</strong></p>
                        <p>Indian Institute of Technology Patna</p>
                        <p>Bihta - 801103, Patna, Bihar, India</p>
                        <br>
                        <h1 class="h1-responsive"><small class="text-muted">Email</small></h1>
                        <ul>
                        <li><a href="emailto:cse_off@iitp.ac.in">cse_off[AT]iitp.ac.in</a></li>
                        <br>
                        <h1 class="h1-responsive"><small class="text-muted">Phone</small></h1>
                        <li>+91 612 302 8337</li>
                    </ul>
                    </div>
                    <!--/.Post-->
					<hr>
                    
                    

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
