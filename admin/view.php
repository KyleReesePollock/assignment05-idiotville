<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">

<title>View Records</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<?php
	include "includes/nav.inc";
	?>

</head>



<body>



<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connect-db.php');



// get results from database

$query = "SELECT * FROM urcscon3_survey";
$result = mysqli_query($connection, $query);




// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Name</th> <th>email</th> <th>certification</th> <th>experience</th> <th>skills</th> <th>reason</th> <th>degree</th> <th></th> <th></th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['email'] . '</td>';

echo '<td>' . $row['certification'] . '</td>';

echo '<td>' . $row['experience'] . '</td>';

echo '<td>' . $row['skills'] . '</td>';

echo '<td>' . $row['reason'] . '</td>';

echo '<td>' . $row['degree'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>