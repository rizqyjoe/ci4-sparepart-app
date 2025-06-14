<?php

namespace App\Models;

use CodeIgniter\Model;

class SparepartModel extends Model
{
    protected $table = 'spareparts';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'stock', 'unit', 'category_id'];

    public function getWithCategory()
    {
        return $this->select('spareparts.*, categories.name AS category_name')
            ->join('categories', 'categories.id = spareparts.category_id')
            ->findAll();
    }
}
