<?php

	$dbhost = "localhost";
	$dbuser = "urcscon3_shangha";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shanghai";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


// Often these are form values in $_POST
	$fname = Trim(stripslashes($_POST['first']));
	$lname = Trim(stripslashes($_POST['last']));
	$email = Trim(stripslashes($_POST['email']));
	$album = Trim(stripslashes($_POST['favorite-album']));
	$song = Trim(stripslashes($_POST['song']));
	$favsong = Trim(stripslashes($_POST['favorite-song']));
	
	// Escape all strings
	$fname = mysqli_real_escape_string($connection, $fname);
	$lname = mysqli_real_escape_string($connection, $lname);
	$email = mysqli_real_escape_string($connection, $email);
	$album = mysqli_real_escape_string($connection, $album);
	$song = mysqli_real_escape_string($connection, $song);
	$favsong = mysqli_real_escape_string($connection, $favsong);
	

	// 2. Perform database query
	$query  = "INSERT INTO survey (";
	$query .= "  fname, lname, email, album, song, favsong";
	$query .= ") VALUES (";
	$query .= "  '{$fname}', '{$lname}', '{$email}', '{$album}', '{$song}', '{$favsong}' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title>Thank you</title>
</head>
<body>

	<h1>Status</h1>
    <h2>Thank you <?php echo $_POST["first"]; ?> for your response!</h2>
    <a href="index.php">Return back to survery</a>

<?php
	if ($result) {
		echo "Thank you for completing the survey";

?>


<?php

	} else {
		die("Failed to record answers. Please try again");
	}
?>
	<a href="admin.php">Content</a>

</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>
