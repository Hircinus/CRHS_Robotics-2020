<div id="article" class="<?php echo $col; ?>">
  <div class="card">
    <a href="/2020/article/fr/<?php echo $id; ?>"><img class="img-fluid lazy" src="/2020/assets/loading.gif" data-src="/2020/assets/<?php echo $id; ?>.jpg" alt="<?php echo $img_alt; ?>"></a>
    <div class="card-body <?php if($type == "G&eacute;n&eacute;ral"){echo "general";} else {echo strtolower($type);} ?>-article">
      <a href="/2020/fr/articles#<?php echo $type ?>" class="tag"><?php echo $type; ?></a>
      <h5 class="card-title"><?php echo $title ?></h5>
      <p class="card-text"><?php echo $desc; ?></p>
      <a href="/2020/article/fr/<?php echo $id; ?>" class="link">Continue la lecture</a>
    </div>
  </div>
</div>
