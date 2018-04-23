<!doctype html>
<?php $thisPage="Apply"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>Apply</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<?php
	include "includes/menu.nav";
	?>

</head>
<body>

<h1>Apply for Idiotville</h1>
<h2>First, Make an Account</h2>

<!--One form for each database  -->
<form method="post" action="apply.php">
		<label for="name">Name</label>
		<input type="text" name="name">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email">
		<br><br>
		<input type="submit" name="submit" value="Create Account">
</form>



<form method="post" action="thankyou.php">
		<label for="name">Reason</label>
		<input type="text" name="name">
		<br>
		<label for="email">Specialities</label>
		<input type="text" name="email">
		<br>
		<label for="email">Prior Experience</label>
		<input type="text" name="email">
		<br>
		<label for="email">Highest Degree Received</label>
		<input type="text" name="email">
		<br>
		<label for="email">Most Notable Certification</label>
		<input type="text" name="email">
		<br><br>
		<input type="submit" name="submit" value="Apply to Idiotville">
</form>




</body>


</html>