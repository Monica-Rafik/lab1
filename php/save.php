<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


</body>
</html>


<?php



$data = file('data.txt');

echo "<table class='table'>
<thead class='thead-dark'>
  <tr>
    <th>firstName</th>
    <th>lastName</th>
    <th>department</th>
    <th> Edit </th>
    <th> Delete </th>

  </tr>
</thead>

"
;

foreach ($data as $key => $value) {
  $line = explode(':', $value);

  echo "<tr>
      <td> $line[0] </td>
      <td> $line[1] </td>
      <td> $line[2] </td>
      <td><a href='edit.php?firstName=$line[0]&lastName=$line[1]&department=$line[2]' class='btn btn-warning'>Edit</a></td>
      <td><a href='delete.php?email=$line[1]' class='btn btn-danger'>Delete</a></td>
  </tr> 
  ";
  
}

echo "</table>";



