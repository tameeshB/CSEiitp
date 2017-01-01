<?php 
//aftersbopen
?>
<script>
$(document).ready(function(){
     $('#loginblock input').keypress(function(e){
      if(e.keyCode==13)
      $('.loginbtn').click();
    });
    $(".loginbtn").click(function(){
        $("#loadgif").fadeIn();
        $(".loginbtn").fadeOut();
        var usrname=$(".unameval").val();
        var pswd=$(".pswdval").val();
        if (usrname=='' || usrname==null){
            $("#loadgif").fadeOut();
            $(".loginbtn").fadeIn();
        } else if (pswd=='' || pswd ==null){
            $("#loadgif").fadeOut();
            $(".loginbtn").fadeIn();
        }else{
        console.log("Request Sent;");
        console.log("Request : "+ usrname+";");
        $.post("api/login",
                            {                    
                            usrname: usrname,
                            pswd: pswd
                            },
                            function(data, status){
                            console.log("Response");
                            console.log("Data: " + data + "\nStatus: " + status);
                                if(status=='success'){//$("#myloader").fadeOut();
                                    $("#loadgif").fadeOut();
                                    $(".loginbtn").fadeIn();
                                    console.log(data);

                                    if(data[0]==1){
                                        $("#loginblock").fadeOut(400);
                                        $("#loginblock").delay(700).html(data[1]);
                                        $("#loginblock").fadeIn("fast");
                                    
                                    }else{
                                        $("#error").html('<center>'+data[1]+'</center>');
                                    }
     
                                }else{
                                    $("#loadgif").fadeOut();
                                    $(".loginbtn").fadeIn();
                                    $("#error").html('An error occured.<br> Please try again.');
                                    console.log("Failed "+data);

                                }
                        }
        ,"json");}
    });
});
</script>
                    <div class="widget-wrapper">
                       <!--  <h4>Login:</h4>
                        <br> -->
                        <div class="card">
                            <div class="card-block" id="loginblock">

                                <?php 
                                require_once('api/api.php');
                                $people=new peopleAPI;
                                if($people->checkLogin()){
                                    $expstr= explode(" ", $people->getfield("name","uid",$_SESSION['uid'])); 
                                    echo '<h2>Welcome, '.$expstr[0].'!</h2><br><a href=dashboard>Your Dashboard</a><br>
                                    <a href="view/logout.php?id='.$_SESSION["id"].'">Logout</a>';
                                } else {
                                    echo '<p><strong>IITP CSE login</strong></p>
                                <span id="error" style="color:red;padding:10px"></span>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="unameval form-control">
                                    <label for="form1">Username</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="password" id="form2" class="pswdval form-control">
                                    <label for="form2">*****</label>
                                </div>
                                
                                <button class="btn btn-primary loginbtn">Submit</button>';
                                }
                                
                                ?>
                            </div>
                            <img id="loadgif" src="img/lightbox/preloader.gif" style="display:none">
                        </div>
                    </div>
