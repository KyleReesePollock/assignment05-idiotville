<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $name, $email, $certification, $experience, $skills, $reason, $degree, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

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
				<input type="radio" name="reason" id="support" value="support">
				<label for="support">Must support a family</label>
				<input type="radio" name="reason" id="flexibility" value="flexibility">
				<label for="flexibility">Professional Flexibility</label>
				<input type="radio" name="reason" id="income" Value="income">
				<label for="income">Extra-side income</label>
		</fieldset>
		<br>
		<fieldset>
			<legend><h3>What is your highest level of education?</h3></legend>
				<input type="radio" name="degree" id="PhD" value="PhD">
				<label for="PhD">PhD</label>
				<input type="radio" name="degree" id="masters" value="masters">
				<label for="masters">Masters</label>
				<input type="radio" name="degree" id="Bachelors" Value="Bachelors">
				<label for="Bachelors">Bachelors</label>
				<input type="radio" name="degree" id="Associates" Value="Associates">
				<label for="Associates">Associates</label>
				<input type="radio" name="degree" id="High-school" Value="High-school">
				<label for="High-school">High-school</label>
		</fieldset>
		<br><br>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}







// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));

$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

$certification = mysqli_real_escape_string($connection, htmlspecialchars($_POST['certification']));

$experience = mysqli_real_escape_string($connection, htmlspecialchars($_POST['experience']));

$skills = mysqli_real_escape_string($connection, htmlspecialchars($_POST['skills']));

$reason = mysqli_real_escape_string($connection, htmlspecialchars($_POST['reason']));

$degree = mysqli_real_escape_string($connection, htmlspecialchars($_POST['degree']));



// check that firstname/lastname fields are both filled in

if ($name == '' || $email == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $name, $email, $certification, $experience, $skills, $reason, $degree, $error);

}

else

{

// save the data to the database

mysqli_query($connection, "UPDATE urcscon3_survey SET name='$name', email='$email', certification='$certification', experience='$experience', skills='$skills', reason='$reason', degree='$degree' WHERE id='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM urcscon3_survey WHERE id=$id")

or die(mysql_error());

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$name = $row['name'];

$email = $row['email'];

$certification = $row['certification'];

$experience = $row['experience'];

$skills = $row['skills'];

$reason = $row['reason'];

$degree = $row['degree'];

// show form

renderForm($id, $name, $email, $certification, $experience, $skills, $reason, $degree, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>