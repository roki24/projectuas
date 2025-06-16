<?php

namespace App\Controllers;

use App\Models\MotorModel;
use CodeIgniter\Controller;

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
    public function edit_motor($id)
    {
        $motorModel = new MotorModel();
        $data['motor'] = $motorModel->find($id);
        return view('form_edit_motor', $data);
    }

    // Menyimpan update data motor
    public function update_motor($id)
    {
        $motorModel = new MotorModel();
        $motor = $motorModel->find($id);

        // Cek jika ada upload foto baru
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('uploads', $namaFoto);
        } else {
            $namaFoto = $motor['foto']; // tetap gunakan foto lama
        }

        // Update data
        $motorModel->update($id, [
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

    // Menghapus data motor
    public function hapus_motor($id)
    {
        $motorModel = new MotorModel();
        $motor = $motorModel->find($id);

        // Hapus file foto jika ada
        if ($motor && file_exists('uploads/' . $motor['foto'])) {
            unlink('uploads/' . $motor['foto']);
        }

        $motorModel->delete($id);
        return redirect()->to('/daftar_motor');
    }
}
