<?php
include "Circle.php";
include "Cylinder.php";
$circle = new Circle('Circle 01', 3,'red');
echo 'Circle area: ' . $circle->tinhArea() . '<br />';
echo 'Circle perimeter: ' . $circle->tinhPerimeter() . '<br />';
echo $circle->toString().'<br/>';

$cylinder = new Cylinder('Cylinder 01', 3 , 'blue',5);
echo 'The tich Cylinder: ' . $cylinder->tinhThetich() . '<br />';
echo $cylinder->toString().'<br/>';
?>