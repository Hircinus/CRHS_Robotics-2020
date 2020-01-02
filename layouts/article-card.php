<div id="article" class="<?php echo $col; ?>">
  <div class="card">
    <a href="article/<?php echo $id; ?>"><img class="img-fluid" src="assets/stock.jpg" data-src="assets/<?php echo $id; ?>.jpg" alt="<?php echo $img_alt; ?>"></a>
    <div class="card-body <?php echo strtolower($Type) ?>-article">
      <a href="articles?category=<?php echo strtolower($Type) ?>" class="tag"><?php echo $Type; ?></a>
      <h5 class="card-title"><?php echo $title ?></h5>
      <p class="card-text"><?php echo $desc; ?></p>
      <a href="article/<?php echo $id; ?>" class="link">Keep reading</a>
    </div>
  </div>
</div>
