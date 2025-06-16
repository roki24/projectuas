<?= view('template/header') ?>

<h2>Kelola Data Motor</h2>
<a href="/motor/tambah">+ Tambah Data Motor</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Stok</th>
            <th>Foto</th>
            <th>Aksi</th>
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
            <td>Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
            <td><?= esc($m['kondisi']) ?></td>
            <td><?= esc($m['stok']) ?></td>
            <td><img src="/uploads/<?= esc($m['foto']) ?>" width="100"></td>
            <td>
                <a href="/motor/edit/<?= $m['id_motor'] ?>">Edit</a> |
                <a href="/motor/hapus/<?= $m['id_motor'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= view('template/footer') ?>
