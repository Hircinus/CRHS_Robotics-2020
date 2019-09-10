// When the user scrolls down x amount, make navbar appear
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("navbar").style.top = "0";
	document.getElementById("backtop").style.right = "40px";
  } else {
    document.getElementById("navbar").style.top = "-80px";
	document.getElementById("backtop").style.right = "-80px";
  }
}
function backToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
console.log("I hope that you aren't trying to do anything sneaky... ;)");