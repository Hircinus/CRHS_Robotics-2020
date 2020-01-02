<?php
$title = "CRHS Robotics 2020 - ESPN Home";
require 'layouts/header.php';
?>
<!--
<div id="homerow" class="row justify-content-center align-items-center">
	<div class="col-lg-7 col-md-12 col-sm-12 col-12">
		<h1>
      CRHS
      <br>
      ROBOTICS
      </h1>
      <hr>
      <h2>2020 Edition</h2>
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12 col-12">
    <a class="btnlink" href="about">Who are we?</a>
    <a class="btnlink" href="team">Our team</a>
	</div>
</div>
-->
<div id="row" class="row justify-content-center">
	<div id="side-card" class="col-lg-3 col-md-0 col-sm-0 col-0">
    <h3>Some lonks</h3>
		<hr class="inner-divider">
    <a class="link" href="#">First meeting: what's the game plan?</a><br>
    <a class="link" href="#">Robot team's thoughts</a><br>
    <a class="link" href="#">Video team's thoughts</a><br>
    <a class="link" href="#">Kiosk team's thoughts</a>
  </div>
	<?php
	$col = "col-6";
	$id = "01";
	$img_alt = "Yeet";
	$Type = "Tech";
	$title = "Funny title, did laugh";
	$desc = "A funny title. That's all.";
	require 'layouts/article-card.php';
	?>
	<div id="side-card" class="col-lg-3 col-md-0 col-sm-0 col-0">
    <h3>Headlines</h3>
		<hr class="inner-divider">
    <a class="link" href="#">A day in the life of: robot team</a><br>
    <a class="link" href="#">A day in the life of: kiosk team</a><br>
    <a class="link" href="#">A day in the life of: web team</a><br>
    <a class="link" href="#">A day in the life of: journalism team</a>
  </div>
</div>
<div id="row" class="row justify-content-center">
  <div class="col-lg-3 col-md-0 col-sm-0 col-0">
  </div>
	<?php
	$col = "col-6";
	$id = "11";
	$img_alt = "Yeet2";
	$Type = "Important";
	$title = "Another title, did laugh";
	$desc = "Another funny title. That's all.";
	require 'layouts/article-card.php';
	?>
  <div id="side-card" class="col-lg-3 col-md-0 col-sm-0 col-0">
    <h3>Did you know?</h3>
		<hr class="inner-divider">
    <p>The CRC has been running for over <strong>19</strong> years, with CRHS participating for the last <strong>5</strong> years!</p>
  </div>
</div>
<div id="lastrow" class="row justify-content-center">
	<div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12">
		<div class="card">
		  <a href="article/1"><img class="img-fluid" src="assets/stock.jpg" data-src="assets/stock.jpg" alt="Card image cap"></a>
		  <div class="card-body important-article">
				<a href="article/important" class="tag">Important</a>
				<h5 class="card-title">An article</h5>
				<p class="card-text">Cool text to make you wanna learn more about something.</p>
				<a href="article/11" class="link">Keep reading</a>
		  </div>
		</div>
	</div>
</div>
<?php
require 'layouts/footer.php';
?>
