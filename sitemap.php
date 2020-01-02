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
				 <li><a href="crc" class="link">The CRC</a></li>
				 <li><a href="robot" class="link">Our robot</a></li>
    </ul>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <h2>Articles</h2>
		<hr class="inner-divider">
		<ul>
				<li><a href="articles" class="link">Articles</a></li>
         <li>Tech</li>
         <ul>
            <li><a href="article/01" class="link">Article 01</a></li>
            <li><a href="article/02" class="link">Article 02</a></li>
            <li><a href="article/03" class="link">Article 03</a></li>
         </ul>
         <li>Important</li>
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
         <li><a href="humans.txt" class="link">humans.txt</a></li>
      </ul>
	</div>
</div>
<?php
require 'layouts/footer.php';
?>
