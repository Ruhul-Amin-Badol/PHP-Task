    <?php
    class Animal {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    
        public function makeSound() {
            return "Some animal sound";
        }
    }

    class Dog extends Animal {
        public function makeSound() {
            return "Gaw gwu!";
        }
    }

    class Cat extends Animal {
        public function makeSound() {
            return "Meow meow!";
        }
    }

    class Cow extends Animal {
        public function makeSound() {
            return "Hamba Hamba!";
        }
    }

    $dog = new Dog("Doggy");
    $cat = new Cat("Pussy");
    $cow = new Cow("Molly");


    $animals = [$dog, $cat, $cow];

    foreach ($animals as $animal) {
        echo $animal->name . ": " . $animal->makeSound() . "<br>"."<br>";
    }
    // echo $dog->name. ":" . $dog->createSound();
    ?>