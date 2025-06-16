<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
        }
        
        .header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }
        
        .table-container {
            padding: 30px;
            overflow-x: auto;
        }
        
        .modern-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .modern-table thead {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }
        
        .modern-table th {
            padding: 20px 15px;
            text-align: left;
            font-weight: 600;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
        }
        
        .modern-table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .modern-table tbody tr:hover {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f4ff 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .modern-table td {
            padding: 20px 15px;
            border: none;
            vertical-align: middle;
        }
        
        .modern-table tbody tr:nth-child(even) {
            background: rgba(248, 249, 255, 0.5);
        }
        
        .motor-image {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        
        .motor-image:hover {
            transform: scale(1.1);
        }
        
        .no-image {
            display: inline-block;
            width: 80px;
            height: 60px;
            background: linear-gradient(135deg, #ddd 0%, #bbb 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: #666;
            font-style: italic;
        }
        
        .price {
            font-weight: 700;
            color: #2c5282;
            font-size: 1.1rem;
        }
        
        .stock {
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            text-align: center;
            min-width: 60px;
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
        }
        
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.85rem;
        }
        
        .btn-success {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(72, 187, 120, 0.4);
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.6);
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }
        
        .row-number {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 15px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h2 {
                font-size: 2rem;
            }
            
            .table-container {
                padding: 15px;
            }
            
            .modern-table th,
            .modern-table td {
                padding: 12px 8px;
                font-size: 0.85rem;
            }
            
            .motor-image,
            .no-image {
                width: 60px;
                height: 45px;
            }
        }
        
        .loading-animation {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .modern-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .modern-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .modern-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .modern-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
        .modern-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>🏍️ Daftar Motor</h2>
            <p>Temukan motor impian Anda dengan harga terbaik</p>
        </div>
        
        <div class="table-container">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Tahun</th>
                        <th>Warna</th>
                        <th>Kondisi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($motor as $m): ?>
                    <tr class="loading-animation">
                        <td><div class="row-number"><?= $no++ ?></div></td>
                        <td><strong><?= esc($m['merk']) ?></strong></td>
                        <td><?= esc($m['tipe']) ?></td>
                        <td><?= esc($m['tahun']) ?></td>
                        <td><?= esc($m['warna']) ?></td>
                        <td><span class="status-badge"><?= esc($m['kondisi']) ?></span></td>
                        <td><span class="price">Rp <?= number_format($m['harga'], 0, ',', '.') ?></span></td>
                        <td><span class="stock"><?= esc($m['stok']) ?></span></td>
                        <td>
                            <?php if (!empty($m['foto'])) : ?>
                                <img src="<?= base_url('uploads/' . $m['foto']) ?>" class="motor-image" alt="Motor">
                            <?php else : ?>
                                <div class="no-image">Tidak ada foto</div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($m['stok'] > 0): ?>
                                <a href="<?= base_url('customer/beli/' . $m['id_motor']) ?>" class="btn btn-success">Beli</a>
                            <?php else: ?>
                                <span style="color:#e53e3e; font-weight: 600;">Stok Habis</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Animasi loading untuk tabel
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.loading-animation');
            rows.forEach((row, index) => {
                setTimeout(() => {
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>