<?php
/* ------------ Functions ----------- */


/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope




/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$sum_function = function ($num1=400, $num2=200){
  $args = func_get_args();
  $args_sum = array_sum($args);
  $value = $num1 + $num2;
  return "sum of value =  {$value} + sum of args = {$args_sum}" ;
};

// print_r($sum_function(20));

$print_name = function ($name='Mophat'){
  return $name;
};

// print_r($print_name('John Doe'));

// Passing arguments to a function by reference
$my_name = 'Mophat';
$update_name = function (&$name){
  $name = 'Bezyl Mophat Otieno';
  return $name;
};


// print_r($update_name($my_name));
// print_r($my_name);

// Returning arguments passed to a function call

// print_r($sum_function(20,30,40,50,60,70,80,90,100));

// Functions that return specified types 

function generate_fullname ($first_name , $last_name):string{
  return "{$first_name} {$last_name}";
}

// print_r(generate_fullname('Bezyl','Mophat'));

function random_number_generator():int{
  return rand(1,100);
}
// var_export(random_number_generator());

//Using splat operator to pass an array of arguments to a function

function sum_arguments_passed (...$args):int{
  echo is_array($args) ? count($args) :0;
  return array_sum($args);
}


// print_r(sum_arguments_passed(1,2,3,4,5,6,7,8,9,10));

//Unpacking elements of an array into individual elements of a function

$numbers = [1,2,3,4,5,6,7,8,9,10];
$count_args = function (...$args){
  return count($args);
};
$to_be_summed = [400,500];

// print_r($sum_function(...$to_be_summed));

// Closurs in PHP

function greetings_to_name ($name){
  return function ( string $greeting) use ($name){
    return "{$greeting} {$name}";
  };
}

$closure_func = greetings_to_name('Bezyl Mophat Otieno');

// print_r($closure_func('Hello'));


function createMultiplies($factor){
  return function ($number) use ($factor){
    return $number * $factor;
  };
}

$double = createMultiplies(2);  
$tripple = createMultiplies(3);

print_r($double(40));
print_r($tripple(30));

$even_numbers = array_filter($numbers,function($number){
  return $number % 2 == 0;
});

print_r($even_numbers);

$squared_numbers = array_map(function( $number){
  return $number * $number;
},$numbers);  

print_r($squared_numbers);