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

	<?php
	$currentTitle = "Admin Page";
	include "inc/top.inc";
	?>

	<h1>Administrator Page</h1>

	<table border>
	<?php
		while($pages = mysqli_fetch_assoc($result)) {
	?>


			<tr>
				<td><?php echo $pages["counter"]; ?></td>
				<td><?php echo $pages["fname"]; ?></td>
				<td><?php echo $pages["lname"]; ?></td>
				<td><?php echo $pages["email"]; ?></td>
				<td><?php echo $pages["crawling"]; ?></td>
				<td><?php echo $pages["intheend"]; ?></td>
				<td><?php echo $pages["faint"]; ?></td>
				<td><?php echo $pages["numb"]; ?></td>
				<td><?php echo $pages["what"]; ?></td>
				<td><?php echo $pages["favsong"]; ?></td>
			</tr>
	<?php } ?>

	</table>


	<h2>Delete Entry</h2>	
	<form method="post" action="admin-delete.php">
		<label for="counter">Delete Entry (Choose Counter ID):</label>
        <input type="number" class="counter" name="counter" id="counter">

      	<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Submit"> 
    </form>

    <h2>Update Entry</h2>
    <form method="post" action="admin-update.php">
    	<label for="counter">Update Entry (Choose Counter ID):</label>
        <input type="number" class="counter" name="counter" id="counter">

      	<?php include "inc/survey.inc"; ?>

    </form>

<?php
include "inc/bottom.inc";
?>

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>
