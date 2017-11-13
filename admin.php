<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangha";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shanghai";

	$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

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
	<title>Admin Page</title>
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
	

			<form method="Post" action="admin-delete.php">
				 <label for="couter">Delete Entry (Choose Counter ID):</label>
            	 <input type="number" class="counter" name="fcounter" id="counter">


	
	

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
