<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.

*/
print_r($_GET['name']);
print_r($_GET['age']);

if(isset($_COOKIE['name']) && isset( $_COOKIE['age'])){
  $name = $_COOKIE['name'];
  $age = $_COOKIE['age'];
  echo "This was my name = {$name} stored as a cookie";
  echo "This was my age = {$age} stored as a cookie";
  
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="18_handling_form_submittions.php" method="POST">
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="text" name="age" id="age" placeholder="Enter Your Age">
    <input type="submit" value="Submit">
</form>

<body>

</body>

</html>