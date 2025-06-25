<?php


class Shape {
    public function area(){
        echo "Calculating area of the shape.<br>";
    }
}

class circle extends Shape{
    public function area()
    {
        echo "Area of circle = π × r × r <br>";
    }
}

class square extends Shape{
    public function area()
    {
        echo "Area of square = side × side<br>";
    }
}

class rectangle extends Shape{
    public function area()
    {
        echo "Area of rectangle = length × width<br>";
    }
}

class triangle extends Shape{
    public function area()
    {
        echo "Area of triangle = 0.5 × base × height<br>";
    }
}

// Function that uses polymorphism

function calculateArea(Shape  $shape) {
    $shape->area();
} 

$circle = new circle();
$rectangle = new rectangle();
$square = new square();
$triangle = new triangle();



calculateArea($circle);
calculateArea($rectangle);  
calculateArea($square);
calculateArea($triangle);



//implements 






