<?php
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangha";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shanghai";

	$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

	$query  = "DELETE FROM survey ";
	$query .= "WHERE counter = {$_POST['counter']} ";
	$query .= "LIMIT 1";
	$result = mysqli_query($connection, $query);
	?>

	

	<!doctype html>
	<html>
	<head>
		<title>Delete Entry</title>
	</head>
	<body>

		<h1>Status</h1>
		
		<?php
		if ($result) {
		?>
		    <div>
		        The record <?php echo $_POST['counter'] ?> has been deleted.
		    </div>

		<?php
		} else {
		    die("Database query failed.");
		}
		?>

		<ahre

	</body>
	</html>




	

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>