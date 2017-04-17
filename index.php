<?php
    require_once "core/init.php";

    require_once "templates/header.php";

    if(!isset($sukses_nabung) || !isset($sukses_daftar)){
        $sukses_nabung = false;
        $sukses_daftar = false;
    }

    if(Session::exist('username')){
        require_once "profile.php";
    }else {
        require_once "login.php";
    }
 ?>
