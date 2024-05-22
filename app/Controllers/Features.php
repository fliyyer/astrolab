<?php

namespace App\Controllers;

class Features extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('features');
    }
}
