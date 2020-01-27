<?php
$title = "Articles - CRHS Robotics 2020";
require 'layouts/header.php';
$sidebar = TRUE;
$links = ["Personal", "Info", "General"];
?>
<a name="Personal"></a>
<div id="row" class="row justify-content-center">
  <div class="col-11">
    <h2>Personal experience articles</h2>
    <hr class="outer-divider">
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
  <?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "55";
	$img_alt = "First year";
	$type = "Personal";
	$title = "First year";
	$desc = "This year was the year of the rookies who were just learning about robotics from the more senior members, and video team,
  my team, was no exception.";
	require 'layouts/article-card.php';
	?>
  <?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "41";
	$img_alt = "Building a website: a task like no other";
	$type = "Personal";
	$title = "Building a website: a task like no other";
	$desc = "Already, my third and last year of the CRC with CRHS has arrived. It seems only mere moments ago I was beginning to work
  on the first ever site I would create for them.";
	require 'layouts/article-card.php';
	?>
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
</div>
<a name="Info"></a>
<div id="row" class="row justify-content-center">
  <div class="col-11">
    <h2>Informational articles</h2>
    <hr class="outer-divider">
  </div>
  <?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "01";
	$img_alt = "The robot chronicles: arm extender";
	$type = "Info";
	$title = "The robot chronicles: arm extender";
	$desc = "One of the most important parts of the robot is how we plan on interacting with the various actuators on the
  playing field. The robot team discussed multiple types of arms that will accomplish this task. I took part in making
  one of the arms.";
	require 'layouts/article-card.php';
	?>
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
  <?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "42";
	$img_alt = "A darkness in light";
	$type = "Info";
	$title = "A darkness in light";
	$desc = "The team of web/journalism is the combination of both web design and the documentation of events in Centennial’s
  Robotics. It’s here that the content of the website is produced, as well as all the coding making up its structure.";
	require 'layouts/article-card.php';
	?>
</div>
<a name="General"></a>
<div id="row" class="row justify-content-center">
  <div class="col-11">
    <h2>General articles</h2>
    <hr class="outer-divider">
  </div>
  <?php
	$col = "col-lg-6 col-md-6 col-sm-12 col-12";
	$id = "52";
	$img_alt = "Robotics Alumni Edition";
	$type = "General";
	$title = "Robotics Alumni Edition";
	$desc = "As the years go by and the CRC competition continues, it’s important to look back at some of the students who played a
  big role in the robotics team at Centennial and look at their contributions here and take a look at where they are now.";
	require 'layouts/article-card.php';
	?>
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
</div>
<?php
require 'layouts/footer.php';
?>
