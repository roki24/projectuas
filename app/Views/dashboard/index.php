?>
<h2>Selamat datang, <?= session('nama') ?>!</h2>
<p>Email: <?= session('email') ?></p>
<p>Alamat: <?= session('alamat') ?></p>
<p>Role: <?= session('role') ?></p>
<a href="/logout">Logout</a>

<?php