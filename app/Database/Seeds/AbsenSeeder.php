<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AbsenSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [    
                'nama'      => 'Febrero',
                'username'  => 'febrero',
                'password'  => password_hash('1234', PASSWORD_BCRYPT),
                'status'    => '1',
            ],
            [    
                'nama'      => 'Araya',
                'username'  => 'araya',
                'password'  => password_hash('1234', PASSWORD_BCRYPT),
                'status'    => '1',
            ],
        ];
        $this->db->table('tb_user')->insertBatch($data);
    }
}
