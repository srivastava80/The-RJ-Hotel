<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking-Facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  </head>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    *{
      font-family: "Poppins", sans-serif;
    }
    .h-font{
      font-family: "Merienda", cursive;
    }
    .hp-font{
      font-family: "Pacifico", cursive;
    }
    .video{
  width: 100%;
  height: 100%;
  position: absolute;
  bottom: 0;
  z-index: -100;
  right: 0;
  filter: blur(0.2px);
  /* -webkit-filter: blur(8px); */

}
@media (min-aspect-ratio:16/9){
  .video{
    width:100%;
    height:auto;
  }
}
@media (max-aspect-ratio:16/9){
  .video{
    width:auto;
    height:100%;
  }
}
.custom-bg{
  background-color:#23eclac;
}
.custom-bg:hover{
  background-color:#279e8c;
}
.h-line{
    width: 150px;
    margin:0 auto;
    height:1.7px;
}
.pop:hover{
    border-top-color:#279e8c !important;
    transform:scale(1.03);
    transition: all 0.3s;

}

    </style>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="hotel.php">RJ HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="hotel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="Room.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="contact.php">Contact us</a>

        </li>
      
      </ul>
     
   
   
  </div>
  </div>
</nav>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Facilities</h2>
    <div class="h-line bg-dark">
    </div>
<p class="text-center mt-3">The RJ HOTEL is a heritage, seven-star, luxury hotel in Greater Noida, Uttar Pradesh, India.<br> Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the <br>flagship property of the group; it employs 1,600 staff.</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://thumbs.dreamstime.com/b/wifi-icon-flat-style-wireless-symbol-wifi-icon-flat-style-wireless-symbol-isolated-white-background-simple-abstract-wi-fi-114171212.jpg" width="40px">
    <h5 class="mt-2 text-aligns-center hp-font">Wifi</h5> 
    </div>
    <p>Wi-Fi is a wireless networking technology that uses radio waves to provide high-speed internet access to devices.</p>

</div>
        <div>
</div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
   <img src="data:image/png;base64,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" width="60px">
   <h5 class="mt-2 text-aligns-center hp-font">Parking</h5> 
    </div>
    <p>Hotel parking is an important service that can impact a hotel's reputation and guest satisfaction.</p>
</div>
<div>
</div>
    
    
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://marketplace.canva.com/EAF2Y1pdT6I/1/0/1600w/canva-black-and-white-barbell-icon-fitness-logo-xNxGuY5AoYk.jpg" width="60px">
    <h5 class="mt-2 text-aligns-center hp-font">Gym</h5> 
    </div>
    <p>A hotel gym is a fitness facility located within a hotel that offers guests a place to exercise.</p>

</div>
  <div>
    </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://www.shutterstock.com/image-vector/black-security-surveillance-cctv-camera-260nw-1441502177.jpg" width="70px">
    <h5 class="mt-2 text-aligns-center hp-font">Security</h5> 
    </div>
    <p>Hotel security is the management of safety and security for guests, staff, and property at a hotel.</p>
</div>
<div>
 </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe9g0FM_X-3TrrdhewDokt6NO4WMAmPCVe3w&s" width="40px">
    <h5 class="mt-2 text-aligns-center hp-font">Cab facilities</h5> 
    </div>
    <p>Some hotels offer cab services for their guests, while others partner with taxi companies to provide transportation.</p>

</div>
        <div>
    </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://img.freepik.com/premium-vector/silhouette-swimming-pool-black-color-only_925376-159835.jpg" width="20px">
    <h5 class="mt-2 text-aligns-center hp-font">Swimming pool</h5> 
    </div>
    <p>It's a luxury amenity to add to that vacation experience A pool swim excecises and rejuvinates the body.</p>

</div>

        <div>

    </div>


</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlz8cVoePUGt3TMVP3iVFwxBaaqY5CZF43Vw&s" width="40px">
    <h5 class="mt-2 text-aligns-center hp-font">24*7 Customer-support</h5> 
    </div>
    <p>Hotel customer care is the range of services that hotels provide to guests before, during, and after their stay.</p>

</div>

        <div>

    </div>


</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfiym7LJ3Ok0GPCq2PgfTYcOM7GfAk0rkApg&s" width="40px">
    <h5 class="mt-2 text-aligns-center hp-font">Laundry</h5> 
    </div>
    <p>Hotel laundry facilities are used to wash and distribute the linens and clothing used by guests and staff at a hotel. </p>

</div>

        <div>

    </div>


</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
    <img src="https://www.shutterstock.com/image-vector/visitor-parking-only-sign-text-260nw-1855414231.jpg" width="100px">
    <h5 class="mt-2 text-aligns-center hp-font">Visitors Parking</h5> 
    </div>
    <p>Visitors parking can be a strategic tool to improve a hotel's reputation for luxury and convenience. </p>

</div>
    <div>
    </div>
</div>
</div>


<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
<h3 class="h-font fw-bold fs-3 mb-2">RJ HOTEL</h3>
<p>The RJ HOTEL is a heritage, seven-star, luxury hotel in  Greater Noida, Uttar Pradesh, India.
Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the flagship property of the group; it employs 1,600 staff.</p>
    </div>
    <div class="col-lg-4 p-4">
<h5 class="mb-3">Quick Links</h5>
<a href="hotel.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
<a href="About.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
<a href="Rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
<a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
<a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
    </div>
    <div class="col-lg-4 p-4">
    <h5 class="mb-3">Follow us</h5>
    <a href="https://x.com/hotel_rj48282?t=D0ZxhIZAYpL1Icb1EAs75A&s=08" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i>
Twitter
</span>
    </a>
<br>
<a href="https://www.instagram.com/sg262022/profilecard/?igsh=YXI4ZzRkeHlreHI1" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram me-1"></i>
Instagram
</span>
</a>
<br>
<a href="https://www.facebook.com/share/Lr74aJiumhDoYd4P/" class="text-dark text-decoration-none mb-2">
<i class="bi bi-facebook me-1"></i>
Facebook
</span>
</a>
<br>
<br>
    </div>
  </div>
</div>
  <!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>