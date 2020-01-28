// If window width is equal to or less than 1150px,
// scroll user down to content after navbar
if(window.innerWidth <= 1150) {
  if(location.hash == "") {
    location.hash = "#target";
    location.reload();
  }
}
// When the user scrolls down x amount, make navbar appear
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
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

// Console message to show we're cool B)
console.log("I hope that you aren't trying to do anything sneaky... ;)");
