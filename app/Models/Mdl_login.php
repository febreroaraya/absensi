<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdl_login extends Model
{
    public function login($username,$password)
    {
        $db = db_connect();
        $query = $db->query("select * from guru where username='" . $username . "' and  password='" . $password . "'");
        $msg = "Username atau password salah";
        $is_error = true;
        if(count($query->getResult()) > 0){
            $is_error = false;
            $msg = "Berhasil Login";
        }
        $db->close();
        $hasil = array("is_error"=>$is_error,"msg"=>$msg);
        return json_encode($hasil);
    }
}