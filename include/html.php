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
					<h1>$title</h1>
		";
		navbar();
	}

	function navbar(){
		echo"
		<div id='navbar'>
			<div class='dropdown'>
				<div onmouseover='showDrop()' onmouseout='hideDrop()' class='dropbtn'>About Me</div>
				<div id='myDropdown' class='dropdown-content'>
					<a href='/aboutMe/skills.php'>Skills</a>
					<a href='/aboutMe/education.php'>Education</a>
					<a href='/aboutMe/extra.php'>Extra</a>
				</div>
			</div>
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
