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
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    
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


    </style>
</head>
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
</nav>
<div class="alert alert-success alert-dismissible fade show mb-3 " role="alert">
  <strong>Note!!</strong> Please submit copy of Adhaar card & Pan Card while check-in!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-7 mb-lg-0 mb-md-0 mb-3">
    <div class="alert alert-danger alert-dismissible fade show mb-3 " role="alert">
  <strong>Alert!!</strong> Please provide valid details as it will be verify at the time of check-in!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid rounded">
    </div>
    <div class="col-md-5 align-items-center px-lg-3 px-md-3 px-0">
     <h5 class="mb-3 align-items-center">BOOKING DETAILS</h5>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
         
            <label for="text" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            
          </div>
          <div class="col-md-6 mb-3">
         
         <label for="text" class="form-label ">Phone Number</label>
         <input type="tel" name="phonenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[0-9]{10}" title="Enter 10 digit phone number">
         
       </div>
       <div class="col-md-6 mb-3">
       <label for="text" class="form-label">Address</label>
       <textarea name="address" class="form-control shadow-none" row="1"  ></textarea> 

            </div>
        
       <div class="col-md-6 mb-3">
         
         <label for="text" class="form-label">Aadhaar Number</label>
         <input type="number" name="adhar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  pattern="[0-9]{12}" title="Enter 12 digit Aadhaar number">
         
       </div>
      
       <div class="col-md-6 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" name="checkin" class="form-control shadow-none " onchange="check_availability()"  required>
            
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" name="checkout" class="form-control shadow-none" onchange="check_availability()"  required >
        </div>
        <div class="col-md-6 mb-3">
        <label class="form-label" style="font-weight: 500;">Adult</label>
        <select class="form-select shadow-none" >
  <option value="">Select</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
</select>
        </div>
        <div class="col-md-6 mb-4">
        <label class="form-label" style="font-weight: 500;">Child</label>
        <select class="form-select shadow-none" >
  <option value="">Select</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  
</select>
</div>
<div class="col-12">
<div class="spinner-border text-info mb-3 d-none" role="status" id="info_loader">
  <span class="visually-hidden">Loading...</span>
</div>
<input type="submit" name="submit" class="btn btn-primary w-100 mb-2" value="Check Availability">
<!-- <button type="submit" name="pay_now" class="btn btn-success custom-bg w-100 mb-1"onclick ="location.href='payment.php'"  >Pay Now</button> -->
<button type="button" name="pay_now" onclick ="location.href='payment.php'" class="btn btn-success custom-bg w-100 mb-1" >Pay Now</button>
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
        echo "<span style='color: green;'>Number of days: $days <br> Congratulations!! Room Available!! <br> Kindly fill all required details for futher process. </span>";
    }
}
?>
</div>
</div>
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
  <!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</script>
</body>
</html>
        













