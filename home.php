<?php
$title = "Home - CRHS Robotics 2020";
require 'layouts/header.php';
?>
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <h3>Our favorites</h3>
		<hr class="inner-divider">
    <a class="link" href="article/01">The robot chronicles: arm extender</a><br>
    <a class="link" href="article/21">The challenges of C++</a><br>
    <a class="link" href="article/41">Building a website: a task like no other</a><br>
		<a class="link" href="article/52">Robotics: alumni edition</a><br>
    <a class="link" href="article/53">One week to go</a>
  </div>
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "54";
	$img_alt = "Final rosters for robotics competition";
	$type = "General";
	$title = "Final rosters for robotics competition";
	$desc = "The 2<sup>nd</sup> overall placed team from last year’s competition has released their final roster for FLIP 2020. This
  year’s team includes a lot of new faces as a large core of the team from last year graduated last spring. To find new
  team members a recruitment process took place.";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/pizza_friday.jpg">
  </div>
</div>
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/fliplogo.jpg">
  </div>
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "51";
	$img_alt = "Deciding on a theme";
	$type = "General";
	$title = "Deciding on a theme";
	$desc = "The first and one of the most important steps in our process is deciding on what theme we would choose for our team. It
  affects most aspects of our work and we took this step very seriously.";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/hydroquebec.jpg">
  </div>
</div>
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/grad.jpg">
  </div>
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "21";
	$img_alt = "The challenges of C++";
	$type = "Info";
	$title = "The challenges of C++";
	$desc = "
  As part of this robotics competition, the CRC has demanded us to prove our ability to program via 15 problems of
  increasing difficulty. I, with my fellow programmer Mr. Zaman, stepped up to face this challenge and prove ourselves
  worthy of participating in the grand competition. Needless to say, we were unprepared.
  ";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-12 col-12">
    <h3>Fun fact!</h3>
		<hr class="inner-divider">
    <p>Our principal, Sherry Tite, was named “Athlete of the Year” when she graduated from Centennial in 1980.</p>
  </div>
</div>
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-12 col-12">
    <h3>Did you know?</h3>
		<hr class="inner-divider">
    <p>The CRC has been running for over <strong>19</strong> years, with CRHS participating since <strong>2014</strong>!</p>
  </div>
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "53";
	$img_alt = "One week to go";
	$type = "Personal";
	$title = "One week to go";
	$desc = "There are roughly two weeks until most of my work as a journalist is due. As usual, things are becoming
  increasingly tense as our deadline nears. You can feel the anxiety heavy in the air, and the constant pressure
  weighing on every member of the Centennial Robotics Team.";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/shirt.jpg">
  </div>
</div>
<?php
require 'layouts/footer.php';
?>
