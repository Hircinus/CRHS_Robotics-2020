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
	$id = "02";
	$img_alt = "Rack and pinion prototype";
	$type = "Info";
	$title = "Rack and pinion prototype";
	$desc = "
  After a couple days of thinking, the time had come to begin prototyping. After the kickoff, the robot team split into
  small teams to try and create small scale prototypes in order to determine which ones would best suit the robot for
  Flip 2020.
  ";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/pizza_friday.jpg">
  </div>
</div>
<div id="row" class="row justify-content-center">
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
</div>
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-6 col-sm-11 col-11">
    <img class="lazy img-fluid" src="assets/loading.gif" data-src="assets/grad.jpg">
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
	<div class="col-lg-3 col-md-0 col-sm-0 col-0">
	</div>
</div>
<div id="row" class="row justify-content-center">
  <div class="col-lg-3 col-md-0 col-sm-0 col-0">
  </div>
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "22";
	$img_alt = "From rags to riches";
	$type = "Personal";
	$title = "From rags to riches";
	$desc = "Centennial’s robotics team. A glorious team to be on. It’s my first year being a part of the team. As a rookie who is
  graduating I kind of regret not joining the team earlier on. It is quite the experience.";
	require 'layouts/article-card.php';
	?>
  <div id="side-card" class="col-lg-3 col-md-6 col-sm-12 col-12">
    <h3>Did you know?</h3>
		<hr class="inner-divider">
    <p>The CRC has been running for over <strong>19</strong> years, with CRHS participating for the last <strong>5</strong> years!</p>
  </div>
</div>
<div id="lastrow" class="row justify-content-center">
	<?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "03";
	$img_alt = "Clean up time";
	$type = "General";
	$title = "Clean up time";
	$desc = "The robot room; the room where the robot gets built and programmed. To be completely honest this is probably the room
  that is the least organized in Centennial Regional High School.";
	require 'layouts/article-card.php';
	?>
</div>
<?php
require 'layouts/footer.php';
?>
