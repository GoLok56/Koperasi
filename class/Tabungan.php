<?php

class Tabungan {
    private $db;
    private $table;

    public function __construct(){
        $this->db = Database::getInstance();
        $this->table = TableTabungan::$NAMA_TABLE;
    }

    public function simpan($field = array()){
        if($this->db->insert($this->table, $field)) return true;
        else return false;
    }

    public function get($userid){
        return $this->db->get($this->table, TableTabungan::$KOLOM_USERID, $userid);
    }

}

 ?>
