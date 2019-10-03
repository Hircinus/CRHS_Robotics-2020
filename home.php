<?php
$title = "CRHS Robotics 2020 - ESPN Home";
require 'layouts/header.php';
?>
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
<div id="row" class="row justify-content-center">
   <div id="side-card" class="col-lg-3 col-md-0 col-sm-0 col-0">
      <h3>Some lonks</h3>
      <ul class="no_bullet">
         <li><a class="link" href="#">Link</a></li>
         <li><a class="link" href="#">Link</a></li>
         <li><a class="link" href="#">Link</a></li>
         <li><a class="link" href="#">Link</a></li>
      </ul>
   </div>
	<div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12">
		<div class="card">
		  <a href="article/01"><img class="img-fluid" src="assets/stock.jpg" alt="Card image cap"></a>
		  <div class="card-body tech-article">
			<a href="article/tech" class="tag">Tech</a>
			<h5 class="card-title">An article</h5>
			<p class="card-text">Cool text to make you wanna learn more about something.</p>
			<a href="article/01" class="link">Keep reading</a>
		  </div>
		</div>
	</div>
   <div class="col-lg-3 col-md-0 col-sm-0 col-0">
   </div>
</div>
<div id="row" class="row justify-content-center">
	<div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12">
		<div class="card">
		  <a href="article/1"><img class="img-fluid" src="assets/stock.jpg" alt="Card image cap"></a>
		  <div class="card-body important-article">
			<a href="article/important" class="tag">Important</a>
			<h5 class="card-title">An article</h5>
			<p class="card-text">Cool text to make you wanna learn more about something.</p>
			<a href="article/12" class="link">Keep reading</a>
		  </div>
		</div>
	</div>
</div>
<div id="lastrow" class="row justify-content-center">
	<div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12">
		<div class="card">
		  <a href="article/1"><img class="img-fluid" src="assets/stock.jpg" alt="Card image cap"></a>
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