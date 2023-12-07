<?php

class TransaksiModel
{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTransaksi()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
}
