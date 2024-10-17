
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Now</title>
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
.fridge{
    height: 15rem; 
}
.tv{
    height: 15rem;
    width: 19rem;
}
.mi{
    height: 15rem;
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
<br>
<div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
  <strong>Alert!!</strong> "Important: For Bank Transfer Payments, kindly provide the following at check-in:
Transaction details
Screenshot of the transfer
This ensures your payment is secured and verified."
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="https://paytmblogcdn.paytm.com/wp-content/uploads/2023/06/Blog_Paytm_How-to-Transfer-a-PPF-Account_.jpg" class="fridge" alt="ing" >
                <div class="card-body">
                  <h5 class="card-title">Account Transfer</h5>
                  <p> Bank Name:- Kotak Mahindra Bank</p>
                  
                  <p> Account Holder Name:- Raj Srivastava</p>
                  
                  <p> Account No.:- 6447758993</p>
              
                  <p> IFSC Code:- KKBK0005028 </p>
              
                  <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSf5o1iJVqZMTfHVU3GGBAUrWfH_xXUAoS2KoVjr7XHI_TLv1w/viewform?usp=sf_link" class="btn btn-danger">Submit Details</a> -->
                  <a href="otp.php" class="btn btn-success">OTP Verification</a>
                  <br>
                  <br>
                 

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-60">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2020/01/21/1579599866381-9f6e8f697cdbb27c761407a44e77484e.png?tr=q-75" class="mi" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Please pay cash during check-in at the hotel.</h5>
                  <a href="otp.php" class="btn btn-success">OTP Verification</a>
                  <br>
                  <br>
                  <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
  <strong>Alert!!</strong> "Pay-on-Check-in Policy: To ensure a smooth check-in, kindly bring a printed copy of your booking confirmation page."

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                 
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-80">
                <img src="https://cdn.zeebiz.com/sites/default/files/2024/01/03/274966-upigpay.jpg" class="tv" alt="...">
                <div class="card-body">
                  <h5 class="card-title">"Temporary Disruption: UPI payments are currently unavailable due to technical issues. Please use alternative payment methods  for a seamless experience."</h5>
                  <!-- <a href="#" class="btn btn-success " disabled >Book Now</a> -->
                </div>
              </div>
            </div>
           
          </div>
          </div>
          <br>

          <div class="alert alert-warning alert-dismissible fade show mb-2 " role="alert">
  <strong>Note!!</strong> "Add ₹20 (payment gateway charge) + 18% GST to the bank transfer amount.""
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
        













