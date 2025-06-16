<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Upload Bukti Pembayaran</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('customer/uploadBukti') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="transaksi_id" class="form-label">ID Transaksi</label>
            <select name="transaksi_id" id="transaksi_id" class="form-select" required>
                <option value="">-- Pilih Transaksi --</option>
                <?php foreach ($transaksis as $transaksi): ?>
                    <option value="<?= $transaksi['id'] ?>">
                        <?= $transaksi['id'] ?> - <?= $transaksi['nama_customer'] ?> (<?= $transaksi['motor'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="bukti" class="form-label">Upload Bukti Transfer (JPG/PNG/PDF)</label>
            <input type="file" name="bukti" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<?= $this->endSection() ?>
