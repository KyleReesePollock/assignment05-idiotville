<?php
	// step 1: create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_jhirs10";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_jhirs10";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// you really should escape all strings
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$skills = Trim(stripslashes($_POST['skills']));
	$certification = Trim(stripslashes($_POST['certification']));
	$experience = Trim(stripslashes($_POST['experience']));
	$reason = $_POST['reason'];
	$degree = $_POST['degree'];
	
	// step2: Perform a Database Query
mysqli_query($connection, "INSERT urcscon3_survey SET name='$name', email='$email', certification='$certification', experience='$experience', skills='$skills', reason='$reason', degree='$degree'")

or die(mysql_error());
?>
<html>
	<body>
		<header>

		</header>
			<div class="container">

			<section>
				
				<h2>Thank You for Applying!</h2>

				<p>To go back, click:</p>
				<a class="Home Page" href = "index.php">Here</a>

			</section>

	</div>
	</body>
</html>
<?php
// Step4: Release returned data (if any) - do not need in this case
// mysqli_free_result($result);

// Step5: Close the Connection to the Database
mysqli_close($connection);
?>
