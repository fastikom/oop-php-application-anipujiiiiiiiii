<?php
include "reg_global.php";
include "class_kalkulator.php";


$kalkulator_canggih = new kalculator;

$kalkulator_canggih->bilangan_1= $bilangan_1;
$kalkulator_canggih->bilangan_2= $bilangan_2;
$kalkulator_canggih->utama($cmbop);
?>