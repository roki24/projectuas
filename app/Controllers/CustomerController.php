<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MotorModel;

class CustomerController extends BaseController
{
    public function index()
    {
        return view('dashboard_customer');
    }

    public function motor()
    {
        $motorModel = new MotorModel();
        $data['motor'] = $motorModel->findAll();

        return view('customer/motor', $data);
    }
    public function beli($id_motor)
{
    $motorModel = new \App\Models\MotorModel();
    $transaksiModel = new \App\Models\TransaksiModel();

    $motor = $motorModel->find($id_motor);
    if (!$motor) {
        return redirect()->to('/motor')->with('error', 'Motor tidak ditemukan');
    }

    // Ambil data user dari session
    $id_user = session()->get('id_user'); // pastikan ini ada saat login

    // Simpan transaksi
    $transaksiModel->save([
        'id_user' => $id_user,
        'id_motor' => $id_motor,
        'tanggal' => date('Y-m-d'),
        'harga' => $motor['harga'],
        'status' => 'pending'
    ]);

    return redirect()->to('/motor')->with('success', 'Pembelian berhasil, silakan upload bukti transfer.');
}
public function uploadBukti()
{
    $userId = session()->get('id'); // ID user yang login
    $transaksiModel = new \App\Models\TransaksiModel();

    $data['transaksis'] = $transaksiModel
        ->where('id_user', $userId)
        ->where('status', 'pending')
        ->findAll();

    return view('customer/upload_bukti', $data);
}

public function saveBukti()
{
    $bukti = $this->request->getFile('bukti');
    $id_transaksi = $this->request->getPost('id_transaksi');

    if ($bukti->isValid() && !$bukti->hasMoved()) {
        $namaFile = $bukti->getRandomName();
        $bukti->move('uploads/bukti/', $namaFile);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksiModel->update($id_transaksi, [
            'bukti_transfer' => $namaFile,
            'status' => 'menunggu verifikasi'
        ]);

        return redirect()->to('/customer/upload-bukti')->with('message', 'Bukti berhasil diupload!');
    }

    return redirect()->back()->with('message', 'Upload gagal!');
}

public function riwayat()
{
    $transaksiModel = new TransaksiModel();
    $id_user = session()->get('id_user');

    $data['riwayat'] = $transaksiModel->getByUser($id_user);

    return view('customer/riwayat', $data);
}

}
