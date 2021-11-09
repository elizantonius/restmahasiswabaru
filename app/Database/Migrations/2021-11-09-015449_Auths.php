<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPUnit\Framework\containsOnly;

class Auths extends Migration
{
    public function up()
    {
        //

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '128'

            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        //
    }
}
