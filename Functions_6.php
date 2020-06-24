<?php

//1
function PirmaFunkcija($text, $tagNumber = 1) {
    echo "<h$tagNumber>$text</h$tagNumber>";
}

PirmaFunkcija("Langas");

//2

PirmaFunkcija("Langas", 2);

//3

$randomString = md5(time());

PirmaFunkcija(md5(time()));


echo preg_replace('/[^0-9]/', '', $randomString);