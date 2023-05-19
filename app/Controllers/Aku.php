<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Aku extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {

        $this->ProductModel = new ProductModel();

    }
    public function index()
    {
        $products = $this->ProductModel->findAll();

        $payload = [
            "products" => $products
        ];

        echo view('daftar_resep', $payload);

    }
    
    
}
