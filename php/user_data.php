<!DOCTYPE html>
<html>
<head>
  <title>User Data</title>
</head>
<body>
  <h1>User Data</h1>
  <div id="taskbar">
    <ul>
      <li><a href="index.html" >home</a></li>
      <li><a href="login.php"target="_blank">login</a></li>
      <li><a href="user_data.php"target="_blank">user data</a></li>

    </ul>
  </div>
   <p>
   <?php 

$userData = file_get_contents("users.txt");
?>
  <pre><?php echo $userData; ?></pre></p>
  <a href="logout.php">Logout</a>
</body>
</html>




