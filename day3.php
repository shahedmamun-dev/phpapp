<?php 
// Parent class
// abstract class Car {
//     public $name;
//     public function __construct($name) {
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // Child Classes
// class Audi extends Car {
//     public function intro() : string {
//         return "Choose German quality! I'm an $this->name!";
//     }
// }

// class Volvo extends Car {
//     public function intro() : string {
//         return "Proud to be PHP coder! I'm $this->name!";
//     }
// }

// class Citroen extends Car {
//     public function intro() : string {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// // Create objects from the child classes
// $audi = new audi('Audi');
// echo $audi->intro();
// echo "<br>";

// $volvo = new Volvo('Volvo');
// echo $volvo->intro();
// echo "<br>";


// $citroen = new citroen("Citroen");
// echo $citroen->intro();



// abstract class ParentClass {
//     // Abstract method with an argument
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//     public function prefixName($name, $separator = ".", $greet = "Dear") {
//         if ($name == "John Doe") {
//             $prefix = "Mr";
//         } elseif ($name == "Jane Doe") {
//             $prefix = "Mrs";
//         } else {
//             $prefix = "";
//         }
//         return "{$greet} {$prefix}{$separator} {$name}";
//     }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>";
// echo $class->prefixName("Jahaara Doe");




// Interface definitionns
// interface Animal {
//     public function makeSound();
// }

// // Class definitions
// class Cat implements Animal {
//     public function makeSound(){
//         echo " Meow ";
//         echo " <br>";
//         echo " This is a Cat! ";
//     }
// }

// class Dog implements Animal {
//     public function makeSound() {
//         echo " Bark ";
//         echo " <br>";
//         echo " This is a Dog! ";
//     }
// }

// class Mouse implements Animal {
//     public function makeSound() {
//         echo " Squeak ";
//         echo " <br>";
//         echo " This is a Mouse! ";
//     }
// }
// class Man implements Animal {
//     public function makeSound() {
//         echo " Hey! ";
//         echo " <br>";
//         echo " This is a Man! ";
//     }
// }

// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $man = new Man();

// $animals = array($cat, $dog, $mouse, $man);

// // Tell the animals to make a sound
// foreach($animals as $animal) {
//     $animal->makeSound();
// }









?>