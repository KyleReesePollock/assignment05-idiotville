<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../login.php");
  exit;
}
?>

<!doctype html>
<?php $thisPage="About"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>Company Information</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<?php
	include "includes/nav.inc";
	?>

</head>
<body>

<h2>Our Team</h2>
<div class="card-container">

	<div class="card">
		<h3><strong>Chief Information Architect</strong></h3>
		<img src="images/kurt.png" alt="Kurt pro pick">
		<p>Kurtis Haut is our Chief Information Architect. He has a background in business and computer science, receiving dual degrees from the University of Rochester this May. Kurtis believes in connecting people to the content that they are looking for.</p>
	</div>

	<div class="card">
		<h3><strong>Chief Coder</strong></h3>
		<img src="images/jon.jpg" alt="Jon pro pick">
		<p>Jonathan Hirsch is our Chief Coder. He is heading into his senior year at the University of Rochester with a full head of steam. Jon has a background in mathematics and computer science. He is pursuing a major in mathematics with a minor in computer science. Jon believes that perfect code never breaks. </p>
	</div>

	<div class="card">
		<h3><strong>Chief Designer</strong></h3>
		<img src="images/kyle.jpg" alt="Kyle pro pic">
		<p>Kyle Pollock is our Chief Designer. He is graduating with a degree in computer science as well as business marketing from the University of Rochester this May. Kyle believes that perception is reality and looks to apply his marketing expertise to the digital world</p>
	</div>

</div>


<div class="card-container">

	<div class="card">
		<h3>Who We are</h3>
		<ul>
			<li>newly formed company</li>
			<li>specializing in front-end development</li>
			<li>catering to new and existing businesses</li>
		</ul>
	</div>


	<div class="card">
		<h3>What We Do</h3>
		<ul>
			<li>create business for business</li>
			<li>with the latest front-end development technology</li>
		</ul>
	</div>

	<div class="card">
		<h3>How We Do</h3>
		<ul>
			<li>with developers from around the word</li>
			<li>we leverage cutting edge technology</li>
			<li>to make one of a kind websites for our customers</li>
		</ul>
	</div>

	<div class="card">
		<h3>Why We Do</h3>
		<ul>
			<li>we believe that first impressions are everything</li>
			<li>we believe that companies could do better at expressing their value in a way that creatively appeals to their customers</li>
			<li>We want to make your first digital impression perfect</li>
		</ul>
	</div>

</div>

<img id="puzzle-pic" src="images/about.jpg" alt="puzzle pieces">


</body>

</html>
