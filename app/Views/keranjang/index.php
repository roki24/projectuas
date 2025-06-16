<?= view('template/header') ?>

<h2>Keranjang Belanja</h2>

<table border="1">
    <tr>
        <th>Nama Motor</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?= $item['nama_motor'] ?></td>
        <td><?= number_format($item['harga']) ?></td>
        <td><?= $item['jumlah'] ?></td>
        <td><a href="/keranjang/hapus/<?= $item['id_keranjang'] ?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?= view('template/footer') ?>
