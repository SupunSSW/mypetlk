<!DOCTYPE html>

<html>

<head>
	<title>Contact Us | MyPet.lk</title>
	<?php include "header.php"; ?>
</head>

<body>

	<header>
		<a href="home.php"><img src="img/logo.png"></a>
	</header>

	<nav id="topnav" class="nav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="get.php">Get Pets</a></li>
			<li><a href="care.php">Pet Care</a></li>
			<li><a href="about.php">About</a></li>
			<li class="active"><a>Contact Us</a></li>
			<li class="icon" onclick="myFunction()"><a href="#topnav">M</a></li>
		</ul>
	</nav>

	<article id="basicart">
		
		<h1>Need Help?</h1>
		<h3>Have a question or need to connect with us? Contact MyPet.lk team for additional support.</h3>
		<hr>
		
		
		<?php
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			
			$name = test_input($_POST['name']);
			$email = test_input($_POST['email']);
			$text = test_input($_POST['text']);
			$prp = test_input($_POST['purp']);
			
			$conn = mysqli_connect("localhost", "root", "", "mypetlk");
			
			if(mysqli_connect_errno()){
				die ("<script>alert('Failed!');</script>");
			}
			
			$sql = "INSERT INTO contact(name, email, purpose, text) VALUES('$name', '$email', '$prp', '$text');";
			
			$res = mysqli_query($conn, $sql);
			
			if(empty($res)){
				die("<script>alert('Failed to submit the request! Please try again shortly.');</script>");
			}
			else{
				echo "<div class='success'><img src='img/suc.png'>
					<p>Your message have been recorded successfully. Our team will gen in touch with you within 24hours.</p></div>"
				;
			}
		}
		
		
		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
		
		?>
		
	<form class="cnct" method="post">
		<table>
		
		<tr>
			<td>
				<input type="text" name="name" placeholder="Name" required/>
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="email" name="email" placeholder="Email" required/>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<select name="purp">
					<option  value="0" selected hidden>Select a topic</option>
					<option value="1">Ask a question</option>
					<option value="2">Talk to team</option>
					<option value="3">About a pet</option>
					<option value="4">Special pets</option>
					<option value="5">Other</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>
				<textarea name="text" placeholder="Description"></textarea>
			</td>
		</tr>
		
		<tr>
			<td>
				<button name="sbmt">Submit</button>
			</td>
		</tr>
		
		
		</table>
	</form>
		
		<p style="font-size: 16px;">Message: It will take over 12 hours to process your request.</p>
		
	</article>
	
	<footer>
        <p>&copy;MyPet.lk | Powered by SSW&reg; InC.&trade; </p>
        <p>Telephone - 012 3 456 789<br>Email - petcare@ssw.net</p>
	</footer>

</body>

</html>