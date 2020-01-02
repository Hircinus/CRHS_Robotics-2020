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
