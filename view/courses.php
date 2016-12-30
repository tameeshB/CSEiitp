<?php
    if(substr( $_SERVER['REQUEST_URI'], -1)=="/"){
        $targeturi= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $targeturi = rtrim($targeturi, '/');
        header("Location: $targeturi");
        exit;
    }
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    // $obj->openHTML();
 

$obj->openMain();
?>
<style>
.semesterbtn{
    width:100%;
}
.semcontent{
    padding: 20px;
    width:100%;
    border:1px solid #000000;
    /*border-radius: 10px;*/
}
.semcontent h3{
    font-weight: bold;
}
.semcontent table{
    width:100%;
    background-color: #aaaaaa;
    padding :5px;
}
</style>

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">Courses<br><small class="text-muted">B.Tech</small></h1> 
                        
                        
                        <button class="semesterbtn btn btn-primary" data-toggle="collapse" data-target="#bsem2">Semester 2</button>
                        <div id="bsem2" class="collapse semcontent">
                            <h3>CS101 Introduction to Computing</h3>
                            <table>
                                <tr>
                                    <td>CS101</td>
                                    <td>Introduction to Computing</td>
                                    <td>3-0-0-6</td>
                                    <td>Pre-requisites: Nil</td>
                                </tr>
                            </table>
                        <p>Digital computer fundamentals: flowcharts, the von Neumann architecture, programs, assembly language, high level programming languages, text editors, operating systems. Imperative programming (Using C): data types, variables, operators, expressions, statements, control structures, functions, arrays and pointers, recursion, records (structures), files, input/output, some standard library functions and some elementary data structures. </p>
                        <br>
                        <p>
                            Program development: programming tools, testing and debugging.

                        </p>
                        <p>
                            <b>Texts:</b>
                            <ul>
                                <li>A. Kelley and I. Pohl, A Book on C, 4th Ed, Pearson Education, 1998. </li>
                            </ul>

                        </p>
                        <p>
                            <b>References:</b>
                            <ul type="square">
                                <li>B. W. Kernighan and D. Ritchie, The C Programming Language, 2nd Ed, Prentice Hall of India, 1988.</li>
                            </ul>
                        </p>
                        <hr>
                         <h3>CS110 Computing Laboratory</h3>
                            <table>
                                <tr>
                                    <td>CS110</td>
                                    <td>Computing Laboratory</td>
                                    <td>0-0-3-3</td>
                                    <td>Pre-requisites: Nil</td>
                                </tr>
                            </table>
                        <p>Laboratory experiments will be set in consonance with the material covered in CS 101. This will include assignments in a programming language like C.</p>
                        <br>
                        
                        <p>
                            <b>References:</b>
                            <ul type="square">
                                <li>Kernighan B., Ritchie D., The Programming Language, Prentice Hall India, 1995.</li>
                            </ul>
                        </p>
                        </div>
                        

                        <h1 class="h1-responsive"><small class="text-muted">M.Tech</small></h1>                      
                        

                        <h1 class="h1-responsive"><small class="text-muted">PhD</small></h1>
                        <!--"Read more" button-->
                        <!-- <button class="btn btn-primary">Read more</button> -->
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