<?php
require 'layouts/header.php';
?>
<div id="row" class="row justify-content-center">
  <div class="col-12 text-center"><em>Select a category (or categories) to filter by.</em></div>
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
      <div class="card-body tech-article">
        <a href="article/tech" class="tag">Tech</a>
        <h5 class="card-title">An article</h5>
        <p class="card-text">Cool text to make you wanna learn more about something.</p>
        <a href="article/01" class="link">Keep reading</a>
      </div>
    </div>
  </div>
  <div id="article" class="col-lg-6 col-md-9 col-sm-12 col-12 important">
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
<script>
var important_button = document.getElementById('important_button');
var tech_button = document.getElementById('tech_button');
// Article filter selection
function showImportant() {
  var important = document.getElementById("important-container");
  if (important.style.display === "none") {
    important.style.display = "block";
    important_button.classList.add("toggled");
  } else {
    important.style.display = "none";
    important_button.classList.remove("toggled");
  }
}
function showTech() {
  var tech = document.getElementById("tech-container");
  if (tech.style.display === "none") {
    tech.style.display = "block";
    tech_button.classList.add("toggled");
  } else {
    tech.style.display = "none";
    tech_button.classList.remove("toggled");
  }
}
</script>
<?php
require 'layouts/footer.php';
?>
