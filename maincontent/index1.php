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
    
  <form action="login.php" method="get" onsubmit="return validLogin()">
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required onblur="isValidUsername()">
        <span id="username-error" class="error"></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required onblur="isValidPassword()">
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
        <button type="submit" onclick="window.open('signup.php')">Sign up</button>
      </div>
    </form>
  </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
