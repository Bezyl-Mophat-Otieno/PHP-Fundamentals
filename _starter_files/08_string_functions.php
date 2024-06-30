<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/$normal_Strings = 'Hello World';
$double_quoted = "Hello World";
$heredocString = <<<EOD
This is a heredoc string
{$normal_Strings}
that spans multiple lines.
EOD;

// echo $heredocString;


// print_r (strlen($normal_Strings));
$my_name = 'Bezyl, Mophat, Otieno';
$first_name = substr($my_name,0,5); 

// echo $first_name;

// echo str_replace(['Bezyl','Mophat'],'Otieno',$my_name);

// echo strtoupper($my_name);

// print_r( str_split($my_name));



// echo trim($my_name);

$my_names = explode(',',$my_name);

// print_r($my_names);
$my_friends = ['Hope','Faith','Love','Peace'];

$string_formed = implode(',',$my_friends);  

echo $string_formed;