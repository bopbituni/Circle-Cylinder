<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(5);
$circle->toString();

$cylinder = new Cylinder(5, 10);
$cylinder->toString();