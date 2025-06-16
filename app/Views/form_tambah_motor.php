<?= view('template/header') ?>

<h2>Tambah Data Motor</h2>

<form action="/motor/simpan" method="post" enctype="multipart/form-data">
    <label>Merk:</label><br>
    <input type="text" name="merk"><br><br>

    <label>Tipe:</label><br>
    <input type="text" name="tipe"><br><br>

    <label>Tahun:</label><br>
    <input type="number" name="tahun"><br><br>

    <label>Warna:</label><br>
    <input type="text" name="warna"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga"><br><br>

    <label>Kondisi:</label><br>
    <textarea name="kondisi"></textarea><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok"><br><br>

    <label>Foto:</label><br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Simpan</button>
</form>

<?= view('template/footer') ?>
