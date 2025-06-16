<?= view('template/header') ?>

<h2>Dashboard Customer</h2>
<p>Selamat datang, <?= session('nama') ?>!</p>

<ul>
    <li><a href="/motor">Lihat Daftar Motor</a></li>
    <li><a href="/pembayaran">Upload Bukti Pembayaran</a></li>
    <li><a href="/logout">Logout</a></li>
</ul>


<?= view('template/footer') ?>
