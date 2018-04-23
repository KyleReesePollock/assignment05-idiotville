<!doctype html>
<?php $thisPage="Login"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<?php
	include "includes/menu.nav";
	?>

</head>
<body>


<form method="post" action="index.php">
		<label for="email">Email</label>
		<input type="text" name="email">
		<br><br>
		<input type="submit" name="submit" value="Sign In">
</form>


</body>


</html>