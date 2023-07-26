<!DOCTYPE html>
<html>
<head>
    <title> return data </title>
</head>
<body>
    <?php
    
    if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['address']) && isset($_GET['country'])&&  isset($_GET['gender'])&& isset($_GET['skills']) && isset($_GET['userName']) && isset($_GET['password']) && isset($_GET['department']) && isset($_GET['code']) && $_GET['code'] == "MOO009") {
       
        $name = $_GET['firstName'];
        $name1 = $_GET['lastName'];
        $address = $_GET['address'];
        $country = $_GET['country'];
        $gender = $_GET['gender'];
        $skills = $_GET['skills'];
        $userName = $_GET['userName'];
        $password = $_GET['password'];
        $department = $_GET['department'];
        $code = $_GET['code'];

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
     ?>
</body>
</html>
