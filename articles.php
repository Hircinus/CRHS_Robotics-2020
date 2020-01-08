<?php
$title = "Articles - CRHS Robotics 2020";
require 'layouts/header.php';
if($_GET["category"] == "tech") {
  setcookie("cat","tech");
}
elseif($_GET["category"] == "important") {
  setcookie("cat","important");
}
else {
  setcookie("cat","");
}
?>
<div id="row" class="row justify-content-center">
  <div class="col-12 text-center"><p><em>Select a category (or categories) to filter by.</em></p></div>
  <div class="col-12 text-center">
  <button class="filter-button toggled" id="important_button" onclick="showImportant()" value="Important">Important</button>
  <button class="filter-button toggled" id="tech_button" onclick="showTech()" value="Tech">Tech</button>
  </div>
</div>
<div id="important-container">
<div id="row" class="row justify-content-center">
  <div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12 important">
    <div class="card">
      <a href="article/01"><img class="img-fluid" src="assets/stock.jpg" data-src="assets/stock.jpg" alt="Card image cap"></a>
      <div class="card-body important-article">
        <a href="" class="tag">Important</a>
        <h5 class="card-title">An article</h5>
        <p class="card-text">Cool text to make you wanna learn more about something.</p>
        <a href="article/01" class="link">Keep reading</a>
      </div>
    </div>
  </div>
  <div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12 important">
    <div class="card">
      <a href="article/01"><img class="img-fluid" src="assets/stock.jpg" data-src="assets/stock.jpg" alt="Card image cap"></a>
      <div class="card-body important-article">
        <a href="" class="tag">Important</a>
        <h5 class="card-title">An article</h5>
        <p class="card-text">Cool text to make you wanna learn more about something.</p>
        <a href="article/01" class="link">Keep reading</a>
      </div>
    </div>
  </div>
</div>
</div>
<div id="tech-container">
<div id="row" class="row justify-content-center">
  <div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12 tech">
    <div class="card">
      <a href="article/01"><img class="img-fluid" src="assets/stock.jpg" data-src="assets/stock.jpg" alt="Card image cap"></a>
      <div class="card-body tech-article">
        <a href="article/tech" class="tag">Tech</a>
        <h5 class="card-title">An article</h5>
        <p class="card-text">Cool text to make you wanna learn more about something.</p>
        <a href="article/01" class="link">Keep reading</a>
      </div>
    </div>
  </div>
</div>
</div>
<script src="assets/script.js">
</script>
<?php
require 'layouts/footer.php';
?>
