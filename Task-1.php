<?php
class Shape{
    
    public function claculateArea(){

    }
}
class Circle extends Shape{
    
    private $radius;

    public function __construct($redius){
        $this->redius = $redius;
    }
    public function claculateArea() {
        return $this-> redius * $this-> redius * pi(); 
    }
}

class Ractangle extends Shape{

    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function claculateArea() {
        return $this->width * $this->height;
    }
}

    $circle = new Circle(5);
    $rectangle = new Ractangle (5,3);

    echo "Circle is =" . $circle -> claculateArea() . "<br> <br>"; 
    echo "Rectangle is =" . $rectangle -> claculateArea();







    //reference:  https://phpenthusiast.com/object-oriented-php-tutorials
?>
