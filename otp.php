<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
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

    body {
    font-family: 'Montserrat', sans-serif;
    }

body {
  background-image: url('https://cdni.iconscout.com/illustration/free/thumb/free-otp-security-illustration-download-in-svg-png-gif-file-formats--one-time-password-protection-identity-biometric-verification-pack-crime-illustrations-3763926.png?f=webp');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  
}

.container {
    width: 100%;
    max-width: 400px;
}

.card {
    background-color: transparent;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.header {
    background-color: transparent;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.content {
    padding: 20px;
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

.otp-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

input {
    width: calc(100% - 30px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
}

.success-message {
    display: none;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
    color: black;
}

.error-message {
    color: #e74c3c;
    margin-top: 10px;
}

button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.success-message p {
    margin: 10px 0;
}

.otp-display {
    margin-top: 20px;
    text-align: center;
}

.otp-text {
    font-size: 18px;
    margin: 0;
}

input:disabled {
    background-color: #f2f2f2;
    color: #a0a0a0;
    cursor: not-allowed;
}

.timer {
    margin-top: 10px;
    font-size: 14px;
}

</style>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <!-- <h1 style="color:black">
                    Click & Shop
                </h1> -->
                <h2 style="color:black">
                    OTP Verification
</h2>
            </div>
            <div class="content" id="content">
                <button id="generateBtn" onclick="OTPFn()">
                    Generate OTP
                </button>
                <div id="otpForm" class="otp-form">
                    <input type="text" id="userOTP" placeholder="Enter OTP">
                    <button onclick="OTPVerifyFn()">
                        Verify
                    </button>
                </div>
                <div id="successMessage" class="success-message">
                    <i class="fas fa-check"></i>
                    <p>Congratulations!! Your Booking is Confirmed!!!</p>
                    <button class="proceed-button"   onclick ="location.href='final.php'">Booking Details
                </div>
              
                <div id="errorMessage" class="error-message"></div>
                <div id="timer" class="timer"></div>
            </div>
        
            
            </button>
        </div>
    </div>
    <script>
        let otpGen;
let timer;
let secondsRemaining = 10;

function OTPFn() {
    const btn = document.getElementById('generateBtn');
    btn.disabled = true;
    clearFn();
    otpGen = Math.floor(1000 + Math.random() * 9000);
    const temp = document.getElementById('content');
    const showOtp = document.createElement('div');
    showOtp.classList.add('otp-display');
    showOtp.innerHTML = `
        <p class="otp-text">Generated OTP: 
            <span>${otpGen}</span>
        </p>`;
    temp.appendChild(showOtp);
    document.getElementById('otpForm').style.display = 'flex';
    startTimer();
}

function clearFn() {
    const prevOtp = document.querySelector('.otp-display');
    if (prevOtp) {
        prevOtp.remove();
    }
    resetTimer();
    document.getElementById('errorMessage').innerText = '';
    enableInputField();
}

function OTPVerifyFn() {
    const userOtp = document.getElementById('userOTP').value;
    if (userOtp === "") {
        alert("Please enter OTP.");
        return;
    }
    const enterOtp = parseInt(userOtp);
    if (!isNaN(enterOtp)) {
        if (secondsRemaining > 0) {
            if (enterOtp === otpGen) {
                showMsgFn();
                document.getElementById('generateBtn').disabled = false;
                resetTimer();
                enableInputField();
            } else {
                document.getElementById('errorMessage').innerText = 'Invalid OTP. Please try again.';
            }
        } else {
            document.getElementById('errorMessage').innerText = 'OTP Expired. Please generate a new OTP.';
            resetTimer();
        }
    } else {
        alert("Invalid OTP. Please try again.");
    }
}

function showMsgFn() {
    const successMessage = document.getElementById('successMessage');
    successMessage.style.animation = 'fadeIn 1s forwards';
    successMessage.style.display = 'flex';
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 3000);
}

function startTimer() {
    timer = setInterval(function () {
        if (secondsRemaining <= 0) {
            clearInterval(timer);
            document.getElementById('generateBtn').disabled = false;
            document.getElementById('errorMessage').innerText = 'OTP Expired. Please generate a new OTP.';
            resetTimer();
            disableInputField();
        } else {
            document.getElementById('timer').innerText = `Time Remaining: ${secondsRemaining} seconds`;
            secondsRemaining--;
        }
    }, 1000);
}

function resetTimer() {
    clearInterval(timer);
    document.getElementById('timer').innerText = '';
    secondsRemaining = 10;
}

function disableInputField() {
    document.getElementById('userOTP').disabled = true;
}

function enableInputField() {
    document.getElementById('userOTP').disabled = false;
}

function clearFields() {
    document.getElementById('userOTP').value = '';
    clearFn();
}

    </script>
</body>

</html>
