<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DaftarResep extends BaseController
{
    public function index()
    {
        echo view('daftar_resep');
    }
}
