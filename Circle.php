<?php

class Circle
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }

    public function setColor($newColor)
    {
        $this->color = $newColor;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function toString(){
        echo "Radius: " .$this->getRadius() . "<br>";
        echo "Color: " .$this->getColor() . "<br>";
        echo "Area: " .$this->calculateArea() . "<br>";
    }
}

?>