<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Electrical'],
            ['name' => 'Mechanical'],
            ['name' => 'Chemical'],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}

