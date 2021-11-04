<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>
            [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'npm' =>
            [
                'type' => 'INT',
                'constraint' => 11,

            ],

            'nama' =>
            [
                'type' => 'VARCHAR',
                'constraint' => 250
            ],
            'jurusan' =>
            [
                'type' => 'VARCHAR',
                'constraint' => 250
            ],
            'alamat' =>
            [
                'type' => 'TEXT'
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('databaru', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('databaru', true);
    }
}
