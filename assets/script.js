// When the user scrolls down x amount, make navbar appear
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 105 || document.documentElement.scrollTop > 105) {
    document.getElementById("navbar").style.top = "0";
	document.getElementById("backtop").style.right = "50px";
  } else {
    document.getElementById("navbar").style.top = "-100px";
	document.getElementById("backtop").style.right = "-100px";
  }
}
function backToTop() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

// Category switching on "/articles.php"
var important_button = document.getElementById('important_button');
var tech_button = document.getElementById('tech_button');
// function to retrieve cookie (generated with PHP based on $_GET[] value)
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
// Check cookie value against possible categories and displays appropriate ones
if(getCookie("cat") == "tech") {
  // Remove important
  var important = document.getElementById("important-container");
  important.style.display = "none";
  important_button.classList.remove("toggled");
}
if(getCookie("cat") == "important") {
  // Remove tech
  var tech = document.getElementById("tech-container");
  tech.style.display = "none";
  tech_button.classList.remove("toggled");
}
// Display categories based on "onclick" event
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

// Console message to show we're cool B)
console.log("I hope that you aren't trying to do anything sneaky... ;)");
