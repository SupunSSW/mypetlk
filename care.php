<!DOCTYPE html>

<html>

<head>
	<title>Pet Care | MyPet.lk</title>
	<?php include "header.php"; ?>
</head>

<body id="hdr">

	<header>
		<a href="home.php"><img src="img/logo.png"></a>
	</header>

	<nav id="topnav" class="nav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="get.php">Get Pets</a></li>
			<li class="active"><a>Pet Care</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li class="icon" onclick="myFunction()"><a href="#topnav">M</a></li>
		</ul>
	</nav>

	<article id="basicart">
	
		<h2>Care about your pet as they care about you always!</h2>
		<div class="menu">
                <div class="menubox zoombox" onclick="location.href='#pup';">
                    <img src="img/dog2.jpg">
                    <p>Puppies</p>
                </div>
                <div class="menubox zoombox" onclick="location.href='#kit';">
                    <img src="img/cat1.jpg">
                    <p>Kitties</p>
                </div>
                <div class="menubox zoombox" onclick="location.href='#squ';">
                    <img src="img/sq1.jpg">
                    <p>Squirrels</p>
                </div>
                <div class="menubox zoombox" onclick="location.href='#pig';">
                    <img src="img/pig1.jpg">
                    <p>Piggies</p>
                </div>
                <div class="menubox zoombox" onclick="location.href='#bir';">
                    <img src="img/bir.jpg">
                    <p>Birds</p>
                </div>
            </div>
	    
	    <p>Tips to look after your pet as they acts major role. Contact professionals for the best care of your pet.</p>
	
	
	
	<div class="pet tipcon" id="pup">
                <h2>Puppy Care</h2>
		<div class="boxc">
			<ul>
				<li>Find a Good Vet</li>
				<li>Make the Most of Your First Vet Visit</li>
				<li>Shop for Quality Food</li>
				<li>Establish a Bathroom Routine</li>
				<li>Watch For Early Signs of Illness</li>
				<li>Teach Obedience</li>
				<li>Be Sociable</li>
			</ul>
		</div>
	</div>
	<div class="pet tipcon" id="kit">
                <h2>Kitties</h2>
		
		<div class="boxc">
			<ul>
				<li>Don’t Treat Your Kitten Like an Adult Cat</li>
				<li>Reward Good Behavior and Socialize, Socialize, Socialize</li>
				<li>Make Preventive Care a Priority</li>
				<li>Watch For Early Signs of Illness</li>
				<li>Shop for Quality Food</li>
				<li>Always have fresh water available and check it throughout the day for cleanliness</li>
				<li>Take your kitten for a checkup and all appropriate immunizations.</li>
				<li>Play with your kitten.</li>
			</ul>
		</div>
		
	</div>
	<div class="pet tipcon" id="squ">
                <h2>Squirrels</h2>
		
		<div class="boxc">
			<ul>
				<li>Use a soft cloth to pick the baby up</li>
				<li>Check for injuries</li>
				<li>Baby squirrels need to be raised with other baby squirrels</li>
				<li>Use an oral feeding syringe for feeding</li>
				<li>Watch For Early Signs of Illness</li>
				<li>Contact a rehabilitation center often during early ages</li>
				<li>Be ready to deal with some bites and scratches</li>
				<img src="img/scr.jpg" style="width: 300px; margin: 10px;">
			</ul>
		</div>
		
	</div>
	<div class="pet tipcon" id="pig">
                <h2>Piggies</h2>
		
		<div class="boxc">
			<ul>
				<li>Minimum floor space required for 2 Guinea Pigs in any cage is 1200mm x 600mm</li>
				<li>Piggies eat hay, sleep on hay and play in hay</li>
				<li>Beware of piggies getting stuck in tubes that are too small</li>
				<li>No straw as this can be very dangerous for piggies’eyes</li>
				<li>Avoid any feed with E permitted colourants for guinea pigs</li>
				<li>It is a good idea to give your piggie a bath, maybe 4 times a year</li>
				<li>Pigs should never be overfed</li>
				<li>Watch For Early Signs of Illness</li>
			</ul>
		</div>
		
	</div>
	<div class="pet tipcon" id="bir">
                <h2>Birds</h2>
		
		<div class="boxc">
			<ul>
				<li>Birds need to be able to stretch their wings and flap them without hitting anything</li>
				<li>Bird cages should be placed in a draft free area that is well lit, but not in direct sunlight</li>
				<li>Exercise and activities are extremely important to keep your pet bird healthy and happy</li>
				<li>Watch what your pet bird chews on outside its cage. Watch for toxic plants</li>
				<li>Birds need good nutrition</li>
				
			</ul>
		</div>
		
	</div>
	
		<button onclick="location.href = '#hdr';" id="topbtn">&uarr;</button>
		
	    
	</article>
	
	<footer>
        <p>&copy;MyPet.lk | Powered by SSW&reg; InC.&trade; </p>
        <p>Telephone - 012 3 456 789<br>Email - petcare@ssw.net</p>
	</footer>

</body>

</html>