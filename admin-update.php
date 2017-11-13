<?php
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangha";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shanghai";

	$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

	$counter = $_POST['counter'];
	$updatedField1 = Trim(stripslashes($_POST['field1']));
	$updatedField2 =  Trim(stripslashes($_POST['field2']));

	$query  = "UPDATE survey SET ";
	$query .= "databaseField1 = '$updatedField1', databaseField1 = '$updatedField2' ";
	$query .= "WHERE counter = {$counter}";
	$result = mysqli_query($connection, $query);
	?>

	

	<!doctype html>
	<html>
	<head>
		<title>Update Entry</title>
	</head>

    <h1>Status</h1>
		
		<?php
			if ($result) {
			?>
			    <div>
			        The record <?php echo $_POST['counter'] ?> has been updated.
			    </div>

			<?php
			} else {
			    die("Database query failed.");
			}
			?>

		<a href="admin.php">Return to Admin Page</a>

	</body>
	</html>
	

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>