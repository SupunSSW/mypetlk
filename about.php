<!DOCTYPE html>

<html>

<head>
	<title>About | MyPet.lk</title>
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
			<li><a href="care.php">Pet Care</a></li>
			<li class="active"><a>About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li class="icon" onclick="myFunction()"><a href="#topnav">M</a></li>
		</ul>
	</nav>

	<article id="basicart" class="imge">
		<img src="img/27106.svg">
		<h2>Who are we?</h2>
		<p>We are a non profit organization registered in SriLanka for the well-being of animals around us.</p>
		<img src="img/vsn.svg">
		<h2>Our Vision</h2>
		<p>Every animal should be raised among us with love, care and kindness. They are a part of our lives, they love to be with us. Every animal should have a place in this very earth, even the homeless.</p>
		<img src="img/msn.svg">
		<h2>Our Mission</h2>
		<p>We look for various type of pets around the country and adopt them. We feed homeless animals and look after them. We supply pets for those who are willing to have a pet.</p>
		<img src="img/srv.png">
		<h2>Services</h2>
		<p>We provide pets for all who have interest. Provide health tips for all type of pets by our consultants. We also offer a home for homeless puppies island wide.</p>
		
		<video width="70%" controls>
			<source src="img/guinie.mp4" type="video/mp4">
		</video>
		
		<button onclick="location.href = '#hdr';" id="topbtn">&uarr;</button>
		
	</article>
	
	<footer>
        <p>&copy;MyPet.lk | Powered by SSW&reg; InC.&trade; </p>
        <p>Telephone - 012 3 456 789<br>Email - petcare@ssw.net</p>
	</footer>

</body>

</html>