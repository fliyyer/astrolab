<?php

namespace App\Controllers;

use App\Models\CartModel;

class Home extends BaseController
{
    public function index()

    {
        $category = $this->request->getGet('category');
        switch ($category) {
            case 'astro':
                return view('astro');
        }
        return view('homepage');
    }
    public function men()
    {
        $category = $this->request->getGet('category');

        switch ($category) {
            case 'accessories':
                return view('accessories');
            case 'apparel':
                return view('apparel');
            case 'footwear':
                return view('footwear');
            case 'grooming':
                return view('grooming');
            case 'bags-wallets':
                return view('bags&wallets');
            case 'jewelry':
                return view('jewelry');
            default:
                return view('men');
        }
    }

    public function women()
    {
        $category = $this->request->getGet('category');
        switch ($category) {
            case 'accessories':
                return view('accessories');
            case 'apparel':
                return view('apparel');
            case 'footwear':
                return view('footwear');
            case 'grooming':
                return view('grooming');
            case 'bags-wallets':
                return view('bags&wallets');
            case 'jewelry':
                return view('jewelry');
            default:
                return view('women');
        }
    }

    public function carts()
    {
        $session = session();
        $data = [
            'name' => $session->get('name'),
            'email' => $session->get('email'),
        ];

        return view('carts', $data);
    }
    public function productDetail()
    {
        return view('product_detail');
    }
}
