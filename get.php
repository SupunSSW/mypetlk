<!DOCTYPE html>

<html>

<head>
	<title>Get Pets | MyPet.lk</title>
	<?php include "header.php"; ?>
	
	<?php
	
		$nam = $cit = "";
		
		$conn = mysqli_connect("localhost", "root", "", "mypetlk");
		
		if(mysqli_connect_errno()){
			die("<script>alert('Connection Failed!');</script>");
		}
		
		$sql = "SELECT * FROM PET;";
		
		$res = mysqli_query($conn, $sql);
		
		if(!$res){
			die("<script>alert('Connection Failed!');</script>");
		}
		
	?>
	
</head>

<body id="hdr">

	<header>
		<a href="home.php"><img src="img/logo.png"></a>
	</header>

	<nav id="topnav" class="nav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li class="active"><a>Get Pets</a></li>
			<li><a href="care.php">Pet Care</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li class="icon" onclick="myFunction()"><a href="#topnav">M</a></li>
		</ul>
	</nav>

	<article id="basicart">
	
		<h2>Get Your Pet today. Enjoy everyday!</h2>

        <svg width="100%" height="1000" id="ovrly">
            <rect width="100%" height="1000" fill="white" fill-opacity=".5"/>
        </svg>

        <div class="condet" id="condet">
            <span onclick="ovrlyFunc();" class="boxclosebtn">&times;</span>
            <div id="expandedImg"></div>

            <div class="boxcondet">
                <img class="zoom" id="trgtimg">


                <div class="dtls">
                    <ul>
                        <li>German Sheperd</li>
                        <li>6 Months</li>
                        <li>Pure breed</li>
                        <li>No infections</li>
                        <li>All injections are done</li>
                        <li>Loyal and Funny</li>
                    </ul>
                </div>

            </div>


        </div>

        <div class="boxcontainer">
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

            <p>Reserve your pet today. Your lovely pet is one day away. Our delivery team make sure that, you will have your pet within 36-hours without any extra charges for transport mehods.</p>

            <div class="pet" id="pup">
                <h2>Puppies</h2>

                <div class="showbox zoombox">
                    <p><?php 
						
						while($row = mysqli_fetch_assoc($res)){
							foreach($row as $key=>$val){
								if($key == 'name'){
									echo ucfirst($val);
								}
							}
						}

					?></p>
                    <img src="img/dog1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Mihintale</p>
                </div>
                <div class="showbox zoombox">
                    <p>Timy</p>
                    <img src="img/dog2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Colombo</p>
                </div>
                <div class="showbox zoombox">
                    <p>Rex</p>
                    <img src="img/dog1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Mihintale</p>
                </div>
                <div class="showbox zoombox">
                    <p>Timy</p>
                    <img src="img/dog2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Colombo</p>
                </div>
                <div class="showbox zoombox">
                    <p>Rex</p>
                    <img src="img/dog1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Mihintale</p>
                </div>
                <div class="showbox zoombox">
                    <p>Timy</p>
                    <img src="img/dog2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Colombo</p>
                </div>
            </div>

            <div class="pet" id="kit">

                <h2>Kitties</h2>

                <div class="showbox zoombox">
                    <p>Rose</p>
                    <img src="img/cat1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Negombo</p>
                </div>
                <div class="showbox zoombox">
                    <p>Garfield</p>
                    <img src="img/cat3.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Galle</p>
                </div>
                <div class="showbox zoombox">
                    <p>Rose</p>
                    <img src="img/cat1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Negombo</p>
                </div>
        </div>

            <div class="pet" id="squ">

                <h2>Squirrels</h2>

                <div class="showbox zoombox">
                    <p>Jerry</p>
                    <img src="img/sq1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Thalawa</p>
                </div>
                <div class="showbox zoombox">
                    <p>San</p>
                    <img src="img/sq2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Gampaha</p>
                </div>
            </div>

            <div class="pet" id="pig">

                <h2>Piggies</h2>

                <div class="showbox zoombox">
                    <p>Mag</p>
                    <img src="img/pig1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Dompe</p>
                </div>
                <div class="showbox zoombox">
                    <p>Kimy</p>
                    <img src="img/pig2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Kegalle</p>
                </div>
		<div class="showbox zoombox">
                    <p>Mag</p>
                    <img src="img/pig1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Dompe</p>
                </div>
                <div class="showbox zoombox">
                    <p>Kimy</p>
                    <img src="img/pig2.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Kegalle</p>
                </div>
            </div>

            <div class="pet" id="bir">

                <h2>Birds</h2>

                <div class="showbox zoombox">
                    <p>Sqweeks</p>
                    <img src="img/bir.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Hakmana</p>
                </div>
                <div class="showbox zoombox">
                    <p>Tanny</p>
                    <img src="img/bir1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Kumana</p>
                </div>
                 <div class="showbox zoombox">
                    <p>Sqweeks</p>
                    <img src="img/bir.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Hakmana</p>
                </div>
                <div class="showbox zoombox">
                    <p>Tanny</p>
                    <img src="img/bir1.jpg" class="zoombox" onclick="detailFunc(this);">
                    <p>Kumana</p>
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