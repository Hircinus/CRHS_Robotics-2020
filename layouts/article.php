	<div class="parallax"><style>.parallax {background-image: url("../assets/<?php echo $topbgimgsrc ?>");}</style></div>
	<div class="container">
		<div class="firstrow row">
			<div class="col-12">
				<h2 class="article-title"><?php echo $articletitle ?></h2>
			</div>
			<div class="col-12">
				<hr class="article-title-hr">
			</div>
		</div>
		<div class="row justify-content-around">
			<p class="article-body"><?php echo $articlebody ?></p>
		</div>
		<div class="lastrow row justify-content-around">
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