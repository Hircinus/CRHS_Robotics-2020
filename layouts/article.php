	<div class="parallax"><style>.parallax {background-image: url("../assets/<?php echo $topbgimgsrc ?>");}</style></div>
	<div class="container">
		<div id="firstrow" class="row bg-light-j">
			<div class="col-12">
				<h2 class="article-title"><?php echo $articletitle ?></h2>
				<h3 class="article-tag"><a href="tech-list" class="<?php if($tag == 'Tech') { echo 'blue'; } else { echo ''; } ?>"><?php echo $tag ?></a></h3>
				<em>Jacob Alfahad</em>
			</div>
			<div class="col-12">
				<hr class="article-title-hr">
			</div>
		</div>
		<div id="row" class="row justify-content-around">
			<p class="article-body"><?php echo $articlebody ?></p>
		</div>
		<div id="lastrow" class="row justify-content-around">
			<div class="col-6">
				<p class="article-foot"><?php echo $articlefoot ?></p>
			</div>
			<div class="col-6">
				<ul class="no_bullet">
					<li><a class="link" href="<?php echo $articlefootlinksrc1 ?>"><?php echo $articlefootlink1 ?></a></li>
					<li><a class="link" href="<?php echo $articlefootlinksrc2 ?>"><?php echo $articlefootlink2 ?></a></li>
					<li><a class="link" href="<?php echo $articlefootlinksrc3 ?>"><?php echo $articlefootlink3 ?></a></li>
				</ul>
			</div>
		</div>
	</div>