<?php

Class Database{

    /** Objek database ini sendiri */
    private static $instance;

    /** Koneksi ke databasenya */
    private $connection;

    /** Nama host database mysql */
    private $HOST = "localhost";

    /** Username user database mysql */
    private $USER = "root";

    /** Password user database mysql */
    private $PASS = "";

    /** Nama database */
    private $DBNAME = "koperasi";

    /** Private constructor buat singleton */
    private function __construct(){
        $this->connection = new mysqli($this->HOST,$this->USER,$this->PASS,$this->DBNAME);
    }

    /** Static function buat konek ke database */
    public static function getInstance(){
        if(!isset(self::$instance)) self::$instance = new self();

        return self::$instance;
    }

    public function insert($table, $field = array()){
        $kolom = implode(", ", array_keys($field));
        $values = ArrayHelper::implode($this, array_values($field));

        $query = "INSERT INTO $table ($kolom) VALUES ($values)";

        return $this->run($query);
    }

    public function update($table, $where_clause, $where_args, $field = array()){
        $kolom = array_keys($field);
        $values = array_values($field);
        $size = count($field);
        $set_value = "";
        for ($i=0; $i < $size; $i++) {
            if($i != $size - 1) $set_value .= "$kolom[$i] = $values[$i], ";
            else $set_value .= "$kolom[$i] = $values[$i]";
        }

        $query = "UPDATE $table SET $set_value WHERE $where_clause = $where_args";

        return $this->run($query);
    }

    public function get($table, $kolom=null, $value=null){
        if(!is_int($value)) $value = "'$value'";
        $query = "SELECT * FROM $table";

        if(!is_null($kolom) && !is_null($value))
            $query .= " WHERE $kolom = $value";

        return $this->run($query);
    }

    public function get_row($table, $kolom, $value){
        $result = $this->get($table, $kolom, $value);
        while ($row = $result->fetch_assoc()) {
            return $row;
        }
    }

    private function run($query){
        return $this->connection->query($query);
    }

    public function escape($string){
        return $this->connection->real_escape_string($string);
    }

}

 ?>
