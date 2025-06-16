<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    protected $transaksiModel;
    protected $pembayaranModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $userId = session('id_user');

        // Ambil transaksi user yang belum dibayar
        $transaksi = $this->transaksiModel
            ->where('id_user', $userId)
            ->where('status', 'Belum Bayar')
            ->first();

        return view('pembayaran/upload_bukti', [
            'transaksi' => $transaksi
        ]);
    }

    public function upload()
    {
        $bukti = $this->request->getFile('bukti_transfer');
        $transaksiId = $this->request->getPost('transaksi_id');

        if ($bukti->isValid() && !$bukti->hasMoved()) {
            $newName = $bukti->getRandomName();
            $bukti->move(ROOTPATH . 'writable/uploads', $newName);

            // Simpan bukti ke tabel pembayaran
            $this->pembayaranModel->save([
                'transaksi_id' => $transaksiId,
                'bukti_transfer' => $newName,
                'tanggal_upload' => date('Y-m-d H:i:s')
            ]);

            // Update status transaksi
            $this->transaksiModel->update($transaksiId, [
                'status' => 'Menunggu Konfirmasi'
            ]);

            return redirect()->to('/pembayaran')->with('success', 'Bukti pembayaran berhasil diupload.');
        }

        return redirect()->back()->with('error', 'Upload bukti gagal. Silakan coba lagi.');
    }
}
