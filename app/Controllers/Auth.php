<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function loginForm()
    {
        return view('auth/login');
    }

    public function login()
    {
        $auth = new AuthModel();
        $user = $auth->where('username', $this->request->getPost('username'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set([
                'id_user'   => $user['id_user'],
                'nama'      => $user['nama'],
                'username'  => $user['username'],
                'email'     => $user['email'],
                'alamat'    => $user['alamat'],
                'role'      => $user['role'],
                'logged_in' => true
            ]);

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/customer');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function simpanRegister()
    {
        $auth = new AuthModel();

        // Ambil role dari input form
        $roleInput = $this->request->getPost('role');
        $validRoles = ['admin', 'customer'];

        // Jika role tidak valid, fallback ke 'customer'
        $role = in_array($roleInput, $validRoles) ? $roleInput : 'customer';

        $auth->save([
            'nama'      => $this->request->getPost('nama'),
            'username'  => $this->request->getPost('username'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'email'     => $this->request->getPost('email'),
            'no_hp'     => $this->request->getPost('no_hp'),
            'alamat'    => $this->request->getPost('alamat'),
            'role'      => $role
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
