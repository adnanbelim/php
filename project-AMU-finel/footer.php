<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
   //show and hide dropdown list item on button click
   function show_hide1() {
      var click = document.getElementById("list-itemss");
      if (click.style.display === "none") {
         click.style.display = "block";
      } else {
         click.style.display = "none";
      }
   }
   <style>
   #list-itemss {
      display: none;
      
      background-color: white;
      width: 156.5px;
   }
   /* provide css to list items */
   #list-itemss a {
      display: block;
      font-size: 15px;
      background-color: rgb(240, 144, 144);
      color: black;
      text-decoration: none;
      padding: 10px;
      text-align: center;
   }
   </style>
</script>
    
</head>
<body>
    <!-- Footer Start -->

    <div class="container-fluid  text-secondary p-5" style="display:flex; justify-content: space-evenly; background-color: #3e8914;">
        <div class="row g-5">
           
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">About us</h3>
                <h5 class="mb-2 text-light">The Aligarh Alumni Association of Texas is a not-for-profit organization established to promote and support education of needy students. The organization was established by alumni of the Aligarh Muslim University (AMU), India, residing in the state of Texas (USA).</h5>
            </div>  

            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Address</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-light me-2"></i>6014 Emberwood Falls, Dr. Katy, TX 77494.</p>
                <p class="mb-2 "><a href="mailto:amualumnihouston@gmail.com" class="text-light"><i class="bi bi-envelope-open text-light me-2"></i>amualumnihouston@gmail.com</a></p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column">
                    <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-light me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="education.php"><i class="bi bi-arrow-right text-light me-2"></i>Education</a>

                    
                    <a class="text-secondary mb-2" href="member.php"><i class="bi bi-arrow-right text-light me-2"></i>Board Members</a>
                    <a class="text-secondary mb-2" href="committee.php"><i class="bi bi-arrow-right text-light me-2"></i>Executive Committee</a>





                    <!-- <div class="nav-item dropdown" onclick="show_hide1()">
                        <a href="member.php" class="nav-link dropdown-toggle text-secondary me-2" data-bs-toggle="dropdown">Member</a>
                        <div class="dropdown-menu" id="list-itemss" >
                            <a href="member.php" class="dropdown-item text-dark mb-2">Board Members</a>
                            <a href="committee.php" class="dropdown-item text-dark mb-2">Executive Committee</a>
                        </div>
                    </div> -->
                    <a class="text-secondary mb-2" href="membership.php"><i class="bi bi-arrow-right text-light me-2 "></i>Membership</a>
                    <a class="text-secondary mb-2" href="amu-tarana.php"><i class="bi bi-arrow-right text-light me-2"></i>AMU Tarana</a>
                    <a class="text-secondary mb-2" href="event.php"><i class="bi bi-arrow-right text-light me-2"></i>Events</a>
                    <a class="text-secondary mb-2" href="https://texasaligs.org/By-laws_3_20_091-amended2.doc.pdf"><i class="bi bi-arrow-right text-light me-2"></i>By Laws</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Education</h3>
                <h5 class="text-light">Supporting kids K -12 kids for modern education, and industrial training – Providing boarding, school fees, and all living expenses. Kids selected from various part of India on socio-economic background</h5>
                
              
            </div>

            
        </div>
    </div>


    <div class="container-fluid  text-secondary text-center border-top py-2 px-5" style="border-color: rgba(256, 256, 256, .1) !important; background-color: #134611;">
        <p class="m-0">&copy; 2020-2024 <a class="text-secondary border-bottom" href="index.php">AMU TEXAS ALUMNI</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://webfarmhouse.com/">Web Farm House</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>`


    <!-- Gallary Scripy -->

        <!-- <script>
   document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".images img");
  const modal = document.querySelector(".modal");
  const modalImg = document.querySelector(".modal-img");
  const modalTxt = document.querySelector(".modal-txt");
  const closebtn = document.querySelector(".close");
  let currentIndex = 0;

  const prevBtn = document.querySelector(".btnPrev");
  const nextBtn = document.querySelector(".btnNext");

  //Add Click Event for All Images
  images.forEach((image, index) => {
    image.addEventListener("click", function () {
      currentIndex = index;
      updateModalContent();
      modal.classList.add("show");
    });
  });

  //Update Image in Modal
  function updateModalContent() {
    const image = images[currentIndex];
    modalImg.classList.remove("show");
    setTimeout(() => {
      modalImg.src = image.src;
      modalTxt.innerHTML = image.alt;
      modalImg.classList.add("show");
    }, 300);
  }

  //Next button onclick
  nextBtn.addEventListener("click", function () {
    currentIndex = currentIndex + 1 >= images.length ? 0 : currentIndex + 1;
    updateModalContent();
  });

  //Previous button onclick
  prevBtn.addEventListener("click", function () {
    currentIndex = currentIndex - 1 < 0 ? images.length - 1 : currentIndex - 1;
    updateModalContent();
  });

  //Code for Close Icon
  closebtn.addEventListener("click", function () {
    modal.classList.remove("show");
  });
});
    </script> -->

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll(".images img");
        const modal = document.querySelector(".modal");
        const modalImg = document.querySelector(".modal-img");
        const modalTxt = document.querySelector(".modal-txt");
        const closebtn = document.querySelector(".close");
        let currentIndex = 0;

        const prevBtn = document.querySelector(".btnPrev");
        const nextBtn = document.querySelector(".btnNext");

        function updateModalContent() {
            const image = images[currentIndex];
            modalImg.classList.remove("show");
            setTimeout(() => {
                modalImg.src = image.src;
                modalTxt.innerHTML = image.alt;
                modalImg.classList.add("show");
            }, 300);
        }

        function setModalSize() {
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const maxWidth = windowWidth * 0.8;
            const maxHeight = windowHeight * 0.8;

            modalImg.style.maxWidth = `${maxWidth}px`;
            modalImg.style.maxHeight = `${maxHeight}px`;
        }

        window.addEventListener("resize", setModalSize);

        images.forEach((image, index) => {
            image.addEventListener("click", function () {
                currentIndex = index;
                updateModalContent();
                setModalSize();
                modal.classList.add("show");
            });
        });

        nextBtn.addEventListener("click", function () {
            currentIndex = currentIndex + 1 >= images.length ? 0 : currentIndex + 1;
            updateModalContent();
        });

        prevBtn.addEventListener("click", function () {
            currentIndex = currentIndex - 1 < 0 ? images.length - 1 : currentIndex - 1;
            updateModalContent();
        });

        closebtn.addEventListener("click", function () {
            modal.classList.remove("show");
        });
    });
</script>


    <!-- Footer Closed -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<script src="prmenu.min.js"></script>
<link type="text/css" rel="stylesheet" href="prmenu.css" />

<script>
		$(document).ready(function(){
			  $('#top-menu').prmenu({
				  "fontsize": "14",
					"height": "50",
					"case": "capitalize",
					"linkbgcolor": "#40916C",
					"linktextcolor": "#fff",
					"linktextweight": "400",
					"linktextfont": "sans-serif",
					"hoverdark": false
				});


		});

</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <style>

.nav-extra{
    float:left;
    width:150px;
    display:none;
   }
    </style>
</body>
</html>