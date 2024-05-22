<?php

namespace App\Controllers;

class Collection extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
        $category = $this->request->getGet('category');
        switch ($category) {
            case 'goods-trinkets':
                return view('homegt');
            case 'exclusive-release':
                return view('exlusive');
            case 'astro':
                return view('astro');
            default:
                return view('collection');
        }
    }
    // public function collection()
    // {
    //     $category = $this->request->getGet('category');
    //     switch ($category) {
    //         case 'accessories':
    //             return view('accessories');
    //         default:
    //             return view('collection');
    //     }
    // }
}
