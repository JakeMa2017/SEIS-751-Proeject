<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "author" content = "Jianqiao Ma">
    <link rel="import" href="css.html">

	<title>Jianqiao Ma</title>

	<?php require 'login.php'; ?>
	<?php
		$success = "";
		$fail = "";
		$nul = "";
	  	if (isset($_SERVER['PHP_AUTH_USER']) &&
	      	isset($_SERVER['PHP_AUTH_PW']))
	  	{
	    	if ($_SERVER['PHP_AUTH_USER'] == $username &&
	        	$_SERVER['PHP_AUTH_PW']   == $password)
	          	$success = "You are now logged in";
	    	else 
	    	{
	    		//die("Invalid username / password combination");
	    		$fail = "Invalid username / password combination";
	    	}
	  	}
	  	else
	  	{
	    	header('WWW-Authenticate: Basic realm="Restricted Section"');
	    	header('HTTP/1.0 401 Unauthorized');
	    	$nul = "Please enter your username and password";
	    	//die ("Please enter your username and password");
	  	}
	?>

	<link rel='icon' href='image/favicon.png?v=2' type='png'> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark nav-transparent  nav-mine text-uppercase" style="font-family: 'Open Sans', sans-serif;">
			<a class="navbar-brand" href="index.html" style="float: left; display: inline-block;">
				<img src="image/si-glyph-network.svg" width="45px" height="45px" alt="logo" class="ml-5"> Jianqiao Ma | SEIS 751
			</a>
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item px-3"><a class="nav-link" href="index.html"><img src="image/si-glyph-home-page.svg" width="20px" height="20px" alt="home"> Home</a></li>

				<li class="nav-item px-3 dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><img src="image/si-glyph-circle-info.svg" width="20px" height="20px" alt="about"> About</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="about.html">About</a>
						<a class="dropdown-item" href="contentmap.html">Content Map</a>
						<a class="dropdown-item" href="wireframe.html">Wireframe</a>
						<a class="dropdown-item" href="walkthough.html">Walkthrough</a>
						<a class="dropdown-item" href="credits.html">Credits</a>
					</div>
				</li>

				<li class="active nav-item px-3"><a class="nav-link" href="gallery.html"><img src="image/si-glyph-folder.svg" width="20px" height="20px" alt="sample"> Gallery</a></li>
				<li class="nav-item px-3"><a class="nav-link" href="contact.html"><img src="image/si-glyph-contact-book.svg" width="20px" height="20px" alt="contact"> Contact</a></li>
			</ul>
		</nav>
	</header>


	<main>
		<div class="container-fluid w-75 pt-5">
			<div class="row">
				<div class="col-sm-8">
					<p class="display-4">Gallery</p>
				</div>
				<div class="col-sm-4 mx-0 px-0 media">
					<svg class="vinyl pb-5" width="64" height="64">
						<circle cx="32" cy="32" r="20" fill="#35383d" stroke="black" />
						<circle cx="32" cy="32" r="5" fill="white" stroke="white" />
						<circle cx="32" cy="32" r="12" fill-opacity="0" stroke="black" />
						<circle cx="32" cy="32" r="13" fill-opacity="0" stroke="black" />
						<circle cx="32" cy="32" r="14" fill-opacity="0" stroke="black" />
						<circle cx="32" cy="32" r="15" fill-opacity="0" stroke="black" />
						<circle cx="32" cy="32" r="16" fill-opacity="0" stroke="black" />
						<polygon points="30,16 34,16 34,25 30,25" style="fill: white;" />
					</svg>

					<audio controls class="pt-5"><source src="media/bwf.mp3" type="audio/mpeg">></audio>
				</div>
			</div>
		</div>

        <div class="container-fluid pl-5">
        	<div class="row mx-auto">
        		<div class="col-md-4">
		        	<ul class="list-group nav">
		        		<li class="list-group-item"><a href="gallery.html" class="nav-link text-dark">[Video] 20 Years of Badminton in Olympic Games</a></li>
		        		<li class="list-group-item"><a href="piechart.php" class="nav-link text-dark">[Data Visualization] Players in world top 25% pie chart</a> </li>
		        		<li class="list-group-item"><a href="stadium.html" class="nav-link text-dark">[Google map custom elements] Map for All England stadium</a></li>
		        		<li class="list-group-item"><a href="canvas.html" class="nav-link text-dark">[Canvas] Draw a image using &lt;canvas&gt;</a></li>
		        		<li class="list-group-item"><a href="json.html" class="nav-link text-dark">[JSON] Olymipc Gold Medalists of Men's Single and Women's Single in Badminton</a></li>
		        		<li class="list-group-item"><a href="todo/todopage.php" class="nav-link text-dark">[Server-Side Persistent Storage] To Do List</a></li>
		        		<li class="active list-group-item"><a href="auth.php" class="nav-link text-white">[Authentication] Quarantine Area</a></li>
		        	</ul>
		        </div>

		        <!-- Differences -->
		        <div class="col-md-8" style="padding-left: 5%;">
		        	<p class="text-center display-4" style="padding-top: 15%;">
			        	<?php

						    if (strlen($success) != 0) {
								echo $success;
							} else if (strlen($fail) != 0) {
								echo "$fail";
							} else if (strlen($nul) != 0) {
								echo "$nul";
							}

			        	?>
			        </p></span>
		        </div>

        	</div>
        </div>
	</main>

	<footer class="d-block bg-dark mt-4 webfont">
		<div class="container-fluid">
			<div class="row w-50 mx-auto mb-0">
				<div class="col-sm-4">
					<p class="text-muted">Copyright &copy; 2017 Jianqiao Ma</p>
				</div>
				<div class="col-sm-4"></div>
				<div class="col-sm-4"></div>
			</div>
			<div class="row w-50 mx-auto mt-0">
				<div class="col-sm-3"><a class="nav-link text-light" href="index.html">Home</a></div>
				<div class="col-sm-3"><a class="nav-link text-light mb-0 pb-0" href="about.html">About</a><a class="nav-link text-light my-0 py-0" href="contentmap.html">Content Map</a><a class="nav-link text-light my-0 py-0" href="wireframe.html">Wireframe</a><a class="nav-link text-light my-0 py-0" href="walkthough.html">Walkthrough</a><a class="nav-link text-light my-0 py-0" href="credits.html">Credits</a></div>
				<div class="col-sm-3">
					<a class="nav-link text-light mb-0 pb-0" href="gallery.html">Gallery</a>
					<a class="nav-link text-light my-0 py-0" href="piechart.php"><small>&nbsp;&nbsp;Data Visualization</small></a>
					<a class="nav-link text-light my-0 py-0" href="stadium.html"><small>&nbsp;&nbsp;Custom Elements</small></a>
					<a class="nav-link text-light my-0 py-0" href="canvas.html"><small>&nbsp;&nbsp;Canvas</small></a>
					<a class="nav-link text-light my-0 py-0" href="json.html"><small>&nbsp;&nbsp;JSON</small></a>
					<a class="nav-link text-light my-0 py-0" href="todo/todopage.php"><small>&nbsp;&nbsp;Persistent Storage</small></a>

				</div>
				<div class="col-sm-3"><a class="nav-link text-light" href="contact.html">Contact</a></div>
			</div>
    	</div>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>



</body>
</html>