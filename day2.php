<?php 
// class Fruit {
//     //properties
//     public $name;
//     public $color;

//     //methods
//     function set_name($name){
//         $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }
// }

// $apple = new Fruit();
// $banana = new Fruit();

// $apple->set_name('Apple'); 
// echo "Name: " . $apple->get_name();

// $banana->set_name('Banana');
// echo "<br>" . "Name: " . $banana->get_name();




// class Fruit {
//     public $name;
//     public $color;

//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function get_name() {
//         return $this->name;
//     }

//     function get_color() {
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "Red");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();





// class Cricketer {
//     public $player;
//     public $score;

//     function __construct($player, $score){
//         $this->player = $player;
//         $this->score = $score;
//     }

//     function __destruct(){
//         echo "Cricketer {$this->player} has score {$this->score}.";
//     }
// }

// $bangladesh = new Cricketer("Sakib Al Hasan", "120");




// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function intro (){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }

// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//     public function message(){
//         echo "Am I a fruit or a berry?";
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();


// class Goodbye {
//     const Leaving_Message ="Thank you for choosing php!";
// }

// echo Goodbye::Leaving_Message;



class Goodbye2{
    const welcome_Message = "Welcome to PHP. You can do it! Keep up.";
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function Welcome() {
        echo self::welcome_Message;

    }
}

$welcome = new Goodbye2();
$welcome->Welcome();


//abstract classes



?>