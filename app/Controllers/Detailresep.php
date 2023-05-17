<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Detailresep extends BaseController
{
    public function index()
    {
        return view('/product/detail');
    }
}
