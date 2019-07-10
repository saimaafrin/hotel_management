<?php
    ob_start();
    session_start();
    require_once 'dbconnector.php';
    unset($_SESSION['user']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Sea View International</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="user">User Name: </label>
		<input type="text" name="user" id="user" placeholder="Enter Your User Name"><br>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password" placeholder="*******************"><br><br>

		<input type="submit" name="submit" id="submit" value="Enter As Admin">
	</form>

			<?php
				require_once 'dbconnector.php';
				if ( isset($_POST['submit']) ) {
					$username = $_POST['user'];
					$password = $_POST['password'];

					$query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
			        $row = mysqli_fetch_array($query);
			        $count = mysqli_num_rows($query);
			        if( $count == 1 && $row['password'] == $password ) {
		                $_SESSION['user'] = $row['username'];
		                header("Location: bookings.php");
			        } else {
			            echo "<div style='color: #FFF; text-align: center;'>Please insert correct login details</div>";
			        }
				}
			 ?>

</body>
</html>
<?php ob_end_flush(); ?>
