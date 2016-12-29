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
                        <h1 class="h1-responsive">Hi!<br><small class="text-muted">Intro</small></h1><!-- 
                        <h5>Written by <a href="">Name</a>, 30.04.2016</h5> -->

                       Hi!

                        <!--"Read more" button-->
                        <!-- <button class="btn btn-primary">Read more</button> -->
                    </div>
                    <!--/.Post-->
					<hr>
                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive"><small class="text-muted">Events &amp; News</small></h1>
                        <ul class="boxlist">
                        	<li>Event1</li>
                        	<li>Talk2</li>
                        	<li>Presentation3</li>
                        	<li>Holiday</li>
                        </ul>

                        <button class="btn btn-primary">More</button>
                    </div>
                    <hr>
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive"><small class="text-muted">Awards &amp; Recognition</small></h1>
						<ul class="boxlist">
                        	<li>Award to 1</li>
                        	<li>Award to 2</li>
                        	<li>Award to 3</li>
                        	<li>Award to 4</li>
                        </ul>

                        <button class="btn btn-primary">More</button>
                    </div>

                    

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
                    <!--Pagination
                    <nav class="text-xs-center">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    /.Pagination-->
