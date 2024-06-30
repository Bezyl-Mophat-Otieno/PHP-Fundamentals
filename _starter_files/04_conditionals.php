<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

define('AGE', 20);
define('NAME', 'John Doe');
define('ACCOUNT_BALANCE', 10000.45);

$age_category = AGE >= 18 ? 'Adult' : 'Minor';

$ternary_operator = isset($name) ? $name : 'John Doe';



print_r($null_coalescing ?? "IT'S NULL");




switch (ACCOUNT_BALANCE > 50000){
  case true:
    echo "You have a balance of more than 50,000";  
    break;
  default:
    echo "You have a balance of less than 50,000";
    break;
}



echo $age_category;



/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */