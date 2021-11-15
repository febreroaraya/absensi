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
        return $this->db->table('tb_user')->get();
    }
}