<?php

namespace App\Controllers;

class Collection extends BaseController
{
    public function index(): string
    {
        return view('collection');
    }
}
