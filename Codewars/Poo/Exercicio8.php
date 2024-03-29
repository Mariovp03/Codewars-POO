<?php 

//Link do kata: https://www.codewars.com/kata/57c7906858a06b7746000a48

interface Canfly{
 
 public function fly();
 
}

interface CanSwim{

 public function swim();
 
}

interface CanClimb{

 public function climb();
 
}

interface CanGreet{

 public function greet($name);
 
}

interface CanIntroduce{

 public function speak();
 
 public function introduce();
 
}

interface CanSpeak{

 public function speak();
                       
}

class Bird implements CanFly{
 public $name;
 
 public function __construct($name){
   $this->name = $name;
 }
 
 public function fly(){
   return "I am flying";
 }
 
 public function chirp(){
   return "Chirp chirp";
 }
}

class Duck extends Bird implements CanFly, CanSwim{
 public function __construct($name){
   $this->name = $name;
 }
 
 public function chirp(){
   return "Quack quack";
 }
 
 public function swim(){
   return "Splash! I'm swimming";
 }
 
}

class Cat implements CanClimb{
 
 public function climb(){
   return "Look, I'm climbing a tree";
 }
 
 public function meow(){
   return "Meow meow";
 }
 
 public function play($name){
   return "Hey ". $name .", let's play!";
 }
}

class Dog implements CanSwim, CanGreet{
 
 public function swim(){
   return "I'm swimming, woof woof";
 }
 
 public function greet($name){
   return "Hello ". $name .", welcome to my home";
 }
 
 public function bark(){
   return "Woof woof";
 }
 
}

class Person implements CanGreet, CanIntroduce{
 
 public $name;
 public $age;
 public $occupation;

 public function __construct($name, $age, $occupation){
   $this->name = $name;
   $this->age = $age;
   $this->occupation = $occupation;
 }
 
 public function greet($name){
   return "Hello $name, how are you?";
 }
 
 public function speak(){
   return "What am I supposed to say again?";
 }
 
 public function introduce(){
   return "Hello, my name is $this->name, I am $this->age years old and I am currently working as a(n) $this->occupation";
 }
}