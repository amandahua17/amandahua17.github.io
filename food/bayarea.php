<?php
	include("include/include_all.php");

	head("Bay Area Food");
	echo"
	<div id='home' class='fixed-bg bay'>
		<h1>The Bay</h1>
		<a style='text-align: left; bottom: 0;' href='/index.php'>< < home</a>";
	navbar(array("Boba", "Breakfast", "Lunch", "Dinner", "Dessert"));
	echo"
			<h2>The Bay Area: The Area Around San Francisco</h2>
			<p style='font-size: 1.3em; width: 60%; margin:auto; text-align: left'>
				The Bay is my home! I love the food around here, especially because there's really good Asian food
				(Japanese is my favorite). A lot of these recommendations are Asian food, mostly because that's a majority
				 of the stuff you'll find in the area. <br><br>
			</p>
	</div>
	<div id='Boba' class='fixed-bg Boba'>
				<h2>Boba</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Boba is a Taiwanese drink: most generally when people refer to boba, they are talking about
					milk tea with tapioca pearls. Technically, the pearls themselves are the actual boba, but 
					colloquially people use the term interchangeably with the entire drink. Boba is also commonly
					known as bubble tea, or pearl milk tea. The Bay has a lot of boba places - in fact, someone 
					made a <a href='https://docs.google.com/spreadsheets/d/1sGwicWRSK3ZMBUfU_kxzdBKx_JT88CAptJSPMS_aK4s/edit?usp=sharing'>
					Boba Directory</a>! Thanks Allen! Listed Below are a couple of my favorite places, though. Note:
					If you're trying boba for the first time or are just not sure what to order, Jasmine/green milk tea
					with boba is my go to order! All boba places should have it, as it's a fairly common order. <br><br>
				</p>
				<ul style='width: 80%;'>
					<li>Boba Guys: A great first experience, even my friends who don't like boba have said it's pretty good. San Francisco, Palo Alto</li>
					<br><li>Verde Tea: My first time trying Jasmine milk tea! Mountain View, Cupertino</li>
					<br><li>TPumps: My personal favorite - fresh boba, good flavor combinations. I get strawberry peach mango gmt here. Burlingame, Cupertino, San Francisco, Foster City</li>
					<br><li>Cafe Lattea: A good balance and large portions. Cupertino</li>
					<br><li>Happy Lemon: Originally from Taiwan! Cupertino, San Jose, Berkeley, San Francisco, Sunnyvale</li>
					<br><li>Ten Ren: A classic - genuine tea. San Francisco, Cupertino</li>
					<br><li>SuperCue: Good portions, good tea flavor. San Francisco, San Mateo, Cupertino, Fremont</li>
					<br><li>Teaspoon: Good portions, good tea flavor. Los Altos, Milpitas, San Francisco, Mountain View, San Jose, Palo Alto</li>
					<br><li>Gong Cha: A strong contender, good flavor. San Jose, Palo Alto, San Mateo</li>
				</ul>
			</div>
			<div id='Breakfast' class='fixed-bg breakfast'>
				<h2> Breakfast</h2>
				<p style='text-align: left; width: 60%; margin: auto;'>
					Breakfast. The most important meal of the day. Where would we be without it?
				</p>
				<ul style='width: 80%;'>
					<li>Stacks: A good brunch place, lots of options! Pancakes are very good here, as is the eggs benedict. Menlo Park, San Francisco, Burlingame</li>
					<br><li>Plow: High quality breakfast and lunch place, very tasty dishes. Highly recommend the plow potatoes, and the crab omelette, although the omelette doesn't seem
					to be available anymore. San Francisco</li>
					<br><li>Hobees: A childhood memory, renowned coffee cake. Cupertino, Mountain View, Palo Alto, Redwood Shores, N San Jose, Sunnyvale</li>
					<br><li>85C: A Chinese bakery, good pastries, also has boba and cakes! Sweet and savory choices. San Jose, Milpitas, Cupertino, San Francisco, Pleasanton, Newark, Daly City</li>
					<br><li>Jenny's Kitchen: Also a Chinese bakery, good meat buns and green onion pancakes. Mostly savory, temporarily closed. West San Jose</li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
					<br><li></li>
				</ul>
			<div>
			<div id='Lunch' class='fixed-bg lunch'>
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
			<div>
			<div id='Dinner' class='fixed-bg dinner'>
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
			<div>
			<div id='Dessert' class='fixed-bg dessert'>
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
			<div>
			<a class='homebtn' href='#home'>back to top</a>
	";
	foot();
