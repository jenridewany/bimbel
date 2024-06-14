<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailToUsersTable extends Migration
{
    public function up()
    {
        $fields = [
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'after'      => 'password', 
            ],
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'email');
    }
}
