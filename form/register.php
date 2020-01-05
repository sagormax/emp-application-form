<?php
require_once "bootstrap.php";

$emp = new \App\Model\EmpRegistration();
var_dump($emp->first());
//var_dump($emp->insert([
//    'name' => 'oracal',
//    'roll' => '789'
//]));
