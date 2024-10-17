<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to calculate days between two dates
function calculateDays($checkInDate, $checkOutDate) {
    // Convert dates to timestamp
    $checkInTimestamp = strtotime($checkInDate);
    $checkOutTimestamp = strtotime($checkOutDate);

    // Calculate difference in seconds
    $differenceInSeconds = $checkOutTimestamp - $checkInTimestamp;

    // Convert seconds to days
    $days = floor($differenceInSeconds / (60 * 60 * 24));

    return $days;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
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
  background-color:#279e8c;
}
.custom-bg:hover{
  background-color:#279e8c;
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
          <a class="nav-link  me-3" aria-current="page" href="hotel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="Rooms.php">Rooms</a>
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
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



 
<div class="container" >
    <video autoplay muted loop plays-inline class="video">
      <source src="back.mp4"video/mp4">
    </video>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Room Availability</h5>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row align-items-end">
          <div class="col-lg-3">
            <label class="form-label" style="font-weight:500">Check-in</label>
            <input type="date" class="form-control shadow-none" name="checkin" required>
          </div>
          <div class="col-lg-3">
            <label class="form-label" style="font-weight:500">Check-out</label>
            <input type="date" class="form-control shadow-none" name="checkout" required>
          </div>
          <div class="col-lg-2">
            <label class="form-label" style="font-weight: 500;">Adult</label>
            <select class="form-select shadow-none" name="adult" >
              <option value="">Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
          </div>
          <div class="col-lg-2">
            <label class="form-label" style="font-weight: 500;">Child</label>
            <select class="form-select shadow-none" name="child" >
              <option value="">Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
          </div>
          <div class="col-lg-2">
            <input type="submit" name="submit" class="btn btn-primary" value="Check">
          </div>
        
        </div>
      </form>
      <?php
// Get check-in and check-out dates from form submission
if (isset($_POST['submit'])) {
    $checkInDate = $_POST["checkin"];
    $checkOutDate = $_POST["checkout"];

    // Validate dates
    if (empty($checkInDate) || empty($checkOutDate)) {
        echo "<span style='color: red;'>Please select both check-in and check-out dates.</span>";
    } elseif ($checkInDate >= $checkOutDate) {
        echo "<span style='color: red;'>Check-out date must be after check-in date.</span>";
    } else {
        // Calculate days
        $days = calculateDays($checkInDate, $checkOutDate);
        echo "<span style='color: green;'>Number of days: $days <br> Congratulations!! Rooms are Available!!  </span>";
    }
}
?>
    </div>
  </div>
</div>

<br>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Rooms</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Deluxe Versace Room</h5>
    <h6 class="mb-4">₹ 2000 per night</h6>
   <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    Spacious, bright, and elegant, these richly appointed 50 sqm rooms combine fine Italian workmanship with everyday functionality. 
   </div>
   <div class="facilities mb-4">
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
</span>
</div>
   </div>
   <div class="d-flex justify-content-evenly mb-2">
   <a href="checkout room-1.php" class="btn btn-success custom-bg w-100">Book Now</a>
   <!-- <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a> -->
   </div>
   
  </div>
</div>
    </div>


    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Deluxe Versace Terrace</h5>
    <h6 class="mb-4">₹ 3000 per night</h6>
   <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    Occupying the higher floors of the hotel and measuring 60 sqm, these rooms combine fine Italian workmanship with everyday functionality.
   </div>
   <div class="facilities mb-4">
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
<span class="badge rounded-pill bg-light text-dark text-wrap">
Mini-Fridge
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
   <div class="d-flex justify-content-evenly mb-2">
   <a href="checkout room-2.php" class="btn btn-success custom-bg w-100">Book Now</a>
   <!-- <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a> -->
   </div>
   
  </div>
</div>
    </div>




    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Superior Versace Room</h5>
    <h6 class="mb-4">₹ 3700 per night</h6>
   <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    Cozy and spacious, with stunning views of Dubai city, these suites have an individuality of their own and are exquisite on a large scale.
   </div>
   <div class="facilities mb-4">
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
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
   </div>
   <div class="d-flex justify-content-evenly mb-2">
   <a href="checkout room-3.php" class="btn btn-success custom-bg w-100">Book Now</a>
   <!-- <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a> -->
   </div>
   
  </div>
</div>
    </div>

    <div class="col-lg-12 text-center mt-5">
<a href="Rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>>></a>
    </div>
  </div>
</div>



<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
<div class="container">
  <div class="row px-5 px-md-0 px-lg-0 justify-content-evenly">
    <div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-3 my-2">
<img src="https://thumbs.dreamstime.com/b/wifi-icon-flat-style-wireless-symbol-wifi-icon-flat-style-wireless-symbol-isolated-white-background-simple-abstract-wi-fi-114171212.jpg" width="80px">
   <h5 class="mt-2 text-aligns-center hp-font">Wifi</h5> 
</div>

<div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-3 my-2">
<img src="data:image/png;base64,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" width="80px">
   <h5 class="mt-2 text-aligns-center hp-font">Parking</h5> 
</div>
<div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-3 my-2">
<img src="https://marketplace.canva.com/EAF2Y1pdT6I/1/0/1600w/canva-black-and-white-barbell-icon-fitness-logo-xNxGuY5AoYk.jpg" width="80px">
   <h5 class="mt-2 text-aligns-center hp-font">Gym</h5> 
</div>
<div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-3 my-2">
<img src="https://www.shutterstock.com/image-vector/black-security-surveillance-cctv-camera-260nw-1441502177.jpg" width="80px">
   <h5 class="mt-2 text-aligns-center hp-font">Security</h5> 
</div>
<div class="col-lg-2 col-md-2 text center bg-white rounded shadow py-3 my-2">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe9g0FM_X-3TrrdhewDokt6NO4WMAmPCVe3w&s" width="80px">
   <h5 class="mt-2 text-aligns-center hp-font">Cab facilities</h5> 
</div>

  </div>
</div>
<div class="col-lg-12 text-center mt-5">
<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
    </div>
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testmonials</h2>
    
<div class="container">
  <div class="row">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Ravi Bhati</h5>
      <p>Friendly and efficient staff: "The hotel staff are incredibly friendly and efficient". </p>
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
  </div>
</div>
<br><br>
<div class="container">
  <div class="row ">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Sanjay Singh</h5>
      <p>Comfortable rooms: "The rooms were very comfortable and the mattresses felt like sleeping at home". </p>
      <div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>

</span>
</div>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Madhu Srivastava</h5>
      <p>Tasty food: "The restaurant's food was tasty and freshly made, and there were various options". 
      Great location: "The hotel was within walking distance of all popular landmarks". </p>
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
  </div>
</div>
<br><br>
<div class="container">
  <div class="row ">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Aryan Srivastava</h5>
      <p>Excellent service: "The impeccable service and hospitality of your staff made our retreat most enjoyable". 
      </p>
      <div class="rating mb-4">
<h6 class="mb-1">Ratings</h6>
<span class="badge rounded-pill bg-light ">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>


</span>
</div>
    </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Aanchal Srivastava</h5>
      <p>Clean and spacious: "The room is spacious and clean". 
Great atmosphere: "Excellent service and atmosphere". 
</p>
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
  </div>
</div>
<br><br>
<div class="container">
  <div class="row ">
    <div class="col-lg-10 bg-white shadow p-2 rounded">
    <i class="bi bi-person-circle fs-3 me-2"></i>
      <h5 class="mb-2"> Vaishnavi Srivastava</h5>
      <p>Stunning views: "Stunning views". 
      Great value for money: "Food was good and great value for money" </p>
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
  </div>
  <div class="col-lg-12 text-center mt-5">
<a href="reviews.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>></a>
    </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded"  height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224407.57787454358!2d77.35083169700312!3d28.49856174748772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea64b8f89aef%3A0xec0ccabb5317962e!2sGreater%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1726499403351!5m2!1sen!2sin"  loading="lazy" ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +918076175174" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918076175174</a>
        <br>
        <a href="tel: +916394517557" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+916394517557</a>
        <br>
        <br>
        <h5>Follow us</h5>
        <a href="https://x.com/hotel_rj48282?t=D0ZxhIZAYpL1Icb1EAs75A&s=08" class="d-inline-block mb-3">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i>
Twitter
</span>
    </a>
<br>
<a href="https://www.instagram.com/sg262022/profilecard/?igsh=YXI4ZzRkeHlreHI1" class="d-inline-block mb-3">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i>
Instagram
</span>
</a>
<br>
<a href="https://www.facebook.com/share/Lr74aJiumhDoYd4P/" class="d-inline-block mb-3">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i>
Facebook
</span>
</a>
<br>
<br>
<h5>Chat with us</h5>
        <a href="https://wa.me/qr/CINHJQEISJV2K1" class="d-inline-block mb-3">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-whatsapp me-1"></i>
Whatsapp
</span>
    </a>
       
      </div>

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
    </div>
    </div>
  
  <h6 class="text-center bg-dark text-white ">2024 RJ Hotel. All Rights Reserved <br>  Developed & Manage By Raj Srivastava</h6>
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>