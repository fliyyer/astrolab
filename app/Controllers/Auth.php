<?php

namespace App\Controllers;


class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $session->set([
                'userId' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
            ]);

            return redirect()->to('/');
        } else {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login')->with('success', 'Logout successful. Please login again.');
    }

    public function register()
    {
        return view('register');
    }

    public function processRegister()
    {
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'country' => 'required',
            'address' => 'required',
            'kecamatan' => 'required',
            'province' => 'required',
            'postalCode' => 'required',
            'phone' => 'required|min_length[10]|max_length[15]',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $userModel = new \App\Models\UserModel();
        $userData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'country' => $this->request->getPost('country'),
            'address' => $this->request->getPost('address'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'province' => $this->request->getPost('province'),
            'postalCode' => $this->request->getPost('postalCode'),
            'phone' => $this->request->getPost('phone'),
        ];
        $userModel->insert($userData);

        return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
    }
}
