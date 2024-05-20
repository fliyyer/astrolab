<?php

namespace App\Controllers;

class Features extends BaseController
{
    public function index(): string
    {
        return view('features');
    }
}
