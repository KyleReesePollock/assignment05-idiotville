<?php
	// step 1: create a database connection
include('connect-db.php');

	// you really should escape all strings
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$skills = Trim(stripslashes($_POST['skills']));
	$certification = Trim(stripslashes($_POST['certification']));
	$experience = Trim(stripslashes($_POST['experience']));
	$reason = $_POST['reason'];
	$degree = $_POST['degree'];
	
	// step2: Perform a Database Query
	$query = "INSERT INTO urcscon3_survey(name, email, reason, skills, experience, degree, certification) VALUES ('$name', '$email', '$reason', '$skills', $experience', '$degree', '$certification')";
	$result = mysqli_query($connection, $query);
?>

<?php include "inc/html-top.inc"; ?>

	<body>
		<header>

		</header>
			<div class="container">
				
				<?php
					if ($result) {
						echo "Success! The query did not error out";
					} else {
						die ("Database query failed!");}
 				?>

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
