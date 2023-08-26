<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trip Website - Login</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="body">
  <div class="container">
    
  <form action="register.php" method="get" onsubmit="return valid">
               <h2>Sign up</h2>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" required onblur="isValidUsername()">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required onblur="isValidEmail()">
            </div>
            <div class="form-group">
              <label for="number">Phone number:</label>
              <input type="tel" id="number" name="number" required onblur="isValidPhoneNumber()">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required onblur="isValidPassword()">
            </div>
            <div class="form-group">
              <button type="submit">Sign up</button>
              <button type="submit" onclick="window.open('index1.php')">Login</button>
            </div>
          </form>
  </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
