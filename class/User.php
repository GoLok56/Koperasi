<?php

Class User{

    /** Instance database, untuk CRUD */
    private $db;
    private $table;

    /** Contructor kelas Barang */
    public function __construct(){
        $this->db = Database::getInstance();
        $this->table = TableUser::$NAMA_TABLE;
    }

    public function daftar($field = array()){
        if($this->db->insert($this->table, $field)) return true;
        else return false;
    }

    public function masuk($username, $password){
        $data = $this->db->get_row($this->table, TableUser::$KOLOM_USERNAME, $username);
        if(password_verify($password, $data['password'])){
            Session::set('username', $username);
            Session::set('tabungan', $data['tabungan']);
            Session::set('userid', $data['id']);
            return true;
        }

        return false;

    }

    public function update($field = array()){
        $data = $this->db->get_row($this->table, TableUser::$KOLOM_ID, Session::get('userid'));
        $field[TableUser::$KOLOM_TABUNGAN] += $data['tabungan'];
        if($this->db->update($this->table, TableUser::$KOLOM_ID, Session::get('userid'), $field)){
            Session::set('tabungan', $field[TableUser::$KOLOM_TABUNGAN]);
            return true;
        }

        return false;
    }

}

 ?>
