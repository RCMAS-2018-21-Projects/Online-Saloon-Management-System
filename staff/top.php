<?php

include_once("../shares/db/mydatabase.inc"); 
//include_once("top.php");
?>
<html>

<head>
	<title>Magic Mirror</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="../temp/css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../temp/css1/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../temp/css1/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="../temp///fonts1.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>
    
    
    <body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="home.php">
							<h1>Magic<sub><font color=blue>Mirror</font></sub>  </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="home.php">Home</a></li>
                         <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">ADD <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="addpackage.php">Package</a></li>
										<li class="divider"></li>
										<li><a href="service.php">Service</a></li>
										<li class="divider"></li>
                                      
										<li class="divider"></li>
										
									</ul>
								</li>
                                
                                
                                
                                  
                                
                                <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="viewdoc.php">Edit Service</a></li>
										<li class="divider"></li>
										<li><a href="viewdocpackage.php">Edit Package</a></li>
										
										
									</ul>
								</li>
                                
                                
                                
                                 <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Booking Details <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="viewapp.php">Service</a></li>
										<li class="divider"></li>
										<li><a href="viewapp1.php">Package</a></li>
										
										
									</ul>
								</li>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 
							
							
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
									<ul class="dropdown-menu">
										
										<li class="divider"></li>
										<li><a href="changepassword.php">Change Password</a></li>
										<li class="divider"></li>
                                        <li><a href="../common/home.php">Logout</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
    
	<!-- js -->
	<script type="text/javascript" src="../temp/js1/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="../temp/js1/bootstrap.js"></script>
</body>

</html>