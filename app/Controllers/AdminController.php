<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function daftar_motor()
    {
        // Contoh data dummy sementara (nanti bisa diganti dari database)
        $data['motor'] = [
            [
                'id_motor' => 1,
                'nama_motor' => 'Honda Beat Street',
                'harga' => 15000000,
                'gambar' => 'beat.jpg'
            ],
            [
                'id_motor' => 2,
                'nama_motor' => 'Yamaha Aerox',
                'harga' => 22000000,
                'gambar' => 'aerox.png'
            ]
        ];

        return view('daftar_motor', $data);
    }
    
    public function tambah_motor()
    {
        return view('form_tambah_motor');
    }

    public function simpan_motor()
    {
        $foto = $this->request->getFile('foto');
        $namaFoto = $foto->getRandomName();
        $foto->move('uploads', $namaFoto);

        $motorModel = new MotorModel();
        $motorModel->save([
            'merk' => $this->request->getPost('merk'),
            'tipe' => $this->request->getPost('tipe'),
            'tahun' => $this->request->getPost('tahun'),
            'warna' => $this->request->getPost('warna'),
            'harga' => $this->request->getPost('harga'),
            'kondisi' => $this->request->getPost('kondisi'),
            'stok' => $this->request->getPost('stok'),
            'foto' => $namaFoto,
        ]);

        return redirect()->to('/daftar_motor');
    }

}
