<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Convert values to string
    setcookie('age', ($age), time()+ 60*60*24);
    setcookie('name', $name, time()+ 60*60*24);

    echo "Hello " . htmlspecialchars($name) . " You are " . htmlspecialchars($age) . " years old";
    

    
}