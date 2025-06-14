<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSpareparts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'stock' => ['type' => 'INT'],
            'unit' => ['type' => 'VARCHAR', 'constraint' => 50],
            'category_id' => ['type' => 'INT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->createTable('spareparts');
    }

    public function down()
    {
        //
    }
}
