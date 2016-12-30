<?php
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    // $obj->openHTML();
 

$obj->openMain();
?>
<br><br>
                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">HOD's Message<br><small class="text-muted"></small></h1>

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
