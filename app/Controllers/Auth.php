<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        // Redirect to the dashboard if the user is already logged in
        if (session()->has('user_id')) {
            return redirect()->to('/dashboard');
        }

        return view('login');
    }

    

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set('user_id', $user['id']);
                $session->set('username', $user['username']);
                $session->set('role_id', $user['role_id']);
                $session->set('branch_id', $user['branch_id']);
                return redirect()->to('/dashboard');
            }
        }

        return redirect()->to('/login')->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
