<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../login.php");
  exit;
}
?>

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

VIEW-PAGINATED.PHP

Displays all data from 'players' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include('connect-db.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$query = "SELECT * FROM urcscon3_survey";
$result = mysqli_query($connection, $query);

$total_results = mysqli_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - show first set of results

$start = 0;

$end = $per_page;

}

}

else

{

// if page isn't set, show first set of results

$start = 0;

$end = $per_page;

}



// display pagination



echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='view-paginated.php?page=$i'>$i</a> ";

}

echo "</p>";



// display data in table

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Name</th> <th>email</th> <th>certification</th> <th>experience</th> <th>skills</th> <th>reason</th> <th>degree</th> <th></th> <th></th></tr>";


function mysqli_result($res, $row, $field=0) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[$field]; 
} 

if ($i == $total_results - 2) { break; }
// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist


// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . mysqli_result($result, $i, 'id') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'name') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'email') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'certification') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'experience') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'skills') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'reason') . '</td>';

echo '<td>' . mysqli_result($result, $i, 'degree') . '</td>';

echo '<td><a href="edit.php?id=' . mysqli_result($result, $i, 'id') . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . mysqli_result($result, $i, 'id') . '">Delete</a></td>';

echo "</tr>";

}

// close table>

echo "</table>";



// pagination



?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>