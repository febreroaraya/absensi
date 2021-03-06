<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status'         => [
                'type'       => 'INT',
                'contraint'  => 11,
            ],
            

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
