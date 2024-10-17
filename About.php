<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking- About</title>
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
  </div>
</nav>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-line bg-dark">
    </div>
<!-- <p class="text-center mt-3">The RJ HOTEL is a heritage, seven-star, luxury hotel in Greater Noida, Uttar Pradesh, India.<br> Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the <br>flagship property of the group; it employs 1,600 staff.</p> -->
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
<h3 class="mb-3 h-font"> The RJ Hotel</h3>
<p>The RJ HOTEL is a heritage, seven-star, luxury hotel in Greater Noida, Uttar Pradesh, India. Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the flagship property of the group; it employs 1,600 staff.</p>

        </div>
        <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-md-2 order-1">
            <img src="logo.png" class="w-100">

        </div>
    </div>
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
<h3 class="mb-3 h-font"> Raj Srivastava (CEO)</h3>
<p class="k-font">"Welcome to Hotel RJ, your home away from home.<br>
At Hotel RJ, we're dedicated to providing exceptional experiences that exceed your expectations. Our commitment to excellence is rooted in our passion for hospitality and our desire to make every guest feel valued and cared for.
Our team is devoted to ensuring your stay with us is nothing short of extraordinary. From luxurious accommodations to exquisite dining and unparalleled service, we've curated every detail to make your time with us unforgettable.
Whether you're traveling for business or pleasure, we invite you to indulge in the warmth and elegance of Hotel RJ. Allow us to be your haven, your sanctuary, and your gateway to unforgettable memories.
Thank you for choosing Hotel RJ. We look forward to serving you.<br>


        </div>
        <div class="col-lg-5 col-md-5 mb-4  order-lg-1 order-md-1 order-2">
            <img src="yui-Photoroom.png" class="w-100">

        </div>
    </div>
    <div class="container mt-5">
<div class="row">
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://www.pngkit.com/png/detail/222-2225932_furniture-bed-logo.png" width="80px">
            <h4 class="mt-3">650+Rooms</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/014/856/628/small/customer-experience-icon-client-satisfaction-symbol-customer-relationship-management-concept-for-graphic-design-logo-website-social-media-mobile-app-ui-illustration-vector.jpg" width="50px">
            <h4 class="mt-3">500+Customers</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://static.vecteezy.com/system/resources/previews/004/235/343/non_2x/five-star-top-review-logo-modern-chat-icon-talk-quotes-in-trendy-linear-line-style-dark-background-free-vector.jpg" width="50px">
            <h4 class="mt-3">450+Reviews</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://thumbs.dreamstime.com/b/people-vector-icon-group-symbol-illustration-businessman-logo-multiple-users-silhouette-153483996.jpg" width="50px">
            <h4 class="mt-3">1500+Staffs</h4>
</div>
    </div>
   
</div>
    </div>
    
</div>



<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
          <button type="button" class="btn-close shadow-non" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div>
        </form>
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

</body>
</html>