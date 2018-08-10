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

		";
		// navbar();
	}

	function navbar($things){		//can only accommodate exactly 5 things besides home rn, figure out style adjustments
		echo"
		<ul class='navbar'>";
		foreach($things as $thing)
			echo"
				<li><a href='#$thing'>$thing</a></li>
			";
		echo"</ul>
		";
	}

	function foot(){
		echo 		"<script src='/js/jquery.js'></script>
					<script src='/js/jsfunctions.js'></script>
				</body>
			</html>
		";
	}
