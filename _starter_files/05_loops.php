<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

$fruits = ['Apple', 'Banana', 'Orange', 'Mango'];

define ('NUMBERS',[1,2,3,4,5,6,7,8,9,10]);

$number= 0;

for($i=0; $i<=3; $i++){
  echo $fruits[$i] . "<br>";
}

do{
  echo NUMBERS[$number] . "<br>";
  $number++;
  
} while($number < count(NUMBERS));

while($number < count(NUMBERS)){
  echo NUMBERS[$number] . "<br>";
  $number++;
}

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  code to be executed
  }
*/

for($i=0; $i<=10; $i++){
  echo $i . "<BOOMERANG>";
};

$associative_array = array (
  "name" => "John Doe",
  "age" => 23,
  "account_balance" => 44000.45,
  "hobbies" => ["Reading", "Swimming", "Coding"]
);

$values =array_values($associative_array["hobbies"]);

foreach($values as $value){
  print_r($value) ;
};


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/




/* ---------- Foreach Loop ---------- */
foreach($values as $value){
  print_r($value);
}


// Calculate the sum of numbers in NUMBERS array

$sum = 0;
foreach ( NUMBERS as $number){
  $sum += $number;
}

echo 'sum'.'='.$sum;

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/