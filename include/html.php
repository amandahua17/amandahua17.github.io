<?php
	//html framework
	function head($title){
		echo"
			<html>
				<head>
					<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet'>
					<title>$title</title>
					<link rel='stylesheet' href='/style.css'>
				</head>
				<body>
					<h1>Amanda Hua</h1>
		";
		navbar();
		if($_SERVER['PHP_SELF']!= '/index.php'){
			echo"
					<h2>$title</h2>
			";
		}
	}

	function navbar(){
		echo"
		<div class='navbar'>
			<a href='#home'>home</a>	<a href='#'
		</div>
		";
	}

	function foot(){
		if($_SERVER['PHP_SELF']!= '/index.php'){
			echo"
					<br><a class='home' href='/index.php'>Home</a>
			";
		}
		echo 		"<script src='/js/jquery.js'></script>
					<script src='/js/jsfunctions.js'></script>
				</body>
			</html>
		";
	}
