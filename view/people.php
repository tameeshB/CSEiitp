<?php
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    $obj->openMain();
?>

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">Hi!<br><small class="text-muted">Intro</small></h1><!-- 
                        <h5>Written by <a href="">Name</a>, 30.04.2016</h5> -->

                       Hi!

                        <!--"Read more" button-->
                        <!-- <button class="btn btn-primary">Read more</button> -->
                    </div>
                    <!--/.Post-->
					
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