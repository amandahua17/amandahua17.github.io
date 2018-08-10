<?php
	include("include/include_all.php");

	head("Book Recommendations");
	echo"
	<div class='fixed-bg book'>
		<h1>Book Recommendations</h1>
		<a style='text-align: left; bottom: 0;' href='/index.php'>< < home</a>";
	navbar(array("Sci-fi", "Horror", "Fantasy", "Mystery", "Other"));
	echo"
		<div class='foodoverlay' style='height: 40%; width: 70%;'>
			<h2>Books!</h2>
			<p style='font-size: 1.3em; width: 60%; margin:auto; text-align: left'>
			</p>
		</div>
	</div>
	<div id='Sci-Fi' class='fixed-bg scifi'>
			<div class='foodoverlay'><br><br>
				<h2>Sci-Fi</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
				</p>
				<ul style='width: 80%;'>
					<li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
				</div>
			</div>
			<div id='Horror' class='fixed-bg horror'>
			<div class='foodoverlay'><br><br>
				<h2>Horror</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
				</p>
				<ul style='width: 80%;'>
					<li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
				</div>
			</div>
			<div id='Fantasy' class='fixed-bg fantasy'>
				<div class='foodoverlay'><br><br>
				<h2>Fantasy</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
				</p>
				<ul style='width: 80%;'>
					<li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
				</div>
			</div>
			<div id='Mystery' class='fixed-bg mystery'>
				<div class='foodoverlay'><br><br>
				<h2>Mystery</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
				</p>
				<ul style='width: 80%;'>
					<li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
				</div>
			</div>
			<div id='Other' class='fixed-bg other'>
				<div class='foodoverlay'><br><br>
				<h2>Other</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
				</p>
				<ul style='width: 80%;'>
					<li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
				</div>
			</div>
			<a class='homebtn' href='#home'>back to top</a>
			<div class='viewrepo'>
				view the <a href='https://github.com/amandahua17/amandahua17.github.io'>repository</a> for this website
			</div>
	";
	foot();
