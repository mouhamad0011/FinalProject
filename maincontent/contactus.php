<!DOCTYPE html>
<?php
  require_once 'connection.php';
  session_start();
  if($_SESSION['isloggedin']!=1)header("Location:signup.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contactus.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<header>
        <div class="container1">
        <div class="first">
            ADVENTURE&nbsp;AWAITS
        </div>
        <div class="second">
            <ul class="nav">
                <li><a href="home.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="trips.php">TRIPS</a></li>
                <?php
                require_once 'connection.php';
                error_reporting(0);
                if($_SESSION['isloggedin']==1){
                  echo "<li><a href='oldtrips.php'>OLDTRIPS</a></li>";
                }
                else echo"";
                ?>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </div>
        <div class="third">
          <?php
          error_reporting(0);
           if($_SESSION['isloggedin']!=1)
           echo" <input type='submit' onclick="."window.open('signup.php')"." value='register/sign in'".">";
           else 
           echo" <input type='submit' onclick="."window.open('logout.php')"." value='logout'".">";
          ?>
        </div>
        </div>
    </header>
    <main>
  <div class="container">
    <h1>Contact Us</h1>
    <form id="contact-form" action="home.php" onsubmit="return validContactus()" >
      <label for="name">Name:</label>
      <input type="text" id="username" name="name" required onblur="isValidUsername()">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required onblur="isValidEmail()">
      <span id="email-error" class="error"></span>
      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required onblur="isValidSubject()">

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required onblur="isValidMessage()"></textarea>

      <button type="submit">Submit</button>
      <script src="scripts.js"></script>
    </form>
  </div>
    </main>
    <footer class="footer">
        <div class="social-icons">
            <i class="fa-solid fa-mobile-screen"><span>71/836343</span></i>
            <i class="fa-sharp fa-solid fa-location-dot"><span>Bekaa, Rayyak</span></i>
            <i class="fa-solid fa-clock"><span>Open 24/7</span></i>
        </div>
        <div class="social-media">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
        
        </div>
        <div>
       <p> Copyright © 2023 ADVENTURE AWAITS. All rights reserved.</p>
        </div>
    </footer>
<script>
  const emailInput = document.getElementById("email");
  const emailError = document.getElementById("email-error");

  emailInput.addEventListener("input", function () {
    const email = emailInput.value;
    if (validateEmail(email)) {
      emailError.textContent = "";
    } else {
      emailError.textContent = "Please enter a valid email address";
    }
  });

  function validateEmail(email) {
    const pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return pattern.test(email);
  }
</script>
</body>
</html>
