<?= view('template/header') ?>

<h2>Daftar Motor</h2>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>Kondisi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($motor as $m): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($m['merk']) ?></td>
            <td><?= esc($m['tipe']) ?></td>
            <td><?= esc($m['tahun']) ?></td>
            <td><?= esc($m['warna']) ?></td>
            <td><?= esc($m['kondisi']) ?></td>
            <td>Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
            <td><?= esc($m['stok']) ?></td>
            <td>
                <?php if (!empty($m['foto'])) : ?>
                    <img src="<?= base_url('uploads/' . $m['foto']) ?>" width="100">
                <?php else : ?>
                    <em>Tidak ada foto</em>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('template/footer') ?>
