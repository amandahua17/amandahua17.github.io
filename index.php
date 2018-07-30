<?php
	// phpinfo();
	include("include/include_all.php");

	head("Amanda Hua");
		//content
		echo"
			<div id='home' class='fixed-bg home'>
			<h1>Amanda Hua</h1>";
			navbar(array("work", "education", "extracurriculars", "extras", "contact"));
		echo"
				<h2>About Me</h2>
				<img style='float:left; clear:left;' src='pictures/Amanda_Bean Picture.jpg'>
				<p style='float:right; clear:right; text-align: left; width: 40%; margin-right:15%'>
					Hi! My name is Amanda Hua. I'm a 19 year old computer science major and student athlete at
					Washington University in St. Louis. Feel free to click around or scroll for more details
					about my background.

				</p>
			</div>
			<div id='work' class='fixed-bg work'>
				<h2>Work</h2>
				<ul style='width: 80%;'>
					<li>> Less Annoying CRM:</li>
					<li>> Coding Fellow</li>
					<li>> &emsp; Learned PHP, CSS, HTML, Bash, JavaScript, MySQL</li>
					<li>> &emsp; Set up Linux virtual machines using Hyper-V and virtual servers with Amazon Web Services</li>
				</ul>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
			<div id='education' class='fixed-bg education'>
				<h2>Education</h2>
				<div style='width: 80%;'>

				</div>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
			<div id='extracurriculars' class='fixed-bg extracurriculars'>
				<h2>Extracurriculars</h2>

				<a class='homebtn' href='#home'>back to top</a>
			</div>
			<div id='extras' class='fixed-bg extras'>
				<h2>Extras</h2>
				<div style='width: 80%; background-color: rgba(255,255,255,0.5); margin: auto'>
					<h3>Stories</h3>
					In October of 2016 I wrote a fictional article called Childstock. Occasionally I'll write some random things, and anything that
					ends up halfway decent I hope will end up here. <br> If you're looking for a writing sample, check out
					<a style='text-align: center' href='stories/childstock.php'>Childstock</a>
					<h3>Food</h3>
					I really like food. Check out some of my favorite restaurants in different areas!<br><br>
					<a style='text-align: center' href='food/bayarea.php'>The Bay Area</a><br><br>
					<a style='text-align: center' href='food/socal.php'>Southern California</a><br><br>
					<a style='text-align: center' href='food/stl.php'>St. Louis</a><br><br>
					<h3>Music</h3>
					In my spare time I make Spotify playlists. Here are some of my more recent ones:
					<h3>Books</h3>
					This summer I've been trying to get back into reading for fun. If you're looking for recommendations, I have a couple.
					<br><br><a href='books/main.php'>Book Recommendations</a>
				</div>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
			<div id='contact' class='fixed-bg contact'>
				<h2>Contact</h2>
				<p style='text-align: center; padding:15%;'>
					Personal Email: amandahua17@gmail.com <br>
					Linkedin: <a href='https://www.linkedin.com/in/amanda-hua-1691ab168'>https://www.linkedin.com/in/amanda-hua-1691ab168</a><br>
					Phone: (408) 891-1028<br>
				</p>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
		";
	foot();
