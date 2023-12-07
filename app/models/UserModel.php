<?php

class UserModel
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserJoinAkses($username, $password)
    {
        $this->db->query("SELECT * FROM " . $this->table . " AS u INNER JOIN akses AS a ON u.id_akses = a.id_akses WHERE u.usename = :username AND u.password = :password");
        $this->db->bind("username", $username);
        $this->db->bind("password", $password);
        return $this->db->resultSet();
    }
}
