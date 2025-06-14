<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Controller;
use Config\Database;

class DbTest extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $query = $db->query("SELECT name FROM sys.databases");
        $results = $query->getResult();
        return json_encode($results);
    }
}
