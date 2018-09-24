<?php
    session_start();
    

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
<h1>Home</h1>
<div><h4>Welcome <?php echo $_SESSION['username'];?></h4></div>

    
</body>
</html>