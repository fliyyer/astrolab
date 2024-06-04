<?php

namespace App\Controllers;

class Features extends BaseController
{
    public function index()
    {
        $detail = $this->request->getGet('id');
        switch ($detail) {
            case '1':
                return view('detailFeature');
            default:
                return view('features');
        }
    }
}
