<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SparepartsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Kabel Listrik',
                'stock'       => 100,
                'unit'        => 'meter',
                'category_id' => 1 
            ],
            [
                'name'        => 'Baut Baja',
                'stock'       => 500,
                'unit'        => 'pcs',
                'category_id' => 2
            ],
            [
                'name'        => 'Pelumas',
                'stock'       => 30,
                'unit'        => 'liter',
                'category_id' => 3
            ]
        ];

        $this->db->table('spareparts')->insertBatch($data);
    }
}
