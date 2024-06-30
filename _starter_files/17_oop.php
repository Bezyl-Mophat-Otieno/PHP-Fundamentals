<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

// A class is a blueprint for objects
 class Book {
  public $title;
  public $author;

  const AVAILABLE = "Available";

  public function __construct($title, $author){
    $this->title = $title;
    $this->author = $author;
  }

  public final function  get_title (){
    return $this->title;
  }

  public function get_author(){
      return $this->author;
  }
}

$my_first_read = new Book ("Things Fall Apart", "Chinua Achebe");
echo $my_first_read->get_title() . " by " . $my_first_read->get_author() . "<br>";


// Inheritance
class Novel extends Book {

  public $pages ;

  public static $count = 0;

  public function __construct($title, $author , $pages){
    parent :: __construct($title, $author);
    $this->pages = $pages;
  }

  public function get_pages(){
    return $this->pages;
  }
  
}

$my_first_novel = new Novel("The Alchemist", "Paulo Coelho", 200);
echo $my_first_novel->get_title() . " by " . $my_first_novel->get_author() . " has " . $my_first_novel->get_pages() . " pages <br>";

// Polymorphism

class FictionBook extends Book {
  public $genre;

  public static $count = 0;

  public function __construct($title, $author, $genre){
    parent :: __construct($title, $author);
    $this->genre = $genre;
  }

  public function get_genre(){
    return $this->genre;
  }

  public function get_author(){
    return "Fictional Writer:" . $this->author;
  }
}
$my_first_fiction = new FictionBook("The Da Vinci Code", "Dan Brown", "Mystery");
$my_first_fiction->author = "Johnson Brown";
echo $my_first_fiction->get_title() . " by " . $my_first_fiction->get_author() . " is a " . $my_first_fiction->get_genre() . " novel <br>";


// Encapsulation

class Student {
  private $name;
  private $age;
  private $course;

  public static $count = 0;

  public function __construct($name, $age, $course){
    $this->name = $name;
    $this->age = $age;
    $this->course = $course;
  }

  public function get_name(){
    return $this->name;
  }

  public function get_age(){
    return $this->age;
  }

  public function get_course(){
    return $this->course;
  }

  public function set_name($name){
    $this->name = $name;
  }

  public function set_age($age){
    $this->age = $age;
  }

  public function set_course($course){
    $this->course = $course;
  }
}

$mophat_student = new Student("Mophat", 25, "Computer Science");

echo $mophat_student->get_name() . " is " . $mophat_student->get_age() . " years old and is studying " . $mophat_student->get_course() . "<br>";


// SCOPE RESOLUTION OPERATOR (::) 

class Car {
  public static $wheels = 4;
  public static function manufacturer(){
    return "Toyota";
  }

  public static function car_details(){
    return self::$wheels . " wheels" . "built by " . self::manufacturer();
  }
}

echo Car::$wheels . "<br>";

echo Car::car_details() . "<br>";

// Abstract Classes

abstract class Animal {
  public $name;
  public $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  abstract public function make_sound();
}

class Dog extends Animal {
  public function make_sound(){
    return "Woof!";
  }
}

$my_chiwawa = new Dog("Chiwawa", "Brown");      

echo $my_chiwawa->make_sound() . "<br>";

interface MyInterface {
    public function myMethod();
}

abstract class AbstractClass {
    static protected $property = "Abstract property";

    public function showProperty() {
        return self::$property ;
    }
}

class MyClass extends AbstractClass implements MyInterface {
    protected $property = "Hello, World";

    public function myMethod() {
        echo "Implementing interface method.\n";
    }
}

$obj = new MyClass();
echo $obj->showProperty(); // Outputs: Hello, World!
$obj->myMethod(); // Outputs: Implementing interface method.