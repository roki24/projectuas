<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Bukti Transfer</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body class="container py-5">
    <h2 class="mb-4">Upload Bukti Transfer</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <form action="<?= base_url('/pembayaran/upload') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="id_transaksi" class="form-label">ID Transaksi</label>
            <input type="text" class="form-control" name="id_transaksi" id="id_transaksi" required>
        </div>

        <div class="mb-3">
            <label for="bukti_transfer" class="form-label">Bukti Transfer (gambar)</label>
            <input type="file" class="form-control" name="bukti_transfer" id="bukti_transfer" required>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</body>
</html>
