<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aku extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "aku",
            "name" => "Ramzhy"
        ];

        echo view('index', $data);
    }
}
