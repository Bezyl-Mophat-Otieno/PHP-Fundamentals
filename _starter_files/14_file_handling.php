<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/
$my_books_file = "../extras/books.txt";

if(file_exists($my_books_file)){
    $file = fopen($my_books_file, 'r');
    $file_size = filesize($my_books_file);
    $file_content = fread($file, $file_size);
    fclose($file);
    echo $file_content;
}else{
  $file = fopen($my_books_file, 'w');
  $file_contents = "The Alchemist\n" . "The Ric \n" . "The Monk Who Sold His Ferrari\n" . "The Power of Now\n" . "The 7 Habits of Highly Effective People\n";
  fwrite($file, $file_contents);
  fclose($file);
  echo "File has been created and written to";
}