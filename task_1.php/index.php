<?php
include_once 'amerika.php';
include_once 'turkiye.php';

$amerika = new Amerika("Amerika");
$turkiye = new Turkiye("Türkiye");

echo $amerika->tanit() . "<br>";
echo $amerika->elaveFunksiya() . "<hr>";

echo $turkiye->tanit() . "<br>";
echo $turkiye->elaveFunksiya();