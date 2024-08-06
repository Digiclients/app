
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>




<script>

  $(document).ready(function(){
  
  
  
  
  
    
  //   $('.togglesidebarplease').toggle(
  //     function(){
  //         $('.sub-menu-container i').animate({
  //             width: "150", 
              
  //         }, 500);
  //         // $('#otherdiv').animate({
  //         //     //otherdiv properties here
  //         // }, 500);
  //     },
  //     function(){
  //         $('.sub-menu-container i').animate({
  //           width: "35",
  //         }, 500);     
  //         // $('#otherdiv').animate({
  //         //     //otherdiv properties here
  //         // }, 500);
  // });
  
  
  

  
  
  
  
  
  
        $(".togglesidebarplease").click(function(){
          $('.sub-menu ul').slideUp("800");
         
  
          $(".leftside").toggleClass("minisidebar");
          $(".leftside").toggleClass("minisidebarnone");
          $(".leftsidefixed").toggleClass("minisidebar");
          $(".leftsidefixed").toggleClass("minisidebarblock");
          $(".rightside").toggleClass("fullwidth");
          $(".togglesidebarplease").toggleClass("responsivebutton");
  
          $(".insideacontainer").toggleClass("noEllipsis");
  
          
  
  
          $(".sub-menu-container .navitem").toggleClass("notvisible");
  
  
  
          $(".sub-menu-container .iconaside").toggleClass("iconsonchange");
  


          $(".sub-menu-container .iconaside").toggleClass("d-block mx-auto");
  
  
  
  
  
          $(".thelogo").toggleClass("thelogohide");
          
          $(".theicona").toggleClass("theiconashow");
          
  
  
  
  
          $(" .minisidebarblock .sub-menu").find(".rightarrowinthebar").addClass("fa-angle-right");
    $(" .minisidebarblock .sub-menu").find(".rightarrowinthebar").removeClass("fa-angle-down");
  
  
  
  
  
  
  
  
  
          
          
        });
      });
      
      
  
  
      $(".leftsidefixed").mouseenter(function(){
     
        
  
  
  
  if($( ".leftsidefixed" ).hasClass( "minisidebar" )){
  
    $(".leftsidefixed").removeClass("minisidebar");
  
    // $(".sub-menu-container a").show("800");
    
    $(".minisidebarblock .sub-menu-container .navitem").addClass("visible");
    $(".minisidebarblock .sub-menu-container .navitem").removeClass("notvisible");
  
  
    
    
    $(".sub-menu-container .iconaside").removeClass("iconsonchange");
    

    $(".minisidebar  .iconaside").removeClass("d-block");
    $(".minisidebar  .iconaside").removeClass("mx-auto");
    
    
    
    
    
    $(".thelogo").toggleClass("thelogohide");
    
    $(".theicona").toggleClass("theiconashow");
    
    
    $(".insideacontainer").removeClass("noEllipsis");
  
  
  }
  
  
  });
  
  
  
  $(".leftsidefixed").mouseleave(function(){
  
    if($( ".leftsidefixed" ).hasClass( "minisidebarblock" )){
  
     
     $(".insideacontainer").addClass("noEllipsis");
  
    }
  
  
  
      
    $(".minisidebarblock  .thelogo").toggleClass("thelogohide");
          
          $(".minisidebarblock .theicona").toggleClass("theiconashow");
  
  
          $(".minisidebar  .iconaside").addClass("d-block");
    $(".minisidebar  .iconaside").addClass("mx-auto");
  
  
  
  
    //$("").hide("800");
    
    $(".minisidebarblock .sub-menu-container .navitem").addClass("notvisible");
    $(".minisidebarblock .sub-menu-container .navitem").removeClass("visible");
     
    $('.minisidebarblock .sub-menu ul').slideUp("800");
  
   
  
  
    $(" .minisidebarblock .sub-menu-container .iconaside").addClass("iconsonchange");
  
    $(" .minisidebarblock .sub-menu").find(".rightarrowinthebar").addClass("fa-angle-right");
    $(" .minisidebarblock .sub-menu").find(".rightarrowinthebar").removeClass("fa-angle-down");
  
  
    // if(!$( ".leftsidefixed" ).hasClass("minisidebarblock")){
     
       $(".minisidebarblock").addClass("minisidebar");
     
     
     
    // }
     
  
  
  
  
  
  
  
  
     
     });
  
  
          $('.Dropdown-menu ul').hide();
    $(".Dropdown-menu").click(function () {
      $(this).children("ul").slideToggle("100");
      $(this).find(".rightarrowinthebar").toggleClass("fa-angle-down fa-angle-right");
    });
  
  
  
  
  
  
      
  
      // $('.leftsidefixedbar').jsScroll({
      //             position: 'right',
                  
      //             height: '100vh',
      //             railColor: '#000',
      //             barColor: '#403fad',
      //             borRadius: '0px',
      //             padding:1000 ,
      //             //width: '8px'
      //         });
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
              
  
      function toggleFullScreen(elem) {
      // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
      if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
          if (elem.requestFullScreen) {
              elem.requestFullScreen();
          } else if (elem.mozRequestFullScreen) {
              elem.mozRequestFullScreen();
          } else if (elem.webkitRequestFullScreen) {
              elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
          } else if (elem.msRequestFullscreen) {
              elem.msRequestFullscreen();
          }
      } else {
          if (document.cancelFullScreen) {
              document.cancelFullScreen();
          } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
          } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
          } else if (document.msExitFullscreen) {
              document.msExitFullscreen();
          }
      }


        


   if ($('.fullscreenicon').attr('data-icon') == "fluent:full-screen-maximize-24-filled") {
      $('.fullscreenicon').attr('data-icon' , 'fluent:full-screen-minimize-24-filled');
    } else {
      $('.fullscreenicon').attr('data-icon' , 'fluent:full-screen-maximize-24-filled');
    }


  



  }
  
  
  
  
  
  
  
  // START change the style mode name="mode"


  document.getElementsByName('Mode').forEach((ele) => {
ele.onclick = function(){
if(ele.checked === true){
  document.getElementById('stylecolors').href = ele.getAttribute('styledata');
}
  
}
})
  
  // END change the style mode name="mode"
  
  
  </script>
  
  
    </body>
  </html>