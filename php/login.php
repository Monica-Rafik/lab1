

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <div id="taskbar">
    <ul>
      <li><a href="index.html" >home</a></li>
      <li><a href="login.php"target="_blank">login</a></li>
      <li><a href="user_data.php"target="_blank">user data</a></li>

    </ul>
  </div>

  <form action="user_data.php" method="post" >
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
  </form>
  <?php if (isset($loginError)) echo "<p>$loginError</p>"; ?>
  
</body>
</html>
