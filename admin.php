<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "";
	$dbpass = "";
	$dbname = "";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query  = "SELECT * ";
	$query .= "FROM test ";
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
		while($pages = mysqli_fetch_assoc($result)) {
	?>

			<tr>
				<td><?php echo $pages[""]; ?></td>
				<td><?php echo $pages[""]; ?></td>
				<td><?php echo $pages[""]; ?></td>
				<td><?php echo $pages[""]; ?></td>

			</tr>

	<?php } ?>

		</table>




</body>
</html>