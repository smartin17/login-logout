<?php
    session_start();
    
    //connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");

    if (isset($_POST['register_btn'])) {
        session_start();
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $password2 = mysql_real_escape_string($_POST['password2']);
        
        if ($password == $password2) {
            
            $password = md5($password);
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: home.php"); //redirect to home page
        }else{
            $_SESSION['message'] = "The two passwords do not match";
        }
    }

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register Login/Logout Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h1>Register, Login/Logout Form</h1>
</div>

<form method="post" action="register.php">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        
        <tr>
            <td>Password again:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Register"></td>
        </tr>
    
    
    </table>
    
    
</form>
    
</body>
</html>