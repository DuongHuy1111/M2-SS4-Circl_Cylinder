<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle(11, yellow);
echo "Circle: ";
$circle->toString();

$cylinder = new Cylinder(10, green, 11);
echo "Cylinder: ";
$cylinder->toString();
?>
</body>
</html>