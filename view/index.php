<?php
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    // $obj->openHTML();

?>
    <center>
	<span id="breakline" style="display: none"><br></span>
	<img src="img/banner.jpg" id="bannerimg"  />
	</center>
<?php 

$obj->openMain();
?>

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">Computer Science and Engineering<br><small class="text-muted">Intro</small></h1><!-- 
                        <h5>Written by <a href="">Name</a>, 30.04.2016</h5> -->

                        <p>
                        	A journey to the global academic summit that touches every aspect of national life in its wake is the primary goal of the department. The department came into existence in 2008 with miniscule faculty strength and minute undergraduate student body. This inadequacy was no deterrent to its bold decision to start the doctoral program right away.
                        </p>

                        <p>
                        	The department has not looked back since then. It has witnessed a manifold raise in the size of the vibrant student body. Presently, all efforts are geared towards making this the first choice of aspiring undergraduates. This is being groomed to be the favored destination for research scholars brimming with ideas. Faculty strength is all set to multiply many times over with the planned addition of young and dynamic persons flashing enviable academic and research records.
                        </p>
                        <p>
                        	The department boasts of generously equipped teaching and research laboratories. Doctoral candidates are liberally supported either by scholarships or by sponsored fellowships. 
                        </p>
                        <p>
                        	Sponsored research and developmental activities add muscle to the buzzing academics.
                        </p>
                        <p>
                        	Future beckons this young department.
                        </p>

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
