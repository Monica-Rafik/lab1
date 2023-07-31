<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $room = $_POST["room"];
  $logout = $_POST["td><a href='logout.php?' class='btn btn-danger'>logout</a></td>"];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
  }

  if (strlen($password) !== 8 || preg_match('/[^a-zA-Z0-9_]/', $password)) {
    die("Password must be 8 characters long, no special characters, and only underscores allowed.");
  }

  $targetDir = "profile_pics/";
  $targetFile = $targetDir . basename($_FILES["profile_pic"]["name"]);
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
  if ($check === false) {
    die("Invalid profile picture.");
  } 

  $userData = "Name: $name\nEmail: $email\nPassword: $password\nRoom: $room\nProfile Pic: $targetFile\n";
  file_put_contents("users.txt", $userData, FILE_APPEND);

  // Redirect to login page after successful registration
  header("Location: login.php");
  exit;
}

// If the user is logged in, show the logout button, otherwise redirect to the login page
if (isset($_SESSION["user_id"])) {
  // Show the logout button
  echo '<form method="post">';
  echo '<td><a href="logout.php" class="btn btn-danger">Logout</a></td>';
  echo '</form>';
} else {
  // Redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit;

}
?>
