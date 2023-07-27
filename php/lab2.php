<!DOCTYPE html>
<html>
<head>
    <title> return data </title>
</head>
<body>

    <?php

    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['address']) && isset($_POST['country'])&&  isset($_POST['gender'])&& isset($_POST['skills']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['department']) && isset($_POST['code']) && $_POST['code'] == "MOO009") {
       
        $name = $_POST['firstName'];
        $name1 = $_POST['lastName'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $skills = $_POST['skills'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $department = $_POST['department'];
        $code = $_POST['code'];

        echo  $name ;
        echo  $name1; 
        echo  $address; 
        echo  $country; 
        echo  $gender;  
        echo  $userName; 
        echo  $password; 
        echo  $department; 
        echo  $code; 
    } 
    else{
        header("Location: lab1.php");
    }
    
    $errors = array();

     if(!isset($_POST['firstName']) or empty($_POST['firstName'])){
    $errors['firstName'] = 'firstName is required';
     }if(!isset($_POST['lastName']) or empty($_POST['lastName'])){
    $errors['lastName'] = 'lastName is required';
     }if(!isset($_POST['department']) or empty($_POST['department'])){
    $errors['department'] = 'department is required';
    }    



if(empty($errors)){

    $name = $_POST['firstName'];
    $name1 = $_POST['lastName'];
    $department = $_POST['department'];
    $file = fopen('data.txt', 'a');

    fwrite($file, "$name:$name1:$department\n");
    
    fclose($file);
    
    header('location:save.php');

}else{
    $errorsStr = json_encode($errors);
    header("location:lab1.php?errors=$errorsStr");
}
     ?>
</body>
</html>
