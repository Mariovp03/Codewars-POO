<?php

//Link do kata: https://www.codewars.com/kata/57cd5b1258da9e828000059d

$object_oriented_php = new class(){
  
  public $description = "An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research";

  public $kata_list = array("Object-Oriented PHP #1 - Classes, Public Properties and Methods",'Object-Oriented PHP #2 - Class Constructors and $this',"Object-Oriented PHP #3 - Class Constants and Static Methods",
                            "Object-Oriented PHP #4 - People, people, people (Practice)","Object-Oriented PHP #5 - Classical Inheritance","Object-Oriented PHP #6 - Visibility", 'Object-Oriented PHP #7 - The "Final" Keyword',
                           "Object-Oriented PHP #8 - Interfaces [Advanced]","Object-Oriented PHP #9 - Abstract Classes [Advanced]", "Object-Oriented PHP #10 - Objects on the Fly [Advanced]" );

  public $kata_count = 10;
  
  public $name = "Donald";
  
  public $author;
  
  function __construct(){

    $this->author = new class(){
      public $name = "Donald";
      public $age = 17;
      public $gender = "Male";
      public $occupation = "Computer Programmer";
      
      public function __toString(){
      return "$this->name, aged $this->age, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast";
      }
    };    
  }

 
  function advertise($name){
      $this->name = $name;
      return "Hey $name, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"";
    }
    
  function get_kata_by_number($kata_number){
      
      if(!is_int($kata_number) || $kata_number < 1 || $kata_number > 10){
       throw new InvalidArgumentException();
      }
      
      return $this->kata_list[$kata_number - 1];
  }
  
  function complete(){
    
    return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
  
  }
  
  public function __toString(){
  return $this->description;
  }
  
};

//Aprendi um pouco mais sobre arrays, funções anonimas e funções mágicas.
