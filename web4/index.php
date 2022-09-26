<?php
// set cookies
if(isset($_POST['username']) and strlen($_POST['username']) > 0 
   and isset($_POST['password']) and strlen($_POST['username']) > 0){
    setcookie('username',$_POST['username'] , time() + (86400 * 30), "/");
    $cookie_name = "auth";
    $cookie_value = "ok";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    header("Location: loggedin.php");
    exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="index.php" method="post">1
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>