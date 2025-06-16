<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Customer - Showroom Motor</title>
    <style>
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
        min-height: 100vh;
    }

    .dashboard-container {
        max-width: 1200px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .dashboard-container::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 1px, transparent 1px);
        background-size: 30px 30px;
        animation: float 15s infinite linear;
        z-index: -1;
    }

    @keyframes float {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .dashboard-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .dashboard-title {
        font-size: 2.8em;
        color: #2c3e50;
        margin: 0 0 10px 0;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        background: linear-gradient(45deg, #2c3e50, #3498db);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .dashboard-title::after {
        content: '';
        display: block;
        width: 100px;
        height: 4px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        margin: 20px auto;
        border-radius: 2px;
        animation: pulse 2s infinite ease-in-out;
    }

    @keyframes pulse {
        0%, 100% { transform: scaleX(1); opacity: 1; }
        50% { transform: scaleX(1.2); opacity: 0.7; }
    }

    .welcome-section {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 30px;
        border-radius: 20px;
        margin-bottom: 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
    }

    .welcome-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 2px, transparent 2px);
        background-size: 40px 40px;
        animation: rotate 20s infinite linear;
        z-index: 1;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .welcome-content {
        position: relative;
        z-index: 2;
    }

    .welcome-icon {
        font-size: 4em;
        margin-bottom: 15px;
        display: block;
        animation: bounce 2s infinite ease-in-out;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .welcome-text {
        font-size: 1.8em;
        font-weight: 300;
        margin: 0;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .user-name {
        font-weight: 700;
        color: #ffd700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        display: inline-block;
        margin-left: 5px;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .menu-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }

    .menu-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.5s ease;
    }

    .menu-card:hover::before {
        left: 100%;
    }

    .menu-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        border-color: #667eea;
    }

    .menu-icon {
        font-size: 4em;
        margin-bottom: 20px;
        display: block;
        transition: transform 0.3s ease;
    }

    .menu-card:hover .menu-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .menu-title {
        font-size: 1.5em;
        font-weight: 600;
        color: #2c3e50;
        margin: 0 0 15px 0;
    }

    .menu-description {
        color: #7f8c8d;
        font-size: 0.95em;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .menu-link {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .menu-link:hover {
        background: linear-gradient(45deg, #5a67d8, #6b46c1);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    .logout-card {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
    }

    .logout-card .menu-title {
        color: white;
    }

    .logout-card .menu-description {
        color: rgba(255, 255, 255, 0.8);
    }

    .logout-card .menu-link {
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }

    .logout-card .menu-link:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-2px);
    }

    .stats-section {
        margin-top: 40px;
        padding: 30px;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 20px;
        border: 1px solid #dee2e6;
    }

    .stats-title {
        text-align: center;
        font-size: 1.5em;
        color: #495057;
        margin-bottom: 25px;
        font-weight: 600;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .stat-item {
        background: white;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-5px);
    }

    .stat-number {
        font-size: 2.5em;
        font-weight: bold;
        color: #667eea;
        display: block;
        margin-bottom: 8px;
    }

    .stat-label {
        color: #6c757d;
        font-size: 0.9em;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 20px;
            margin: 10px;
        }
        
        .dashboard-title {
            font-size: 2.2em;
        }
        
        .welcome-text {
            font-size: 1.4em;
        }
        
        .menu-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .dashboard-title {
            font-size: 1.8em;
        }
        
        .welcome-text {
            font-size: 1.2em;
        }
        
        .menu-card {
            padding: 20px;
        }
        
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h2 class="dashboard-title">🏍️ Dashboard Customer</h2>
    </div>

    <div class="welcome-section">
        <div class="welcome-content">
            <span class="welcome-icon">👋</span>
            <p class="welcome-text">
                Selamat datang,<span class="user-name"><?= session('nama') ?>!</span>
            </p>
        </div>
    </div>

    <div class="menu-grid">
        <div class="menu-card">
            <span class="menu-icon">🏍️</span>
            <h3 class="menu-title">Daftar Motor</h3>
            <p class="menu-description">
                Jelajahi koleksi motor bekas berkualitas dengan berbagai pilihan merk, tipe, dan harga yang kompetitif.
            </p>
            <a href="/motor" class="menu-link">Lihat Motor</a>
        </div>

        <div class="menu-card">
            <span class="menu-icon">💳</span>
            <h3 class="menu-title">Upload Pembayaran</h3>
            <p class="menu-description">
                Upload bukti pembayaran Anda untuk mempercepat proses verifikasi dan konfirmasi pembelian motor.
            </p>
            <a href="/pembayaran" class="menu-link">Upload Bukti</a>
        </div>

        <div class="menu-card logout-card">
            <span class="menu-icon">🚪</span>
            <h3 class="menu-title">Keluar Akun</h3>
            <p class="menu-description">
                Akhiri sesi Anda dengan aman. Jangan lupa logout setelah selesai menggunakan sistem.
            </p>
            <a href="/logout" class="menu-link">Logout</a>
        </div>
    </div>

    <div class="stats-section">
        <h3 class="stats-title">📊 Informasi Showroom</h3>
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number">250+</span>
                <span class="stat-label">Motor Tersedia</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">15+</span>
                <span class="stat-label">Brand Terpercaya</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">1500+</span>
                <span class="stat-label">Customer Puas</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">24/7</span>
                <span class="stat-label">Support</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>