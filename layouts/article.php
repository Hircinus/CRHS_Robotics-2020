	<div class="parallax"><style>.parallax {background-image: url("../assets/<?php echo $topbgimgsrc ?>");}</style></div>
	<div class="container">
		<div id="firstrow" class="row bg-light-j">
			<div class="col-12">
				<h2 class="article-title"><?php echo $articletitle ?></h2>
				<h3 class="article-tag"><a href="<?php echo $tagsrc ?>" class="<?php if($tag == 'Tech') { echo 'blue'; } if($tag == 'Important') { echo 'green'; } else { echo ''; } ?>"><?php echo $tag ?></a></h3>
				<p><em>Jacob Alfahad</em></p>
            <hr class="article-title-hr">
			</div>
		</div>
		<div id="row" class="row justify-content-center">
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
