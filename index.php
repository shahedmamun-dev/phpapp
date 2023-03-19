<?php 

// class person {
//     public $name;
//     public $age;

//     function __construct($name = "No Name", $age = 0){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function show(){
//         echo $this->name . " - " . $this->age . "<br>";
//     }
// }

// $p1 = new person();
// $p2 = new person('AMPEC Studio', 15);
// $p3 = new person('AMPECX Studio', 20);

// $p1->show();
// $p2->show();
// $p3->show();


trait hello {
    public function sayhello(){
        echo "Hello from trait! \n";
    }
}


class base {
    public function sayhello(){
        echo "Hello from base\n";
    }
}

class child extends base {
    use hello;
    public function sayhello(){
        echo "Hello from child\n";
    }
}


$test = new child();
$test->sayhello();




















?>