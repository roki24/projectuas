<?= $this->extend('template/customer') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Riwayat Transaksi</h2>

    <?php if (empty($riwayat)) : ?>
        <p>Belum ada transaksi yang dilakukan.</p>
    <?php else : ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Motor</th>
                <th>Tipe</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
            <?php foreach ($riwayat as $i => $r) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($r['merk']) ?></td>
                    <td><?= esc($r['tipe']) ?></td>
                    <td><?= date('d-m-Y', strtotime($r['tanggal'])) ?></td>
                    <td>Rp <?= number_format($r['harga'], 0, ',', '.') ?></td>
                    <td><?= ucfirst($r['status']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
