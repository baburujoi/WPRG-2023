<?php
require_once "Dodatki.php";
require_once "NoweAutko.php";
require_once "Ubezpieczenie.php";

$autko = new NoweAutko();
$drugieAutko = new Dodatki();
$trzecieAutko = new Ubezpieczenie();

echo $autko->obliczCene(455858)."<br>";

$drugieAutko->setAlarm(550);
$drugieAutko->setAc(3500);
$drugieAutko->setRadio(300);

echo $drugieAutko->obliczCene(333279)."<br>";

$trzecieAutko->setLataUżytku(4);
echo $trzecieAutko->obliczCene(333279);