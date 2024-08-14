(function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); // end DOM ready
  })(jQuery); // end jQuery

  // Slider=====================>
  var index = 0;
  var slides = document.querySelectorAll(".slides");
  var dot = document.querySelectorAll(".dot");
  
  function changeSlide(){
  
    if(index<0){
      index = slides.length-1;
    }
    
    if(index>slides.length-1){
      index = 0;
    }
    
    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";
      dot[i].classList.remove("active1");
    }
    
    slides[index].style.display= "block";
    dot[index].classList.add("active1");
    
    index++;
    
    setTimeout(changeSlide,8000);
    
  }
  
  changeSlide();

  // Fade in/up Animation

  
