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
				<div class='imgcontainer'>
					<img style='float:left; clear:left;' src='pictures/AmandaBeanPicture.jpg'>
				</div>
				<p style='font-size: 1.3em; float:right; clear:right; text-align: left; width: 30%; margin-right:15%'>
					Hi! My name is Amanda Hua. I'm a 19 year old computer science major and student athlete at
					Washington University in St. Louis. Feel free to click around or scroll for more details
					about my background.<br><br>
				</p>
			</div>
			<div id='work' class='fixed-bg work'>
				<h2>Work</h2>
				<ul style='width: 80%;'>
					<li>  Experience </li>
					<div style='width=35%'>
						<li>  &emsp; Less Annoying CRM: Coding Fellow (Summer 2018, May-Aug)
						<li>  &emsp; &emsp;> Web Development
						<li>  &emsp; &emsp; &emsp; &emsp;> Created a basic blog with login and posting ability
						<li>  &emsp; &emsp; &emsp; &emsp;> Created gratitude journal website using databases and ajax endpoints
						<li>  &emsp; &emsp;> DevOps
						<li>  &emsp; &emsp; &emsp; &emsp;> Set up Linux virtual machines using Hyper-V</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Wrote a script to create backups for peers' databases</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Installed LAMP using command line</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Worked with AWS EC2 instances and S3 buckets
					</div>
					<li>Skills</li>
					<li>  &emsp; Software </li>
					<div style='width: 35%; float: left; clear: left;'>
						<li>  &emsp; &emsp;> Languages
						<li>  &emsp; &emsp; &emsp; &emsp;> Java: Experienced </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> PHP: Experienced</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> HTML: Proficient</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Bash: Proficient</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> AWS cli: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> MySQL: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> C: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> CSS: Novice</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> JavaScript: Novice </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Python: Fundamental Awareness </li>
					</div>
					<div style='width:30%; float: right; clear: right; text-align: left; margin-right: 15%;'>
						<li></li>
						<li>  &emsp; &emsp;> DevOps</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> AWS ec2: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> AWS s3: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> LAMP: Proficient</li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Ubuntu: Proficient </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> SSH: Novice </li>
						<li>  &emsp; &emsp; &emsp; &emsp;> Hyper-V: Novice </li>
						<br>
					</div>
					<br>
					<div style='clear: both'>
						<li>Hardware</li>
						<li>  &emsp; &emsp;> Soldering </li>
						<li>  &emsp; &emsp;> Basic Electrical and Mechanical Engineering Lab Safety </li>
					</div>
				</ul>
			</div>
			<div id='education' class='fixed-bg education'>
				<h2>Education</h2>
				<div style='width: 20%; text-align: left; margin: auto;'>
					<h3>Washington University in St. Louis<br> St. Louis, MO</h3>
					<p>
						&emsp;Bachelor of Science Candidate<br>
						&emsp;Expected Graduation: May 2021<br>
						&emsp;Major: Computer Science<br>
					</p>
					<h3>Monta Vista High School<br> Cupertino, CA</h3>
					<p>
						&emsp;Graduation: June 2017<br>
						&emsp;GPA: 3.857/4.0<br>
						&emsp;ACT: 34<br>
					</p>
				</div>
			</div>
			<div id='extracurriculars' class='fixed-bg extracurriculars'>
				<h2>Extracurriculars</h2>
				<div style='width: 20%; text-align: left; margin: auto'>
					<h3>NCAA Women's Varsity Volleyball</h3>
					<p>
						&emsp;2017-present<br>
						&emsp;Current player for Washington University in St. Louis NCAA Women's Volleyball team
					</p>
				</div>
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
					In my spare time I make Spotify playlists. Here are some of my more recent ones:<br><br>
					<a href='https://open.spotify.com/user/22k343m6upq3jz5sylnsoshsa/playlist/6vbReDcJjYouUzNBcchWpP?si=xlphLovSQAS4v4mg6TPt2g'>August 2018</a><br><br>
					<a href='https://open.spotify.com/user/22k343m6upq3jz5sylnsoshsa/playlist/7Mb1TneWZcZ7IAVXcRWyFx?si=wq2d1Qr8Rgy3yb5soNHCzA'>Mornings</a><br><br>
					<h3>Books</h3>
					This summer I've been trying to get back into reading for fun. If you're looking for recommendations, I have a couple.
					<br><br><a href='books/main.php'>Book Recommendations</a>
				</div>
			</div>
			<div id='contact' class='fixed-bg contact'>
				<h2>Contact</h2>
				<p style='text-align: center; padding:15%;'>
					Personal Email: amandahua17@gmail.com <br>
					Linkedin: <a href='https://www.linkedin.com/in/amanda-hua-1691ab168'>https://www.linkedin.com/in/amanda-hua-1691ab168</a><br>
					Phone: (408) 891-1028<br>
					Github: <a href= 'https://github.com/amandahua17'>https://github.com/amandahua17</a><br>
				</p>
			</div>
			<a class='homebtn' href='#home'>back to top</a>
		";
	foot();
