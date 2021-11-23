$(document).ready(function(){
  mybutton = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      $('#myBtn').fadeIn("slow");
      mybutton.style.display = "block";
    } else {
      $('#myBtn').fadeOut("slow");
    }
  }

})

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}