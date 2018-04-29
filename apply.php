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

<h2>Apply for Idiotville</h2>

<form method="post" action="form-processor.php">
		<label for="name">Name</label>
		<input type="text" name="name">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email">
		<br>
		<label for="certification">Most Notable Certification</label>
		<input type="text" name="certification">
		<br>
		<label for="experience">Link to GitHub profile</label>
		<input type="text" name="experience">
		<br>
		<label for="skills">Which skills do you possess?</label>
		<input type="text" name="skills">
		<br>

		<fieldset>
			<legend><h3>What is your reason for applying?</h3></legend>

				<label for="support">Must support a family</label>
				<input type="radio" name="reason" id="support" value="support">

				<br>

				<label for="flexibility">Professional Flexibility</label>
				<input type="radio" name="reason" id="flexibility" value="flexibility">

				<br>

				<label for="income">Extra-side income</label>
				<input type="radio" name="reason" id="income" Value="income">

		</fieldset>

		<br>

		<fieldset>
			<legend><h3>What is your highest level of education?</h3></legend>

				<label for="PhD">PhD</label>
				<input type="radio" name="degree" id="PhD" value="PhD">

				<br>

				<label for="masters">Masters</label>
				<input type="radio" name="degree" id="masters" value="masters">


				<br>
				<label for="Bachelors">Bachelors</label>
				<input type="radio" name="degree" id="Bachelors" Value="Bachelors">

				<br>
				<label for="Associates">Associates</label>
				<input type="radio" name="degree" id="Associates" Value="Associates">

				<br>
				<label for="High-school">High-school</label>
				<input type="radio" name="degree" id="High-school" Value="High-school">

		</fieldset>
		<br><br>
		<input type="submit" name="submit" value="Apply to Idiotville">
</form>




</body>


</html>
