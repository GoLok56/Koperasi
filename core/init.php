<?php

spl_autoload_register(function ($class) {
    require_once "class/$class.php";
});

session_start();

$user = new User();
$tabungan = new Tabungan();
