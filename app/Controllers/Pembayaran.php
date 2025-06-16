<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;

    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $data['title'] = 'Upload Bukti Pembayaran';
        return view('pembayaran/upload_bukti', $data);
    }

    public function simpan()
    {
        $idTransaksi = $this->request->getPost('id_transaksi');
        $file = $this->request->getFile('bukti_transfer');

        if ($file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/bukti/', $namaFile);

            $this->pembayaranModel->save([
                'id_transaksi' => $idTransaksi,
                'bukti_transfer' => $namaFile,
            ]);

            return redirect()->to('/pembayaran')->with('success', 'Bukti pembayaran berhasil diunggah.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file.');
    }
}
