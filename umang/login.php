<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
  <form action="./index.php" method="post">
  <div class="login-container">
    <!-- <div class="logo">
      <img width="100px" src="images/Company_Logo.png">
    </div> -->
      <h2 style="color:white;">Login</h2>
      <div class="input-group">
        <label for="username" style="color:white;">Username:</label>
        <input type="text" id="username" placeholder="username" name="username" ><?php echo $error; ?>
      </div>
      <div class="input-group">
        <label for="password" style="color:white;">Password:</label>
        <input type="password" id="password" placeholder="password" name="password" ><?php echo $error; ?>
      </div>
      <button type="submit" name="submit" value="Submit">Login</button>
      </div>
    </form>
</body>
</html>


