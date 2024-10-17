<?php
require_once('Admin/paytm/config_paytm.php');
require_once('Admin/paytm/encdec_paytm.php');

session_start();

// Payment gateway integration
// ...

// Update booking status
$room_id = $_SESSION['room']['id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

// Connect to database
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Update booking status
$query = "INSERT INTO bookings (room_id, checkin, checkout, status) VALUES ('$room_id', '$checkin', '$checkout', 'paid')";
$conn->query($query);

$conn->close();

// Redirect to booking confirmation page
header('Location: booking_confirmation.php');
exit;
?>




