<?php

namespace App\Controllers;

class Brands extends BaseController
{
    public function index(): string
    {
        return view('brands');
    }
}
