<?php

// $x = 10;

// // Variable Global
// function tampilX(){
//     global $x;
//     echo $x;
// };

// tampilX();

// SUPERGLOBALS
// Variable global milik PHP
// merupakan Array Associative

$_GET["name"] = ["Bejo"];
$_GET["nik"] = ["12312312"];

var_dump($_GET)
?>