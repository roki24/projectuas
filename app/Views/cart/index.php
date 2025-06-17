<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <style>
      body { font-family: sans-serif; padding: 2rem; }
      table { width:100%; border-collapse: collapse; margin-bottom:1rem; }
      th,td { border:1px solid #ddd; padding:0.5rem; }
      th { background:#f4f4f4; }
      .total { text-align: right; font-weight: bold; }
      .btn { padding: 0.4rem 0.8rem; text-decoration:none; border-radius:4px; }
      .btn-danger { background:#e53e3e; color:white; }
      .btn-clear  { background:#718096; color:white; }
    </style>
</head>
<body>

<h2>🛒 Keranjang Belanja</h2>

<?php if (session()->getFlashdata('msg')): ?>
  <p style="color:green;"><?= session()->getFlashdata('msg') ?></p>
<?php endif ?>

<?php if (empty($cart)): ?>
  <p>Keranjang kosong.</p>
<?php else: ?>
  <form action="<?= base_url('cart/clear') ?>" method="post" style="margin-bottom:1rem;">
    <button type="submit" class="btn btn-clear">Kosongkan Keranjang</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Motor</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Subtotal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($cart as $item): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= esc($item['nama']) ?></td>
        <td>Rp <?= number_format($item['harga'],0,',','.') ?></td>
        <td><?= $item['qty'] ?></td>
        <td>Rp <?= number_format($item['harga']*$item['qty'],0,',','.') ?></td>
        <td>
          <form action="<?= base_url('cart/remove/'.$item['id_motor']) ?>" method="post">
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
      <tr>
        <td colspan="4" class="total">Total</td>
        <td colspan="2" class="total">Rp <?= number_format($total,0,',','.') ?></td>
      </tr>
    </tbody>
  </table>
<?php endif ?>

<a href="<?= base_url('/') ?>">← Lanjut Belanja</a>

</body>
</html>
