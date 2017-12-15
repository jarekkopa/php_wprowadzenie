<?php
$var =5; # 5.5; null; false; true; 'php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = 5.5; #null; false; true; 'php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = 5.5; #null; false; true; 'php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = null; #false; true; 'php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = false; #true; 'php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = true; #php'; '4php';
$cast = (int) $var;
var_dump($var, $cast);

$var = 'php'; #'4php';
$cast = (int) $var;
var_dump($var, $cast);