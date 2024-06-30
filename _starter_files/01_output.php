<?php
/* -------- Output & Comments ------- */

// echo "Hello World"; // Outputs: Hello World!

// print 123 ;

// print_r( [1,2,3,4,5,5]);

// var_dump( [1,2,3,4,5,5] );

// var_export(true);

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo "This is my title" ; ?> </h1>
</body>

</html>