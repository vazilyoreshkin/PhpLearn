<?php
require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) .'</pre>';
}
    ;

$car1 = new Car();
$car2 = new Car();

debug($car1);

$car1->color = 'черный';
$car1->brand = 'renault';
$car1->speed = 200;
$car1->year = 2018;

$car2->color = 'белый';
$car2->brand = 'mercrdes';
$car2->speed = 120;
$car2->year = 2017;

debug($car1);
debug($car2);




