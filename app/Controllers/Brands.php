<?php

namespace App\Controllers;

class Brands extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('brands');
    }
}
