<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Convert values to string
    setcookie('age', ($age), time()+ 60*60*24);
    setcookie('name', $name, time()+ 60*60*24);

    echo "Hello " . htmlspecialchars($name) . " You are " . htmlspecialchars($age) . " years old";
    
}

// Retrieving values from a saved cookie
if(isset($_COOKIE['name']) && isset( $_COOKIE['age'])){
  $name = $_COOKIE['name'];
  $age = $_COOKIE['age'];
  echo "This was my name = {$name} stored as a cookie";
  echo "This was my age = {$age} stored as a cookie";
  
} 