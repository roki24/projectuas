<?php

namespace App\Controllers;

use App\Models\KeranjangModel;
use App\Models\MotorModel;

class Keranjang extends BaseController
{
    public function index()
    {
        $keranjangModel = new KeranjangModel();
        $motorModel = new MotorModel();

        $id_user = session()->get('id_user');
        $items = $keranjangModel->where('id_user', $id_user)->findAll();

        $data['items'] = [];

        foreach ($items as $item) {
            $motor = $motorModel->find($item['id_motor']);
            $data['items'][] = [
                'motor' => $motor,
                'jumlah' => $item['jumlah'],
            ];
        }

        return view('keranjang/index', $data);
    }

    public function tambah($id_motor)
    {
        $keranjangModel = new KeranjangModel();
        $id_user = session()->get('id_user');

        $existing = $keranjangModel
            ->where('id_user', $id_user)
            ->where('id_motor', $id_motor)
            ->first();

        if ($existing) {
            // Jika sudah ada, tambahkan jumlah
            $keranjangModel->update($existing['id_keranjang'], [
                'jumlah' => $existing['jumlah'] + 1
            ]);
        } else {
            // Jika belum ada, buat entri baru
            $keranjangModel->save([
                'id_user' => $id_user,
                'id_motor' => $id_motor,
                'jumlah' => 1
            ]);
        }

        return redirect()->to('/keranjang');
    }
}
