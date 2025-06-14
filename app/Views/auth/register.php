<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="/simpan-register" method="post">
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="no_hp" placeholder="No HP"><br>
        <textarea name="alamat" placeholder="Alamat"></textarea><br>

        <!-- Tambahan pilihan Role -->
        <label for="role">Pilih Role:</label><br>
        <select name="role" id="role" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
