<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking-Rooms</title>
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

<br>
<h2 class="fw-bold h-font text-center">Our Rooms</h2>
          <br>

          <!-- 1st Room -->
            <div class="col-lg-12 col-md-12 px-4">
              <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Spacious, bright, and elegant, these richly appointed 50 sqm rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>

<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
</div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-4">₹ 2000 per night</h6>
    <a href="checkout room-1.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
              <!-- 2nd  Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Versace Terrace</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" > Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>

</span>
</div>
</div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-4">₹ 3000 per night</h6>
    <a href="checkout room-2.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
              <!-- 3rd Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Superior Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Cozy and spacious, with stunning views of Dubai city, these suites have an individuality of their own and are exquisite on a large scale.</p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Beverages
</span>
<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>

</span>
</div>
</div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-4">₹ 3700 per night</h6>
    <a href="checkout room-3.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    
    </div>
  
  </div>
</div>

            </div>
              <!-- 4th Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Premier Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" > Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Beverages
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Food
</span>
<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>

</span>
</div>
</div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 5000 per night</h6>
    <a href="checkout room-4.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 5th Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/210265/pexels-photo-210265.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Cosy and spacious, with stunning views of Dubai Creek, these suites have an individuality of their own and are exquisite on a large scale. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>

<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
</div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 2500 per night</h6>
    
    <a href="checkout room-5.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a><!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 6th Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/97083/pexels-photo-97083.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Cozy and spacious, with stunning views of Dubai city, these suites have an individuality of their own and are exquisite on a large scale.</p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>

<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 1800 per night</h6>
    <a href="checkout room-6.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 7th Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/271643/pexels-photo-271643.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Room Creek</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Spacious, bright, and elegant, these richly appointed 50 sqm rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>

<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>

</span>
</div>
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 2200 per night</h6>
    <a href="checkout room-7.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 8th Room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/279746/pexels-photo-279746.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Versace Terrace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" > Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>

<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>

<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
    
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 2600 per night</h6>
    <a href="checkout room-8.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 9 room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Spacious, bright, and elegant, these richly appointed 50 sqm rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Beverages
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Food
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Swiming pool
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Gym
</span>
<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>
</span>
</div>
    
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 6000 per night</h6>
    <a href="checkout room-9.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.ph" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 10th room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/172872/pexels-photo-172872.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" > Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Gym
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Swiming Pool
</span>
<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 5500 per night</h6>
    <a href="checkout room-10.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            <!-- 11th room -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/2029719/pexels-photo-2029719.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Deluxe Versace Room
     </h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" >Spacious, bright, and elegant, these richly appointed 50 sqm rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Beverages
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Food
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Swiming pool
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Gym
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
24*7 Room Services
</span>


<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
    
    </div>
    <div class="col-md-8 text-align-center">
    
    <h6 class="mb-2">₹ 6500 per night</h6>
    <a href="checkout room-11.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>

  </div>
</div>

            </div>
            <!-- 12th room  -->
            <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
      <img src="https://images.pexels.com/photos/3144580/pexels-photo-3144580.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
     <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-2 align-items-center">Super Deluxe Versace Room</h5>
     <h6 class="mb-2 align-items-center">Features</h6>
   <p class="align-items-center" > Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality. </p>
  
   <div class="facilities mb-3">
   <h6 class="mb-1">Facilities</h6>
   <span class="badge rounded-pill bg-light text-dark text-wrap">
Wifi
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Telivision
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Ac
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Heater
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Beverages
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Free Food
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Swiming pool
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
Gym(including Personal Trainer)
</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">
24*7 Room Services
</span>


<br><br>
<div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
    
    </div>
    <div class="col-md-8 text-align-center">
    <h6 class="mb-2">₹ 10000 per night</h6>
    <a href="checkout room-12.php" class="btn btn-success custom-bg mb-2 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a>
    <!-- <a href="payment.php" class="btn btn-success custom-bg mb-3 w-100"><i class="bi bi-cart-check-fill"></i> Book Now</a> -->
    <a href="tel: +918076175174" class="btn btn-sm btn-outline-dark shadow-none  mb-2 w-100"><i class="bi bi-telephone-fill"> </i>Call us</a>
    <a href="https://wa.me/qr/CINHJQEISJV2K1" class="btn btn-sm btn-outline-dark shadow-none w-100"><i class="bi bi-whatsapp"></i>  Chat with us</a>
    </div>
  
  </div>
</div>

            </div>
            
        </div>
        
        <div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms Available Soon!!>>>></a>
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
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>