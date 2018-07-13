<?php
	//html framework
	function head($title){
		echo"
			<html>
				<head>
					<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet'>
					<link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet'>
					<title>$title</title>
					<link rel='stylesheet' href='/style.css'>
				</head>
				<body>
					<div id='home' class='fixed-bg home'>
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
		<ul class='navbar'>
			<li><a href='#home'>home</a></li>	<li><a href='#work'>work</a></li>	<li><a href='#education'>education</a></li>
			<li><a href='#extracurriculars'>extracurriculars</a></li>	<li><a href='#contact'>contact</a></li>
		</ul>
		";
	}

	function foot(){
		echo 		"<script src='/js/jquery.js'></script>
					<script src='/js/jsfunctions.js'></script>
				</body>
			</html>
		";
	}
