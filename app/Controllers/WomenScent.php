<?php

namespace App\Controllers;

class WomenScent extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        return view('womenscent');
    }
}
