<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    // Halaman utama (route '/')
    public function home()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $role = session()->get('role');

        if ($role === 'admin') {
            return redirect()->to('/admin');
        } elseif ($role === 'customer') {
            return redirect()->to('/customer');
        } else {
            return view('dashboard/home'); // fallback umum
        }
    }

    // Halaman dashboard admin (route '/admin')
    public function admin()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/');
        }

        return view('dashboard_admin');
    }

    // Halaman dashboard customer (route '/customer')
    public function customer()
    {
        if (session()->get('role') !== 'customer') {
            return redirect()->to('/');
        }

        return view('dashboard_customer');
    }

    // Halaman dashboard umum setelah login (route '/dashboard')
    public function index()
    {
        return view('dashboard/home');
    }
}
