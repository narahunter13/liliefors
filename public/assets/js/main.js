/*
    Scroll hide navbar
*/
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("navbar_mobile").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100%";
    document.getElementById("navbar_mobile").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
}



/* 
    Smooth Scroll Link
*/
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


/*
  Alert Animation
*/
function click_alert() {
  var alert = document.getElementsByClassName('alert')[0];
  alert.style.opacity = 0;
  setTimeout(function() {
    alert.style.display = 'none';
  }, 300);
}