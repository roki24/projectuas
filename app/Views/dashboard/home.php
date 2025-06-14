<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorum Motor - Motor Bekas Premium</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            background: #0a0a0a;
            color: #ffffff;
        }

        /* Elegant Background */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center, #1a1a2e 0%, #16213e 50%, #0f0f23 100%);
            z-index: -3;
        }

        .background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(212, 175, 55, 0.03) 0%, 
                transparent 25%, 
                transparent 75%, 
                rgba(212, 175, 55, 0.03) 100%);
            animation: elegantShine 8s ease-in-out infinite;
        }

        @keyframes elegantShine {
            0%, 100% { opacity: 0.3; transform: translateX(-100px); }
            50% { opacity: 1; transform: translateX(100px); }
        }

        /* Sophisticated particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: linear-gradient(45deg, rgba(212, 175, 55, 0.6), rgba(255, 255, 255, 0.3));
            border-radius: 50%;
            animation: gentleFloat 12s infinite ease-in-out;
        }

        @keyframes gentleFloat {
            0%, 100% { 
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0;
            }
            10% { opacity: 1; }
            50% { 
                transform: translateY(-50px) rotate(180deg) scale(1.2);
                opacity: 0.8;
            }
            90% { opacity: 1; }
        }

        /* Main Container */
        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
        }

        /* Elegant Header */
        .header {
            text-align: center;
            margin-bottom: 4rem;
            animation: fadeInDown 1.2s ease-out;
        }

        .brand-logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
            position: relative;
            background: linear-gradient(135deg, #d4af37 0%, #ffd700 50%, #b8860b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 
                0 0 30px rgba(212, 175, 55, 0.3),
                inset 0 0 20px rgba(255, 255, 255, 0.1);
            animation: subtleGlow 3s ease-in-out infinite alternate;
        }

        .brand-logo::before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: linear-gradient(45deg, #d4af37, transparent, #d4af37);
            border-radius: 50%;
            z-index: -1;
            animation: rotate 8s linear infinite;
        }

        .brand-logo::after {
            content: '🏍';
            font-size: 2.5rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }

        @keyframes subtleGlow {
            0% { box-shadow: 0 0 30px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(255, 255, 255, 0.1); }
            100% { box-shadow: 0 0 50px rgba(212, 175, 55, 0.5), inset 0 0 30px rgba(255, 255, 255, 0.2); }
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 300;
            color: #ffffff;
            letter-spacing: 3px;
            margin-bottom: 0.5rem;
            position: relative;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        .brand-name::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
        }

        .brand-tagline {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .brand-subtitle {
            font-size: 0.95rem;
            color: rgba(212, 175, 55, 0.9);
            font-style: italic;
            font-weight: 300;
        }

        /* Luxury Card */
        .main-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3.5rem;
            text-align: center;
            box-shadow: 
                0 25px 50px rgba(0,0,0,0.3),
                inset 0 1px 0 rgba(255,255,255,0.1);
            max-width: 650px;
            width: 100%;
            animation: fadeInUp 1.2s ease-out 0.3s both;
            position: relative;
            overflow: hidden;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.5), transparent);
        }

        .welcome-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 400;
            color: #ffffff;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }

        .welcome-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.8;
            margin-bottom: 3rem;
            font-weight: 300;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Premium Features */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.03);
            padding: 2rem 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .feature-item:hover::before {
            left: 100%;
        }

        .feature-item:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(212, 175, 55, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .feature-icon {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            display: block;
            filter: grayscale(0.3);
        }

        .feature-title {
            font-size: 1rem;
            color: #ffffff;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .feature-desc {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 300;
        }

        /* Luxury Buttons */
        .button-group {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            min-width: 180px;
            font-family: 'Inter', sans-serif;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #d4af37 0%, #ffd700 50%, #b8860b 100%);
            color: #000000;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
            font-weight: 600;
        }

        .btn-secondary {
            background: transparent;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.4);
            background: linear-gradient(135deg, #ffd700 0%, #d4af37 50%, #b8860b 100%);
        }

        .btn-secondary:hover {
            transform: translateY(-3px) scale(1.02);
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.2);
        }

        .btn-icon {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .btn:hover .btn-icon {
            transform: scale(1.2);
        }

        /* Elegant Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* Decorative Elements */
        .decoration {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            animation: gentleFloat 8s ease-in-out infinite;
            pointer-events: none;
        }

        .decoration:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 5%;
            left: 5%;
            animation-delay: -2s;
        }

        .decoration:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: 10%;
            right: 5%;
            animation-delay: -4s;
        }

        .decoration:nth-child(3) {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 10%;
            animation-delay: -6s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .brand-name {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }
            
            .main-card {
                padding: 2.5rem 1.5rem;
            }
            
            .welcome-title {
                font-size: 2rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .button-group {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .brand-name {
                font-size: 2.2rem;
            }
            
            .main-card {
                padding: 2rem 1.2rem;
            }
            
            .feature-item {
                padding: 1.5rem 1rem;
            }
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        .scroll-indicator::after {
            content: '⌄';
            font-size: 1.5rem;
            color: rgba(212, 175, 55, 0.7);
            animation: pulse 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="particles" id="particles"></div>
    
    <div class="decoration"></div>
    <div class="decoration"></div>
    <div class="decoration"></div>
    
    <div class="container">
        <header class="header">
            <div class="brand-logo"></div>
            <h1 class="brand-name">Sorum Motor</h1>
            <div class="brand-tagline">Koleksi Premium</div>
            <div class="brand-subtitle">Kualitas Terbaik di Setiap Detail</div>
        </header>
        
        <main class="main-card">
            <h2 class="welcome-title">Selamat Datang di Dunia Kemewahan</h2>
            <p class="welcome-description">
                Temukan koleksi eksklusif motor bekas premium yang telah dikurasi khusus 
                untuk para penggemar sejati yang menghargai kualitas dan kemewahan tertinggi.
            </p>
            
            <div class="features-grid">
                <div class="feature-item">
                    <span class="feature-icon">🔍</span>
                    <div class="feature-title">Seleksi Terkurasi</div>
                    <div class="feature-desc">Motor premium pilihan terbaik</div>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">💎</span>
                    <div class="feature-title">Kualitas Tersertifikasi</div>
                    <div class="feature-desc">Standar inspeksi ketat</div>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🏆</span>
                    <div class="feature-title">Layanan Ahli</div>
                    <div class="feature-desc">Konsultasi profesional</div>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🔒</span>
                    <div class="feature-title">Proses Aman</div>
                    <div class="feature-desc">Jaminan transaksi terpercaya</div>
                </div>
            </div>
            
            <div class="button-group">
                <a href="/login" class="btn btn-primary">
                    <span class="btn-icon">✨</span>
                    <span>Masuk Portal</span>
                </a>
                <a href="/register" class="btn btn-secondary">
                    <span class="btn-icon">👑</span>
                    <span>Bergabung Elite</span>
                </a>
            </div>
        </main>
        
        <div class="scroll-indicator"></div>
    </div>

    <script>
        // Create elegant floating particles
        function createElegantParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random elegant size
                const size = Math.random() * 4 + 1;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                // Random position
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                
                // Random animation properties
                particle.style.animationDelay = Math.random() * 12 + 's';
                particle.style.animationDuration = (Math.random() * 8 + 10) + 's';
                
                particlesContainer.appendChild(particle);
            }
        }

        // Elegant button interactions
        function initializeButtonEffects() {
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px) scale(1.02)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });

                // Luxury ripple effect
                btn.addEventListener('click', function(e) {
                    const ripple = document.createElement('div');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        border-radius: 50%;
                        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
                        transform: scale(0);
                        animation: luxuryRipple 0.8s cubic-bezier(0.4, 0, 0.2, 1);
                        pointer-events: none;
                        z-index: 10;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 800);
                });
            });
        }

        // Feature hover effects
        function initializeFeatureEffects() {
            document.querySelectorAll('.feature-item').forEach(feature => {
                feature.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.feature-icon');
                    icon.style.transform = 'scale(1.2) rotate(5deg)';
                    icon.style.filter = 'grayscale(0) brightness(1.2)';
                });
                
                feature.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.feature-icon');
                    icon.style.transform = 'scale(1) rotate(0deg)';
                    icon.style.filter = 'grayscale(0.3) brightness(1)';
                });
            });
        }

        // Add luxury ripple animation
        const luxuryStyle = document.createElement('style');
        luxuryStyle.textContent = `
            @keyframes luxuryRipple {
                0% {
                    transform: scale(0);
                    opacity: 1;
                }
                100% {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(luxuryStyle);

        // Smooth scroll effect
        function initializeSmoothEffects() {
            let scrollPosition = 0;
            window.addEventListener('scroll', () => {
                scrollPosition = window.pageYOffset;
                
                // Parallax effect for decorations
                document.querySelectorAll('.decoration').forEach((decoration, index) => {
                    const speed = 0.5 + (index * 0.1);
                    decoration.style.transform = translateY(${scrollPosition * speed}px);
                });
            });
        }

        // Initialize all effects
        document.addEventListener('DOMContentLoaded', function() {
            createElegantParticles();
            initializeButtonEffects();
            initializeFeatureEffects();
            initializeSmoothEffects();
        });

        // Preloader effect
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>