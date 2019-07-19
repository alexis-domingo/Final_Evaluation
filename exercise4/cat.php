<?php
require_once 'shelter.php';

//*1 Cat
$garfield = new Cat('Garfield', 30, 'Orange', 'Male');
$garfield->getInfo();

//*2 Cat
$mishu = new Cat('Mishu', 15, 'white and orange', '?? -Ask Ihsen');
$mishu->getInfo();

//*3 Cat
$felix = new Cat('Simon', 7, 'Brown', 'Male');
$felix->getInfo();

?>