<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Pembayaran</title>
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
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,1000 1000,0 1000,1000"/></svg>');
            pointer-events: none;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .upload-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            animation: slideInUp 0.8s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 4s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
        }
        
        .card-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }
        
        .card-header .icon {
            font-size: 3rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }
        
        .card-header p {
            opacity: 0.9;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }
        
        .card-body {
            padding: 40px 30px;
        }
        
        .alert {
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 25px;
            font-weight: 500;
            border: none;
            animation: fadeInDown 0.6s ease-out;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-success {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.3);
        }
        
        .alert-danger {
            background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(245, 101, 101, 0.3);
        }
        
        .form-group {
            margin-bottom: 30px;
            position: relative;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d3748;
            font-size: 1rem;
            position: relative;
        }
        
        .form-label::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }
        
        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            position: relative;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }
        
        .file-input {
            position: absolute;
            left: -9999px;
            opacity: 0;
        }
        
        .file-input-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border: 2px dashed #cbd5e0;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f7fafc;
            color: #4a5568;
            font-weight: 500;
            min-height: 120px;
            flex-direction: column;
        }
        
        .file-input-label:hover {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.05);
            transform: translateY(-2px);
        }
        
        .file-input:focus + .file-input-label {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .file-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #667eea;
        }
        
        .file-text {
            text-align: center;
        }
        
        .file-text-main {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .file-text-sub {
            font-size: 0.9rem;
            color: #718096;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }
        
        .btn-submit:hover::before {
            left: 100%;
        }
        
        .btn-submit:active {
            transform: translateY(-1px);
        }
        
        .required-mark {
            color: #e53e3e;
            margin-left: 3px;
        }
        
        .info-box {
            background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%);
            border-left: 4px solid #38b2ac;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            color: #234e52;
        }
        
        .info-box h4 {
            margin-bottom: 10px;
            color: #2c7a7b;
            font-weight: 600;
        }
        
        .info-box ul {
            margin-left: 20px;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 0 10px;
            }
            
            .upload-card {
                border-radius: 20px;
            }
            
            .card-header {
                padding: 30px 20px;
            }
            
            .card-header h2 {
                font-size: 1.8rem;
            }
            
            .card-body {
                padding: 30px 20px;
            }
            
            .form-control {
                padding: 12px 15px;
            }
            
            .btn-submit {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }
        
        .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        
        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #667eea;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 0 auto 10px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="upload-card">
            <div class="card-header">
                <div class="icon">💳</div>
                <h2>Upload Bukti Pembayaran</h2>
                <p>Silakan upload bukti transfer Anda untuk memproses pesanan</p>
            </div>
            
            <div class="card-body">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        ✅ <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        ❌ <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                
                <div class="info-box">
                    <h4>📋 Informasi Penting:</h4>
                    <ul>
                        <li>Format file yang didukung: JPG, PNG, PDF (maksimal 5MB)</li>
                        <li>Pastikan bukti transfer terlihat jelas dan lengkap</li>
                        <li>ID Transaksi harus sesuai dengan yang tertera pada invoice</li>
                    </ul>
                </div>
                
                <form action="/pembayaran/simpan" method="post" enctype="multipart/form-data" id="uploadForm">
                    <div class="form-group">
                        <label for="id_transaksi" class="form-label">
                            ID Transaksi <span class="required-mark">*</span>
                        </label>
                        <input type="text" class="form-control" name="id_transaksi" id="id_transaksi" required placeholder="Masukkan ID Transaksi">
                    </div>
                    
                    <div class="form-group">
                        <label for="bukti_transfer" class="form-label">
                            Upload Bukti Transfer <span class="required-mark">*</span>
                        </label>
                        <div class="file-input-wrapper">
                            <input type="file" class="file-input" name="bukti_transfer" id="bukti_transfer" required accept="image/*,.pdf">
                            <label for="bukti_transfer" class="file-input-label">
                                <div class="file-icon">📤</div>
                                <div class="file-text">
                                    <div class="file-text-main">Klik untuk pilih file</div>
                                    <div class="file-text-sub">atau drag & drop file di sini</div>
                                </div>
                            </label>
                        </div>
                        <div id="fileName" style="margin-top: 10px; color: #667eea; font-weight: 500;"></div>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        Upload Bukti Pembayaran
                    </button>
                    
                    <div class="loading" id="loading">
                        <div class="spinner"></div>
                        <p>Sedang mengupload...</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // File input handling
        document.getElementById('bukti_transfer').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            const fileNameDiv = document.getElementById('fileName');
            
            if (fileName) {
                fileNameDiv.innerHTML = `<strong>File dipilih:</strong> ${fileName}`;
                
                // Update label text
                const label = document.querySelector('.file-input-label');
                label.innerHTML = `
                    <div class="file-icon">✅</div>
                    <div class="file-text">
                        <div class="file-text-main">File berhasil dipilih</div>
                        <div class="file-text-sub">Klik untuk ganti file</div>
                    </div>
                `;
                label.style.borderColor = '#48bb78';
                label.style.background = 'rgba(72, 187, 120, 0.05)';
            }
        });
        
        // Form submission handling
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            const submitBtn = document.querySelector('.btn-submit');
            const loading = document.getElementById('loading');
            
            submitBtn.style.display = 'none';
            loading.style.display = 'block';
        });
        
        // Drag and drop functionality
        const fileLabel = document.querySelector('.file-input-label');
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            fileLabel.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            fileLabel.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            fileLabel.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight(e) {
            fileLabel.style.borderColor = '#667eea';
            fileLabel.style.background = 'rgba(102, 126, 234, 0.1)';
        }
        
        function unhighlight(e) {
            if (!document.getElementById('bukti_transfer').files[0]) {
                fileLabel.style.borderColor = '#cbd5e0';
                fileLabel.style.background = '#f7fafc';
            }
        }
        
        fileLabel.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            document.getElementById('bukti_transfer').files = files;
            
            // Trigger change event
            const event = new Event('change', { bubbles: true });
            document.getElementById('bukti_transfer').dispatchEvent(event);
        }
    </script>
</body>
</html>