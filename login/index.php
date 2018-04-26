<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>


<?php include "inc/html-top.inc"; ?>

<body>
<div class="container">
	<div class="row justify-content-center">
	<div class="row">
		<header>
			<h1>Jonathan Hirsch - Mathematics B.S</h1>

		</header>
	</div>
</div>

<?php include "inc/nav.inc"; ?>

<div class="top-buffer">
<div class="row">
<div class="row align-items-start">
<div class="row justify-content-center">
<div class="col-md-5">

	<h2>Early Life and Education:</h2>

	<p>I was born in New Orleans in July, 1997 but moved to Greensboro, NC shortly after.  I grew up in Greensboro and went to a few different schools including a catholic school, a Montessori School and finally the Greensboro Day School through high school.  Now, I am a student at the University of Rochester studying mathematics and computer science.</p>
</div>

<div class="col-md-3">

	<figure class="figure1">
		<img src="images/portrait.jpg" class="img-fluid rounded float-right" alt="Self Portrait">
	</figure>

</div>
</div>
</div>
</div>
</div>

<div class="top-buffer">
<div class = "row">

<div class="col-md-8">
	<h2>Courses Taken:</h2>

	<p>At the University of Rochester, I was expected to take two clusters not in the same grouping as my major, along with my actual mathematics BS.  For my humanities cluster, I decided to take classes in Philosophy.  Freshman year, I took Philosophy 102 which is on general ethics.  I then went back to take PHL 101 and PHL 225 during my sophomore year which completed my first cluster.</p>  
	<p>My second cluster was in Social Science and so I ended up choosing Psychology.  I knew I was interested in psychology before I came to college and so I knew I wanted to take this as a cluster and possibly even a minor, although I have since chosen to keep it a cluster.  I took Psychology 101 and PSY 161 freshman year, and finished the cluster over the summer in 2016 by taking PSY 181.</p>

	<p>I started taking Computer Science courses during second semester sophomore year just to have some programming ability in python, but I ended up being fascinated by it.  While I took CSC 161, I realized that I enjoyed coding and from there decided to minor in Computer Science.  From there I took CSC 170 which was introductory web design and as of my present semester, I am taking CSC 174, the advanced web design course as well as CSC 171, an introductory coding course using Java.  I plan to continue taking more of these courses until I graduate to further my knowledge in Computer Science.</p>
	<p>Mathematics was not always my intended major, but rather a fallback when I withdrew from physics 141 during my freshman year first semester. I ultimately dropped my physics major and since I was already taking math classes and was enjoying those, I chose to call math my major.  At this time, I have taken all the calculus classes in the MTH 160’s track and begun to work on higher level math courses including MTH 200w, MTH 201, MTH 208, MTH 235, and MTH 265.  During my current semester, I am also taking MTH 240 and MTH 300w.  I will finish my major by the end of the next school year when I plan to graduate.</p>

	<p>Lastly, I have taken a few seemingly random courses outside of my required courses for my major.  WRT 105, AST 102, FIN 205 and STT 212.  Of these, WRT 105 and STT 212 were required, but I chose independently to take a finance and astronomy course.  I found that having knowledge of finance when choosing a mathematics degree will probably help when job hunting as many Mathematics jobs are in the financial field.  It seemed natural to take at least one finance course, and I plan on taking a more in-depth math and finance course next year.  I took the astronomy course because I just love to learn about the subject.  AST 102 is about Black Holes and Time Warps and was easily my favorite class I have taken at the University of Rochester.</p>
</div>

<div class="col-md-4">
	<h2>Jobs:</h2>

	<p>My first “job” was a research experience over the summer of 2014.  I got to be an assistant to Dr. Steve Danford at the University of North Carolina Greensboro (UNCG), and helped analyze spectroscopy data of B[e] class stars.  Astro-Physics will always be a love of mine, and being able to take part in that line of research was a huge opportunity for me.</p>

	<p>In the summer of 2017, I ended up with a job at Lowes in Mobile, Al as a sales associate.  My duties included keeping shelves stocked and presentable, helping customers in my area find what they needed as well as pushing the sales of lawn mowers and grills on unsuspecting customers.  I enjoyed having a job that summer, but it was not one I wanted to continue to have in the future.</p>

	<p>My most recent job was in the fall semester of 2017 where I worked as a Laboratory Teaching Assistant for an introductory computer science course (i.e. CSC 161).  That course teaches the language Python, and working as a TA to help other students write their programs really helped to improve my own skill.  I enjoyed that opportunity to work with other students in a leadership position and will be attempting to get other teaching assistant jobs in the next school year.</p>
</div>
</div>
</div>

</div>
<?php include "inc/scripts.inc"; ?>
</body>
</html>