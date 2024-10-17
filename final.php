
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RJ Hotel-Booking Confirmation</title>
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
.confirmation-section {
    background-color: #f9f9f9;
    padding: 2em;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.order-summary ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.order-summary li {
    margin-bottom: 10px;
}

.order-summary strong {
    font-weight: bold;
}
.print-btn {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.print-btn:hover {
    background-color: #444;
}


    </style>
</head>
<body class="bg-light">
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top"> -->
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="hotel.php">RJ HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

     
  </div>
<!-- </nav> -->
<br>

<main>
        <section class="confirmation-section">
            <h2>Booking Confirmation</h2>
            <p>Thank you for choosing RJ Hotel! We are happy to serve  you best!!</p>
            <div class="order-summary">
                Please bring Adhaar card, Pan Card(optional), Transaction details & 2 Passport size photo!!
            </div>
            <br>
            <br>
            <h2>About Hotel</h2>
            <p>The RJ HOTEL is a heritage, seven-star, luxury hotel in  Greater Noida, Uttar Pradesh, India.
Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the flagship property of the group; it employs 1,600 staff.</p>
            <button class="print-btn">Print Receipt</button>
        </section>
    </main>
    <br>
    <br>
    <a href="hotel.php" class="btn btn-primary">Return To Home Page</a>
  <!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    // Print receipt function
document.querySelector('.print-btn').addEventListener('click', () => {
    window.print();
});
</script>
</body>
</html>
        













