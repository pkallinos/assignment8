<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangha";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shanghai";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query  = "SELECT * ";
	$query .= "FROM survey ";
	$query .= "ORDER BY counter ASC";

	$result = mysqli_query($connection, $query);	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Administrator Page</h1>


	<?php
		while($survey = mysqli_fetch_assoc($result)) {
	?>

			<tr>
				<td><?php echo $pages["counter"]; ?></td>
				<td><?php echo $pages["fname"]; ?></td>
				<td><?php echo $pages["lname"]; ?></td>
				<td><?php echo $pages["email"]; ?></td>
				<td><?php echo $pages["album"]; ?></td>
				<td><?php echo $pages["song"]; ?></td>
				<td><?php echo $pages["favsong"]; ?></td>
				

			</tr>
			<?php
			$counter = $_POST['counter'];
			$updatedField1 = Trim(stripslashes($_POST['field1']));
			$updatedField2 =  Trim(stripslashes($_POST['field2']));

			$query  = "UPDATE mytable SET ";
			$query .= "databaseField1 = '$updatedField1', databaseField1 = '$updatedField2' ";
			$query .= "WHERE counter = {$counter}";
			$result = mysqli_query($connection, $query);
			?>

	<?php } ?>
	
	

		</table>

	<a href="index.html">Back to HTML form</a>


</body>
</html>
<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
