<?php
    ob_start();
    session_start();
    require_once 'dbconnector.php';
    if ( !isset( $_SESSION['user'] ) ) {
        header("Location: login.php");
        exit;
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Sea View International</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Contact No.</td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>Room Type</td>
                    <td>Hall Name</td>
                    <td>No. Of Rooms</td>
                    <td>No. Of Persons</td>
                    <td>Ask Anything</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'dbconnector.php';
                    $query = $mysqli->query("SELECT * FROM bookings");
                    while ( $row = mysqli_fetch_array($query) ) {
                        echo "<tr>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['contactno'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['roomtype'] . "</td>";
                        echo "<td>" . $row['hallname'] . "</td>";
                        echo "<td>" . $row['roomsquant'] . "</td>";
                        echo "<td>" . $row['personsquant'] . "</td>";
                        echo "<td>" . $row['anything'] . "</td>";
                        echo "</tr>";
                    }
                 ?>
             </tbody>
         </table>
         <a href="login.php">Logout</a>
    </div>

    <style media="screen">
        table {
            margin: 30px 0 0 0;
            border-spacing: 0;
            border-collapse: collapse; }
            table td {
                color: #FFF;
                padding: .5em 1em;
                border: 1px solid #FFF; }
                table thead td {
                    font-weight: 900; }
        a {
            color: #FFF;
            display: block;
            margin: 30px;
        }
    </style>
</body>
</html>
<?php ob_end_flush(); ?>
