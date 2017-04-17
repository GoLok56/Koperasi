<?php

Class Input {

    public static function get($nama){
        if(isset($_POST[$nama])) return $_POST[$nama];
        elseif(isset($_GET[$nama])) return $_GET[$nama];

        return false;
    }

}

 ?>
