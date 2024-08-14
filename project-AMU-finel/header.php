<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Aligarh Alumni Association of Texas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">

     <!-- Template Javascript -->
     <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Dropdown -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iK1+eaWabKQr5q+ri5Aq2hpaKX5fL/8ktxlZ+UZlC1+qO8+fruJwls9e" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eBqXJhVQa1+st9t0PlCq8uu30qQh5t9Pwqz65f/JJQmgRRt1Qq8F2dz9MGm2MOp6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>




    <!-- <script>
    function showDropdown() {
        document.querySelector('.dropdown-menu').classList.add('show');
    }

    function hideDropdown() {
        document.querySelector('.dropdown-menu').classList.remove('show');
    } 
</script> -->

<script>
   //show and hide dropdown list item on button click
   function show_hide() {
      var click = document.getElementById("list-items");
      if (click.style.display === "none") {
         click.style.display = "block";
      } else {
         click.style.display = "none";
      }
   }
</script>

<script>
    function toggleNavbar() {
        var myNav = new bootstrap.Collapse(document.getElementById('navbarCollapse'));
        myNav.toggle();
    }
</script>
<style>

   /* provide css to background of list items */
   #list-items {
      display: none;
      
      background-color: white;
      width: 156.5px;
   }
   /* provide css to list items */
   #list-items a {
      display: block;
      font-size: 15px;
      background-color: rgb(240, 144, 144);
      color: black;
      text-decoration: none;
      padding: 10px;
      text-align: center;
   }

   .zelle-pay{
    display:none;
   }
   @media only screen and (max-width:720px)
   {
    .zelle-pay{
    display: flex;
    
    }
    .zelle{
        margin:10px
    }
   }

   .zelle {
   animation: blink 1.5s infinite;
   animation-fill-mode: both;
   animation-name: blink;
   }

@keyframes blink {
   0% { opacity: 0 }
   50% { opacity: 1 }
   100% { opacity: 0 }
   }
</style>

</head>

<body>
    
   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><img src="image/logo.png" alt="" height="90px" width="90px"></h1>
    </a>

    <div class="right zelle-pay">
   <h5 class="zelle"><a href="zelle.php">Donate by Zelle</a></h5>
   <a href="https://www.paypal.com/paypalme/aaaotx?locale.x=en_US"><img src="image/paypal.png" alt="" width="100px"></a>    
    </div>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button> -->
<!--
    <button class="navbar-toggler" type="button" onclick="toggleNavbar()">
    <span class="navbar-toggler-icon"></span> -->
    </button>

    <?php 
       
       $page_name = basename($_SERVER['PHP_SELF']);

    ?><div class='nav-extra'> 
    <a href='#'> Donate By Zelle </a>
    <img width='100px' src='image/paypal.png'/>
  </div>
    	<ul id="top-menu">
        <li><a href="index.php">Home</a></li>
         <li><a href="education.php">Education</a></li>
         <li><a href="membership.php">Membership</a></li>
         <li><a href="#">Member</a>
            <ul>
                <li><a href="member.php">Board Members</a></li>
                <li><a href="committee.php">Executive Committee</a></li>
            </ul>
        </li>
        <li><a href="amu-tarana.php">AMU TARANA</a></li>
        <li><a href="event.php">EVENTS</a></li>
        <li><a href="https://texasaligs.org/By-laws_3_20_091-amended2.doc.pdf">BY LAWS</a></li>
    </ul>
    
    <!--
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav  py-0 me-n3 ">
            <a  href="index.php" class="nav-item nav-link <?php if($page_name=='index.php'){echo 'active';} ?>">Home</a>
            <a href="education.php" class="nav-item nav-link <?php if($page_name=='education.php'){echo 'active';} ?>">Education</a>
            <a href="membership.php" class="nav-item nav-link <?php if($page_name=='membership.php'){echo 'active';} ?>">Membership</a>
            <div class="nav-item dropdown m-0 p-0" onclick="show_hide()">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Member</a>
                <div class="dropdown-menu " id="list-items">
                    <a href="member.php" class="dropdown-item <?php if($page_name=='member.php'){echo 'active';} ?>">Board Members</a>
                    <a href="committee.php" class="dropdown-item <?php if($page_name=='committee.php'){echo 'active';} ?>">Executive Committee</a>
                   
                </div>
            </div>
            <a href="amu-tarana.php" class="nav-item nav-link <?php if($page_name=='amu-tarana.php'){echo 'active';} ?>">AMU Tarana</a>
            <a href="event.php" class="nav-item nav-link <?php if($page_name=='event.php'){echo 'active';} ?>">Events</a>
            <a href="https://texasaligs.org/By-laws_3_20_091-amended2.doc.pdf" class="nav-item nav-link">By Laws</a>
            <a href="zelle.php" class="nav-item nav-link remove <?php if($page_name=='zelle.php'){echo 'active';} ?>">Donate By Zelle</a>
            <a href="https://www.paypal.com/paypalme/aaaotx?locale.x=en_US" class="paypal remove"><img src="./image/paypal.png" alt="" height="40px" width="90px"></a>
            
        </div>
    </div>-->
</nav>



<!-- Navbar End -->

    
</body>
</html>