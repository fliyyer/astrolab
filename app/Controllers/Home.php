<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login');
        }
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
}
