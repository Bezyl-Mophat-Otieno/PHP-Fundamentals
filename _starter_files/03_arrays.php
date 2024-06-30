<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1,2,3,4,5,6,7,8,9,10];
$fruits = array('Apple', 'Banana', 'Orange', 'Mango');
// echo $numbers[0];

// print_r($numbers);

// var_dump($fruits);

$mixed_Array = [1,2,3,4,5,true,2,3.64536,4,5, "name" => "John Doe", "age" => 23, "account_balance" => 44000.45];
// print_r( $mixed_Array);

// print_r($associative_arrays);
$multi_dimensional_arrays = array (
  array (1,2,3,4,5,"true",2),
  array (1,2,3,4,5,true,2)
);


// print_r( $multi_dimensional_arrays );


// Accessig elements in an array

// echo $associative_array["name"];

// print_r($associative_array["hobbies"]);
// print_r( $multi_dimensional_arrays[0]);

//Modifying elements of an array
$associative_array["name"] = 'Mophat';

// echo $associative_array["name"];
$numbers[] = 11;

// print_r( $numbers );

$associative_array["country"] = "Kenya";

// print_r( $associative_array );
// Remove elements from an array

unset($associative_array["country"]);

// print_r( $associative_array );

unset($numbers[10]);

// print_r( count($numbers) );


// Merge arrays
$merged_result = array_merge($numbers,$associative_array,$fruits,$mixed_Array,$multi_dimensional_arrays);

// print_r( $merged_result );

$associative_array = ["name"=>"John Doe", "age"=>23, 
"account_balance"=>44000.45, "hobbies"=>["Reading", "Swimming", "Coding"]];
$popped_element = array_pop($associative_array);

// print_r( $popped_element );

$shiffted_element = array_shift($associative_array);

// var_export($associative_array);

// print_r( $associative_array );
$element_exists = in_array("John Doe", $associative_array);

// var_export( $element_exists );

$keys = array_keys($associative_array);

$values = array_values($associative_array);   
// print_r($keys);  
// print_r($values);
// print_r($numbers);

// print_r(array_reverse($numbers));
print_r(array_push($numbers,20,33));