<?php
	include("include/include_all.php");

	head("SoCal Food");
	echo"
	<div id='home'class='fixed-bg socal'>
		<h1>SoCal</h1>
		<a style='text-align: left; bottom: 0;' href='/index.php'>< < home</a>";
	navbar(array("Boba", "Breakfast", "Lunch", "Dinner", "Dessert"));
	echo"
			<h2>SoCal: Southern California, but also can be generalized to LA</h2>
			<p style='font-size: 1.3em; width: 60%; margin:auto; text-align: left'>
				(LA people don't get mad at me!) Even though I'm a NorCal girl myself, I will admit that SoCal has its own (and better, I guess) food culture.
				The Asian food here is good too! <br><br>
			</p>
	</div>
	<div id='Boba' class='fixed-bg boba'>
		<div class='foodoverlay'><br><br>
				<h2>Boba</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Boba is a Taiwanese drink: most generally when people refer to boba, they are talking about
					milk tea with tapioca pearls. Technically, the pearls themselves are the actual boba, but 
					colloquially people use the term interchangeably with the entire drink. Boba is also commonly
					known as bubble tea, or pearl milk tea. I haven't actually tried a lot of SoCal boba, but it still gets its own section.
					Note: If you're trying boba for the first time or are just not sure what to order, Jasmine/green milk tea
					with boba is my go to order! All boba places should have it, as it's a fairly common order. <br><br>
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
			<div id='Breakfast' class='fixed-bg breakfast'>
				<div class='foodoverlay'> <br><br>
				<h2> Breakfast</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Breakfast. The most important meal of the day. Where would we be without it?
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
			<div id='Lunch' class='fixed-bg lunch'>
				<div class='foodoverlay'> <br><br>
				<h2>Lunch</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Lunch! The meal you look forward to every second after breakfast, whether you're at work, school, home, or elsewhere. There will be 
					overlap with dinner in these recommendations, but some places are clearly lunch.
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
			<div id='Dinner' class='fixed-bg dinner'>
				<div class='foodoverlay'> <br><br>
				<h2>Dinner</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Dinner is always the best. You're done for the day, packing in, ready to eat a nice warm (or cold) meal. Also usually the fanciest.
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
			<div id='Dessert' class='fixed-bg dessert'>
				<div class='foodoverlay'> <br><br>
				<h2>Dessert</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Not that boba isn't a dessert, but I'd still consider it a separate category. No matter how good boba is, it can't replace ice cream, cake,
					brownies, cookies, and all the other desserts that are so essential to many people's happiness.
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
