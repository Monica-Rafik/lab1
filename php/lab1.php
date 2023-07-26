

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="php1.css">
</head>
<body>
    <div class="container">
        <form id="formPage1" class="form-page" action="lab2.php" method="GET">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" >
            <br>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" >
            <br>
            <label for="address">Address:</label>
            <textarea  style =" overflow-y: scroll;"  id="address" name="address" rows="4" required></textarea>
            <br>
            <label for="country">Country:</label>
            <select id="country"  >
                <option name="country" value="">-- Select Country --</option>
                <option name="country" value="usa">USA</option>
                <option name="country" value="uk">UK</option>
                <option name="country" value="canada">Canada</option>
            </select>
            <br>
            <div>
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="male" > Male</label>
            <label><input type="radio" name="gender" value="female" > Female</label>
            <div>
            <br>
            <br>
            <label>Skills:</label>
            <label><input type="checkbox" name="skills[]" value="html"> HTML</label>
            <label><input type="checkbox" name="skills[]" value="css"> CSS</label>
            <label><input type="checkbox" name="skills[]" value="js"> JavaScript</label>
            <label><input type="checkbox" name="skills[]" value="php"> PHP</label>
            <br>
            <br>
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" >
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <br>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" >
            <br>
            <p class="code-text">MOO009</p>
            <br>
            <label >Write Code:</label>
            <textarea id="code" name="code" ></textarea>
            <br>
            
            <input type="button" value="Previous " > 
</namespace>
            
            <input type="submit" value="Submit">
    
    </div>
</body>
</html>

