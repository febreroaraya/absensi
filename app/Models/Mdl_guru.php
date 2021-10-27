<?php

namespace App\Models;
use CodeIgniter\Model;

class Mdl_guru extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('guru')->get();
    }

    public function tambah($data)
    {
        return $this->db->table('guru')->insert($data);
    }
}
