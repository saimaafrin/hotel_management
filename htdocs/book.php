<!DOCTYPE html>
<html>
<head>
	<title>Hotel Sea View International</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<header>
		<nav>
			<h1><a href="index.html">Hotel Sea View International</a></h1>
			<ul class="main-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="accomo.html">Accomodations</a></li>
				<li><a href="book.php" style="color: #2da5c6;">Book Now</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>

	<section class="reservation">
		<h2 style="color: #b0e0ed; font-size: 40px;">Reservation</h2>
		<p>Personal Information</p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
			<label for="f_name">First Name: </label>
			<input type="text" id="f_name" name="firstName" placeholder="Enter Your First Name">
			<label for="l_name">Last Name: </label>
			<input type="text" id="l_name" name="lastName" placeholder="Enter Your Last Name">
			<label for="c_no">Contact No: </label>
			<input type="number" id="c_no" name="contact">
			<label for="address">Address: </label>
			<textarea cols="30" rows="1" id="address" name="address"></textarea>
			<label for="email">Email: </label>
			<input type="email" id="email" name="email" placeholder="Enter Your Email">

			<p>Reservation Information</p>

			<label for="type">Room Type:</label>
			<input type="text" name="room" id="type" placeholder="Enter your suitable room">
			<label for="hall">Hall Name:</label>
			<input type="text" name="hall" id="hall" placeholder="Enter your desired hall">
			<label for="num">No. of Rooms:</label>
			<input type="number" name="roomNum" id="num" placeholder="Enter how much room you need">
			<label for="person">No. of Person:</label>
			<input type="number" name="personNum" id="number" placeholder="How many persons">
			<label for="ask">Ask Anything:</label>
			<textarea id="ask" name="ask"></textarea>
			<br><br>
			<input type="submit" name="btn" value="Confirm Your Reservation" id="submit">
		</form>
		<?php
			require_once 'dbconnector.php';
			if ( isset($_POST['btn']) ) {
				$firstname = $_POST['firstName'];
				$lastname = $_POST['lastName'];
				$contact = $_POST['contact'];
				$address = $_POST['address'];
				$email = $_POST['email'];
				$room = $_POST['room'];
				$hall = $_POST['hall'];
				$roomNum = $_POST['roomNum'];
				$personNum = $_POST['personNum'];
				$ask = $_POST['ask'];

				$query = $mysqli->query("INSERT INTO bookings VALUES('$firstname', '$lastname', '$contact', '$address', '$email', '$room', '$hall', '$roomNum', '$personNum', '$ask') ");
				if ($query) {
					echo "<div style='color: #FFF; text-align: center; padding: 30px;'>Booking Successful</div>";
				}
			}
		 ?>
	</section>

	<footer>All Rights Reserved &copy; Hotel Sea View Internationals</footer>
</body>
</html>
