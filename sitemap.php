<?php
$title = "CRHS Robotics 2020 - Sitemap";
require 'layouts/header.php';
?>
<div id="firstrow" class="row">
	<div class="col-12">
		<h1>Sitemap</h1>
		<hr class="outer-divider">
	</div>
</div>
<div id="row" class="row">
	<div class="col-lg-4 col-md-6 col-sm-12 col-12">
		<h2>Main pages</h2>
		<hr class="inner-divider">
		<ul>
         <li><a href="home" class="link">Home</a></li>
         <li><a href="about" class="link">About</a></li>
         <li><a href="team" class="link">Team</a></li>
      </ul>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <h2>Articles</h2>
		<hr class="inner-divider">
		<ul>
         <li><a href="article/tech" class="link">Tech</a></li>
         <ul>
            <li><a href="article/01" class="link">Article 01</a></li>
            <li><a href="article/02" class="link">Article 02</a></li>
            <li><a href="article/03" class="link">Article 03</a></li>
         </ul>
         <li><a href="article/important" class="link">Important</a></li>
         <ul>
            <li><a href="article/11" class="link">Article 11</a></li>
            <li><a href="article/12" class="link">Article 12</a></li>
            <li><a href="article/13" class="link">Article 13</a></li>
         </ul>
      </ul>
	</div>
   <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <h2>Other pages</h2>
		<hr class="inner-divider">
		<ul>
         <li><a href="message_from_me" class="link">Message</a></li>
         <li><a href="how_to_make_a_site" class="link">How to make a site</a></li>
         <li><a href="sitemap" class="link">Sitemap</a></li>
      </ul>
	</div>
</div>
<?php
require 'layouts/footer.php';
?>
