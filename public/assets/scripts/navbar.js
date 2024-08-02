// navbar code to instead of repeating the content in the nav bar and in the canvas
// use js so when the nav bar is loaded in html   you have to copy paste the content
// you have to use this everyWhere you use the User Navbar


document.addEventListener('DOMContentLoaded', function() {
    var navbarContent = document.getElementById('navbarContent').innerHTML;
    document.getElementById('offcanvasNavbarContent').innerHTML = navbarContent;
  });
  