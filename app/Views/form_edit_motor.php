<?= view('template/header') ?>

<div class="container mt-5">
    <h2>Edit Data Motor</h2>
    <a href="/daftar_motor" class="btn btn-secondary mb-3">Kembali</a>

    <form action="/motor/update/<?= $motor['id_motor'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?= esc($motor['merk']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="tipe" name="tipe" value="<?= esc($motor['tipe']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="<?= esc($motor['tahun']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control" id="warna" name="warna" value="<?= esc($motor['warna']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= esc($motor['harga']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <textarea class="form-control" id="kondisi" name="kondisi" required><?= esc($motor['kondisi']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= esc($motor['stok']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label><br>
            <img src="/uploads/<?= esc($motor['foto']) ?>" width="150" class="img-thumbnail mb-2">
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Ganti Foto (Opsional)</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
</div>

<?= view('template/footer') ?>
