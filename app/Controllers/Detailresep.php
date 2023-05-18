<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class Detailresep extends BaseController
{
    public function index()
    {
        $this->ProductModel = new ProductModel();

        $data = [
            'data' => $this->ProductModel->getAll(),
        ];
        echo view('product/detail', $data);
        
    }
}
