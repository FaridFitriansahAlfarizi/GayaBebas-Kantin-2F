<?php

class LogModel
{
    private $table = 'log';
    private $view = 'log_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLog()
    {
        $this->db->query("SELECT * FROM " . $this->view . " ORDER BY id_log DESC");
        return $this->db->resultSet();
    }

    public function afterAddKaryawan($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menambah Data User');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterEditKaryawan($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Mengubah Data User');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterDeleteKaryawan($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menghapus Data User');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterAddBarang($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menambah Data Barang');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterEditBarang($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Mengubah Data Barang');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterHapusBarang($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menghapus Data Barang');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterAcceptRequest($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menyetujui Request Barang');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function afterRejectRequest($id)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :id_user, :tgl_aksi, :aksi)";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->bind('tgl_aksi', date('Y-m-d'));
        $this->db->bind('aksi', 'Menolak Request Barang');

        $this->db->execute();

        return $this->db->rowCount();
    }
}
