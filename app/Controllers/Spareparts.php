<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SparepartModel;
use App\Models\CategoryModel;

class Spareparts extends BaseController
{
    protected $sparepartModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->sparepartModel = new SparepartModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        return view('spareparts/index');
    }

    public function getData()
    {
        $data = $this->sparepartModel->getWithCategory();
        return $this->response->setJSON(['data' => $data]);
    }

    public function create()
    {
        $categories = $this->categoryModel->findAll();
        return view('spareparts/create', compact('categories'));
    }

    public function store()
    {
        $this->sparepartModel->save($this->request->getPost());
        return redirect()->to('/spareparts');
    }

    public function edit($id)
    {
        $sparepart = $this->sparepartModel->find($id);
        $categories = $this->categoryModel->findAll();
        return view('spareparts/edit', compact('sparepart', 'categories'));
    }

    public function update($id)
    {
        $this->sparepartModel->update($id, $this->request->getPost());
        return redirect()->to('/spareparts');
    }

    public function delete($id)
    {
        $this->sparepartModel->delete($id);
        return redirect()->to('/spareparts');
    }
}
