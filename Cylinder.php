<?php
class Cylinder extends Circle {
    private $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }

    public function toString(){
        echo "Volume: " .$this->calculateVolume() ."<br>";
    }
}

?>
