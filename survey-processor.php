<?php

	$dbhost = "localhost";
	$dbuser = "";
	$dbpass = "";
	$dbname = "";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>

<!doctype html>
<html>
<head>
	<title>Thank you</title>
</head>
<body>

	<h1>Status</h1>
    <h2>Thank you <?php echo $_POST["firstname"]; ?> for your response!</h2>
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

</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>