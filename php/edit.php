<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $department = $_GET['department'];
    ?>

    <h1>Edit Data</h1>

    <form action="update.php" method="post">
        <label for="editFirstName">First Name:</label>
        <input type="text" id="editFirstName" name="editFirstName" value="<?php echo $firstName; ?>" required>
        <br>

        <label for="editLastName">Last Name:</label>
        <input type="text" id="editLastName" name="editLastName" value="<?php echo $lastName; ?>" required>
        <br>

        <label for="editDepartment">Department:</label>
        <input type="text" id="editDepartment" name="editDepartment" value="<?php echo $department; ?>" required>
        <br>

        <input type="hidden" name="oldLastName" value="<?php echo $lastName; ?>">
        <input type="submit" value="Update">
    </form>
</body>
</html>
