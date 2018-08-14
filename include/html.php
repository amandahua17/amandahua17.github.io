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
		echo 		"
					<div class='hostnote'>
						this site is hosted on an <a href='https://aws.amazon.com'>aws</a> ec2 t2.nano instance
					</div>
					<div class='viewrepo'>
						view the <a href='https://github.com/amandahua17/amandahua17.github.io'>repository</a> for this website
					</div>
					<script src='/js/jquery.js'></script>
					<script src='/js/jsfunctions.js'></script>
				</body>
			</html>
		";
	}
