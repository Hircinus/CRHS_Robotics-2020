stylesheet = document.getElementById("stylesheet"); // DEFINE STYLESHEET
lightbutton = document.getElementById("lightbutton"); // DEFINE LIGHT BUTTON
darkbutton = document.getElementById("darkbutton"); // DEFINE DARK BUTTON
theme = localStorage.getItem("theme"); // DEFINE THEME IDENTIFIER
transitionTheme = document.getElementById("transition");
// DARK AND LIGHT THEME SWITCH
function darktheme() {
	transitionTheme.style.display = 'block';
	transitionTheme.addEventListener("animationend", darkthemeChange);
	transitionTheme.addEventListener("webkitAnimationEnd", darkthemeChange);
	function darkthemeChange() {
		stylesheet.href = "assets/style-dark.css";
		transitionTheme.style.display = 'none';
		localStorage.setItem("theme", "assets/style-dark.css");
		console.log("Theme changed to dark.");
		darkbutton.style.display = "none";
		lightbutton.style.display = "block";
	}
}
function lighttheme() {
	transitionTheme.style.display = 'block';
	transitionTheme.addEventListener("animationend", lightthemeChange);
	transitionTheme.addEventListener("webkitAnimationEnd", lightthemeChange);
	function lightthemeChange() {
		stylesheet.href = "assets/style.css";
		transitionTheme.style.display = 'none';
		localStorage.setItem("theme", "assets/style.css");
		console.log("Theme changed to light.");
		darkbutton.style.display = "block";
		lightbutton.style.display = "none";
	}
}
if (localStorage.getItem("theme") === null) {
	stylesheet.href = "assets/style.css";
	localStorage.setItem("theme", "assets/style.css");
}
else {
	stylesheet.href = theme; // CALL LOCAL STORAGE AND ASSIGN IT TO THEME
}

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

console.log("I hope that you aren't trying to do anything sneaky... ;)");
