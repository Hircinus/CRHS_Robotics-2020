<div class="parallax"><style>.parallax {background-image: url("/2020/assets/<?php echo $topbgimgsrc ?>");}</style></div>
<div class="container">
  <div id="firstrow" class="row bg-light-j">
    <div class="col-12">
      <h2 class="article-title"><?php echo $articletitle ?></h2>
      <h3 class="article-tag"><a href="/2020/fr/articles#<?php echo $tag ?>" class="<?php
      if($tag == 'Personel') { echo 'green'; }
      elseif($tag == 'Info') { echo 'purple'; }
      elseif($tag == 'G&eacute;n&eacute;ral') { echo 'red'; }
      else { echo ''; } ?>"><?php echo $tag ?></a></h3>
      <a class="link" href="/2020/member/fr/<?php echo $authorLink ?>"><?php echo $author ?></a>
      <hr class="article-title-hr">
    </div>
  </div>
  <div id="lastrow" class="row justify-content-center">
    <p class="article-body"><?php echo $articlebody ?></p>
  </div>
</div>
