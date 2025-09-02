<?php
include_once 'qis.php';
include_once 'yay.php';

$qis = new Qis("Qış");
$yay = new Yay("Yay");

echo $qis->tanit() . "<br>";
echo $qis->elaveFunksiya() . "<hr>";

echo $yay->tanit() . "<br>";
echo $yay->elaveFunksiya();