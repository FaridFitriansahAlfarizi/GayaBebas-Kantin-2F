<?php

class BarangModel
{
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBarangJoinKategori()
    {
        $this->db->query("SELECT b.foto AS foto_produk, b.nama AS nama_barang, k.nama AS kategori, b.stok AS stok FROM " . $this->table . " AS b INNER JOIN kategori AS k ON b.id_kategori = k.id_kategori ORDER BY stok ASC");
        return $this->db->resultSet();
    }
}
