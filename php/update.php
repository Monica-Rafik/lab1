<?php
if (isset($_POST['editFirstName']) && isset($_POST['editLastName']) && isset($_POST['editDepartment'])) {
    $editFirstName = $_POST['editFirstName'];
    $editLastName = $_POST['editLastName'];
    $editDepartment = $_POST['editDepartment'];
    $oldLastName = $_POST['oldLastName'];

    $data = file('data.txt');

    foreach ($data as $key => $value) {
        $line = explode(':', $value);

        if ($oldLastName == $line[1]) {
            $data[$key] = "$editFirstName:$editLastName:$editDepartment\n";
            break;
        }
    }

    $file = fopen('data.txt', 'w');
    foreach ($data as $line) {
        fwrite($file, $line);
    }
    fclose($file);

    header('location: save.php');
}
?>
