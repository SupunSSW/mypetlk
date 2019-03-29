<!DOCTYPE html>

<html>

<head>
	<title>Home | MyPet.lk</title>
	<?php include "header.php"; ?>
</head>

<body>

	<header>
		<a href="home.php"><img src="img/logo.png"></a>
	</header>

	<nav id="topnav" class="nav">
		<ul>
			<li class="active"><a>Home</a></li>
			<li><a href="get.php">Get Pets</a></li>
			<li><a href="care.php">Pet Care</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li class="icon" onclick="myFunction()"><a href="#topnav">M</a></li>
		</ul>
	</nav>

	<article id="basicart">
		<h1>Life without a pet is Useless!</h1>
   		<p>Pet is a most trustable and helpful animal in day-today life. Pet helps us to be in both good mental and physical health at every times. Pets are different types according to the satisfaction of people.</p>
    		<h2>Still don't have a Pet?</h2>
    		<p>Make your life more beautiful with a pet to spend your time more happily and enjoy every day in your life. Our goal is to help you acheive your happiness with a pet that you prefer the most.</p>
	
	<div id="imgsec"></div>
	
	<div class="row rowstyle">
		<div class="column zoom">
			<a href="#imgsec"><img src="img/dog1.jpg" alt="" style="width:100%;" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
            <a href="#imgsec"><img src="img/cat1.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
            <a href="#imgsec"><img src="img/sq1.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
            <a href="#imgsec"><img src="img/cat2.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
            <a href="#imgsec"><img src="img/pig1.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
            <a href="#imgsec"><img src="img/dog2.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
        <div class="column zoom">
			<a href="#imgsec"><img src="img/gpig1.jpg" alt="" style="width:100%" onclick="openImg(this);"></a>
        </div>
    </div>
	
	<div class="container">
		<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        		<img id="expandedImg" style="width:100%;height:100%;">
        		<div id="imgtext"></div>
    </div>
	
	<h3>Own a pet! Live happily!</h3>
        <form action="get.php">
            <input type="submit" value="Get Now!" id="btn" />
	</form>

	</article>
	
	<footer>
        <p>&copy;MyPet.lk | Powered by SSW&reg; InC.&trade; </p>
        <p>Telephone - 012 3 456 789<br>Email - petcare@ssw.net</p>
	</footer>

</body>

</html>