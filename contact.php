<?php
// Database configuration
$hname = 'localhost';
$port = 3306;
$uname = 'root';
$pass = ''; 
$db = 'the_rj_hotel';

// Create database connection
$con = new mysqli($hname, $uname, $pass, $db, $port);
if ($con->connect_error) {
    throw new Exception("Connection failed: " . $con->connect_error);
}

// Function to filter user input
function filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = strip_tags($data[$key]);
        $data[$key] = htmlspecialchars($data[$key], ENT_QUOTES, 'UTF-8');
    }
    return $data;
}

// Define insert function
function insert($query, $values, $types) {
    global $con;
    $stmt = $con->prepare($query);
    $stmt->bind_param($types, ...$values);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_queries` (`name`, `email`, `subject`, `messages`) VALUES (?, ?, ?, ?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['messages']];
    $res = insert($q, $values, 'ssss');

    if ($res) {
        echo '<script>alert("success", "Mail sent!");</script>';
    } else {
        echo '<script>alert("Failed", "Try again later!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking- Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  </head>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap');

    *{
      font-family: "Poppins", sans-serif;
    }
    .h-font{
      font-family: "Merienda", cursive;
    }
    .hp-font{
      font-family: "Pacifico", cursive;
    }
    .k{
        font-family: "Gowun Batang", serif;
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
.box:hover{
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
</nav>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark">
    </div>
<br><br>
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 ">
<iframe class="w-100 rounded mb-4"  height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224407.57787454358!2d77.35083169700312!3d28.49856174748772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea64b8f89aef%3A0xec0ccabb5317962e!2sGreater%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1726499403351!5m2!1sen!2sin"  loading="lazy" ></iframe>
<h5>Address</h5>
<a href="https://maps.app.goo.gl/pKpvm4K9pNBfSGbR9" target="_blank" class="text-decoration-none d-inline-block text-dark mb-2"><i class="bi bi-geo-alt"></i>
    Knowledge Park-2,Near Pari Chowk,Greater Noida,<br>
    Uttar Pradesh.
</a>
<h5 class="mt-3">Call us</h5>
        <a href="tel: +918076175174" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918076175174</a>
        <br>
        <a href="tel: +916394517557" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+916394517557</a>
       
        <h5 class="mt-3">Follow us</h5>
        <a href="https://x.com/hotel_rj48282?t=D0ZxhIZAYpL1Icb1EAs75A&s=08" class="d-inline-block mb-3  text-dark fs-5 me-2">
        <i class="bi bi-twitter me-1"></i></a>
        
  

    <a href="https://www.instagram.com/sg262022/profilecard/?igsh=YXI4ZzRkeHlreHI1" class="d-inline-block mb-3  text-dark fs-5 me-2">
<i class="bi bi-instagram me-1"></i>
      
</a>

<a href="https://www.facebook.com/share/Lr74aJiumhDoYd4P/" class="d-inline-block mb-3 text-dark fs-5 me-2">
<i class="bi bi-facebook me-1" ></i>

</a>
<h5 class="mt-2">E-mail</h5>
        <a href="mailto: srivastavaraj9718@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i>srivastavaraj9718@gmail.com</a>
<h5 class="mt-3">Chat with us</h5>
        <a href="https://wa.me/qr/CINHJQEISJV2K1" class="d-inline-block mb-2">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-whatsapp me-1"></i>
Whatsapp
</span>
    </a>

</div>
        <div>
</div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 ">
    <form method="post">
<h5 class="text-align-center">Send Message</h5>
   <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
<div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input name="name" required  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input  name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Subject</label>
            <input  name="subject" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
         
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Message</label>
            <textarea  name="messages" required class="form-control shadow-none" rows="5" style="resize:none"></textarea>
         
          </div>
          <div class="mt-3">
<button type="submit" name="send"  class="btn btn-success custom-bg">Send</button>
</div>

</form>
   
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
    </div>
  </div>
</div>
<br>
<br>

<!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>