<?php
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

$counter = $_POST['counter'];
$fname = Trim(stripslashes($_POST['first']));
$lname = Trim(stripslashes($_POST['last']));
$email = Trim(stripslashes($_POST['email']));
$album = Trim(stripslashes($_POST['favorite-album']));
$crawling = Trim(stripslashes($_POST['crawling-check']));
$intheend = Trim(stripslashes($_POST['intheend-check']));
$faint = Trim(stripslashes($_POST['faint-check']));
$numb = Trim(stripslashes($_POST['numb-check']));
$what = Trim(stripslashes($_POST['what-check']));
$favsong = Trim(stripslashes($_POST['favorite-song']));
$message = htmlspecialchars($_POST['message']);

$fname = mysqli_real_escape_string($connection, $fname);
$lname = mysqli_real_escape_string($connection, $lname);
$email = mysqli_real_escape_string($connection, $email);
$album = mysqli_real_escape_string($connection, $album);
$crawling = mysqli_real_escape_string($connection, $crawling);
$intheend = mysqli_real_escape_string($connection, $intheend);
$faint = mysqli_real_escape_string($connection, $faint);
$numb = mysqli_real_escape_string($connection, $numb);
$what = mysqli_real_escape_string($connection, $what);
$favsong = mysqli_real_escape_string($connection, $favsong);

$query  = "UPDATE survey SET ";
$query .= "fname = '$fname', lname = '$lname', email = '$email', album = '$album', crawling = '$crawling', intheend = '$intheend', faint = '$faint', numb = '$numb', what = '$what', favsong = '$favsong', message = '$message' ";
$query .= "WHERE counter = {$counter}";
$result = mysqli_query($connection, $query);
?>



<?php
$currentTitle = "Update Database";
include "inc/top.inc";
?>

<h2>Status</h2>

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

<?php
include "inc/bottom.inc";
?>

<?php
// 5. Close database connection
mysqli_close($connection);
?>