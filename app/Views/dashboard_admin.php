<?= view('template/header') ?>

<h2>Dashboard Admin</h2>
<p>Selamat datang, <?= session('nama') ?>!</p>

<ul>
    <li><a href="/motor">Kelola Data Motor</a></li>
    <li><a href="/transaksi">Lihat Data Transaksi</a></li>
    <li><a href="/verifikasi">Verifikasi Pembayaran</a></li>
    <li><a href="/logout">Logout</a></li>
</ul>

<?= view('template/footer') ?>
