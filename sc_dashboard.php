<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: login.html");
	exit;
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="SHORTCUT ICON" href="images/rvce.ico">
		<meta charset="UTF-8">
		<title>Placement Management System</title>
   
		<link rel='stylesheet prefetch' href='CSS/animate.min.css'>
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
		<link rel="stylesheet" href="CSS/style1.css" media="screen" type="text/css" />
		
		
		<link rel="SHORTCUT ICON" href="images/rvce.ico">
    
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--<title>Placement Informer</title>-->

		<!-- Bootstrap Core CSS -->
		<link href="CSS/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="CSS/modern-business.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
		<link id="theme" rel="stylesheet" type="text/css" href="CSS/style1.css" title="theme" />


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			fieldset {
						border:1px soild #999;
						border-radius:8px;
						box-shadow:0 0 10px #999;
						}
			legend {
						display:table;
						padding:0.5em 0.8em;
						border:0px solid black;
						color:green;
						font-size:250%;
						text-align:center;
						background-color:skyblue;
						
						
						
						}
			body{
					background-height:1200px;
					background-width:720px;
					}
			table {
					display: table;
					border-collapse: collapse;
					border-spacing: 2px;
					border-color: white;
					}
                    th{
                width:150px;
                text-align:center;
                border:1px solid black;
                padding:10px;
              
            }
		.form button:hover 
					{

						background: #27ae60;

					}
		.form button {
					cursor: pointer;
					background: #2ecc71;
					width: 12%;
					padding: 10px 15px;
					border: 0;
					color: #fff;
					font-family: "cambria";
					font-size: 14px;
					font-weight: 400;
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					-webkit-transition: 0.2s linear;
					-moz-transition: 0.2s linear;
					-ms-transition: 0.2s linear;
					-o-transition: 0.2s linear;
						transition: 0.2s linear;
					}
					
		.form input:focus {
					color: #333;
					border: 1px solid #2ecc71;
					}


		body {
					background: #EFEFFB;
					background-size: cover;
					font-family: "cambria";
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					}

			
					
		</style>
		<script type="text/javascript">
			function myFunction() 
			{
				document.getElementById("demo").style.backgroundcolor = "blue";
			}
</script>

	</head>

	<body background ="images/back.jpg">
	

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<img src="https://faculty.ietdavv.edu.in/davv.png" height="-6%" width="6%">
		</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                       <a href="download.php">Download_Data</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
		</nav>

		<br>
		<!-- <h4 align="right" style="vertical-align:top"></h4> -->
		<!-- Page Content -->
		
        <!-- Page Heading/Breadcrumbs -->
			<center>
			
      
					<br><br>
					<div class="rows">
							<h4 align="center" style="vertical-align:top"><a href="list.php">List of Students </a></h4>
							<h4 align="center" style="vertical-align:top"><a href="company_view.php">Company Details</a></h4>
							
				</div>
				
		</body>
</html>