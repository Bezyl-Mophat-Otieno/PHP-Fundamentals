<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.

*/
print_r($_GET['name']);
print_r($_GET['age']);

echo ($_POST['name']);
echo ($_POST['age']);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="text" name="age" id="age" placeholder="Enter Your Age">
    <input type="submit" value="Submit">
</form>

<body>

</body>

</html>