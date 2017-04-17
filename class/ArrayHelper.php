<?php

class ArrayHelper{

    public static function implode($db, $array_values = array()){
        $values = array();
        $indeks = 0;
        foreach ($array_values as $value) {
            if(is_int($value)) $values[$indeks++] = $db->escape($value);
            else $values[$indeks++] = "'" . $db->escape($value) . "'";
        }

        return implode(", ", $values);
    }

}
