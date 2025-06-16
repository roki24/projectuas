<?php

namespace App\Controllers;

use App\Models\MotorModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Files\UploadedFile;

class AdminController extends BaseController
{
    // Menampilkan daftar motor
    public function daftar_motor()
    {
        $motorModel = new MotorModel();
        $data['motor'] = $motorModel->findAll();
        return view('kelola_motor', $data);
    }

    // Menampilkan form tambah motor
    public function tambah_motor()
    {
        return view('form_tambah_motor');
    }

    // Menyimpan motor baru
    public function simpan_motor()
    {
        $motorModel = new MotorModel();

        // Upload foto
        $foto = $this->request->getFile('foto');
        $namaFoto = $foto->getRandomName();
        $foto->move('uploads', $namaFoto);

        // Simpan data
        $motorModel->save([
            'merk'     => $this->request->getPost('merk'),
            'tipe'     => $this->request->getPost('tipe'),
            'tahun'    => $this->request->getPost('tahun'),
            'warna'    => $this->request->getPost('warna'),
            'harga'    => $this->request->getPost('harga'),
            'kondisi'  => $this->request->getPost('kondisi'),
            'stok'     => $this->request->getPost('stok'),
            'foto'     => $namaFoto,
        ]);

        return redirect()->to('/daftar_motor');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $motorModel = new MotorModel();
        $motor = $motorModel->find($id);

        if (!$motor) {
            return redirect()->to('/daftar_motor')->with('error', 'Data tidak ditemukan.');
        }

        return view('form_edit_motor', ['motor' => $motor]);
    }

    // Menyimpan update data motor
    public function update($id)
    {
        $motorModel = new MotorModel();
        $motor = $motorModel->find($id);

        if (!$motor) {
            return redirect()->to('/daftar_motor')->with('error', 'Data tidak ditemukan.');
        }

        $data = [
            'merk' => $this->request->getPost('merk'),
            'tipe' => $this->request->getPost('tipe'),
            'tahun' => $this->request->getPost('tahun'),
            'warna' => $this->request->getPost('warna'),
            'harga' => $this->request->getPost('harga'),
            'kondisi' => $this->request->getPost('kondisi'),
            'stok' => $this->request->getPost('stok'),
        ];

        // Cek apakah ada file baru diupload
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move('uploads/', $newName);
            $data['foto'] = $newName;

            // Hapus foto lama (opsional)
            if (!empty($motor['foto']) && file_exists('uploads/' . $motor['foto'])) {
                unlink('uploads/' . $motor['foto']);
            }
        }

        $motorModel->update($id, $data);
        return redirect()->to('/daftar_motor')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data motor
    public function hapus_motor($id)
    {
        $motorModel = new MotorModel();
        $motor = $motorModel->find($id);

        // Hapus file foto jika ada
        // if ($motor && file_exists('uploads/' . $motor['foto'])) {
        //     unlink('uploads/' . $motor['foto']);
        // }

        $motorModel->delete($id);
        return redirect()->to('/daftar_motor');
    }
}
