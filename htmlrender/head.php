<?php 
//1
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CSE IIT Patna</title>
	<meta name="theme-color" content="#0d47a1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="icon" 
      type="image/ico" 
      href="img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/mobile.css" media="only screen and (max-width: 567px)">
	<link rel="stylesheet" href="assets/css/desktop.css" media="only screen and (min-width: 567px)">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
        
        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }
        .navbar-brand{
        	text-shadow: 0 0 0 #FFFFFF;
        	opacity: 1;
        	transition: text-shadow .5s,opacity .5s;
        }
        .navbar-brand:hover{
			text-shadow: 0 0 10px #FFFFFF;
			opacity: 0.7;
        }
        .nav-link{
        	background-color: #0d47a1 ;
        	transition: background-color .5s;
        }
        .nav-link:hover{
			background-color: #52c195 !important;
        }
        #bannerimg{
			width:80%;
			box-shadow: 0 0 30px #000000;
			cursor: pointer;
			 filter:grayscale(0%);
  			-webkit-filter: grayscale(0%);
  			transition: box-shadow .5s,filter .5s, -webkit-filter .5s;
		}
		#bannerimg:hover{
        	box-shadow: 0 0 50px #0d47a1;
  			-webkit-filter: grayscale(50%); /* Safari 6.0 - 9.0 */
    		filter: grayscale(50%);
        }
        .address{
        	padding:10px;
        	box-shadow: 0 0 20px rgba(123, 123, 123, 0.64);
        }
        .boxlist li{
        	padding:10px;
        	border-bottom: 1px solid rgba(183, 183, 183, 0.8);
        	width:100%;
        }
    </style>
	<script>
		$(document).ready(function(){
			function navbaroptoggle(){
				if($(".navbar-nav").css('opacity')==0){
					$(".navbar-nav").delay(500).animate({'opacity':'1'});
				} else {
					$(".navbar-nav").animate({'opacity':'0'});
				}
			}
				$(".navbar-toggler").click(function(){
					navbaroptoggle();
				});
		});
	</script>
</head>


