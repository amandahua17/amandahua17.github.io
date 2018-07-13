<?php
	// phpinfo();
	include("/include/include_all.php");

	head("Amanda Hua");
		//content
		echo"
				<h2>About Me</h2>
				<img style='float:left; clear:left;' src='pictures/Amanda_Bean Picture.jpg'>
				<p style='float:right; clear:right; text-align: left'>
					Hi! My name is Amanda Hua. I'm a 19 year old computer science major and student athlete at
					Washington University in St. Louis. Feel free to click around for more details about my background.

				</p>
			</div>
			<div id='work' class='fixed-bg work'>
				<div id='workSection'>
					<h2>Work</h2>
					<ul style='width: 80%;'>
						<li>> Less Annoying CRM:</li>
						<li>> Coding Fellow</li>
						<li>> &emsp; Learned PHP, CSS, HTML, Bash, JavaScript, MySQL</li>
						<li>> &emsp; Set up Linux virtual machines using Hyper-V and virtual servers with Amazon Web Services</li>
					</ul>
					<a class='homebtn' href='#home'>back to top</a>
				</div>
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
			<div id='contact' class='fixed-bg contact'>
				<h2>Contact</h2>

				<a class='homebtn' href='#home'>back to top</a>
			</div>
		";
	foot();
