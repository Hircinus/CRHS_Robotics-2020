<?php
$title = "Tech articles - CRHS Robotics 2020";
require '../layouts/article-header.php';
?>
<div id="firstrow" class="row">
	<div class="col-12">
		<h1>Tech articles</h1>
	</div>
</div>
<div id="row" class="row justify-content-center">
	<div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12">
		<div class="card">
		  <a href="01"><img class="img-fluid" src="../assets/stock.jpg" alt="Card image cap"></a>
		  <div class="card-body tech-article">
			<a href="tech" class="tag">Tech</a>
			<h5 class="card-title">An article</h5>
			<p class="card-text">Cool text to make you wanna learn more about something.</p>
			<a href="01" class="btnlink">Learn more about it!</a>
		  </div>
		</div>
	</div>
</div>
<?php
require '../layouts/article-footer.php';
?>