<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

$name = 'John Doe';

$age = 23;

$account_balance = 44000.45;

$info = "{$name} is {$age} years old and has an account balance of {$account_balance}";



echo $info;

define('HOST','localhost');
define('DB','dev_db');

echo HOST;

echo '5' * '5';


$arithmetics = 20 + 10 - 5 * 2 / 2;

echo '          ';

var_dump($arithmetics);

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$person_object = [
    "name" => "John Doe",
    "age" => 23,
    "account_balance" => 44000.45
];

print_r($person_object);

// CONSTANST IN PHP

define ('PI', 3.142);
define ('HOST','localhost');        
define('DB','dev_db');

echo DB;