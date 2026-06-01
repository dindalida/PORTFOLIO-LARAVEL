<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Dinda Maulida</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Mengunci halaman biar gak bisa di-scroll ke bawah */
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden !important;
            height: 100vh;
            background-color: #050505;
            color: #fff;
            font-family: 'Urbanist', sans-serif;
        }

        /* NAVBAR MENU ATAS (BIKIN MANUAL BIAR AMAN) */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: rgba(5, 5, 5, 0.8);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            box-sizing: border-box;
            z-index: 100;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar-logo {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            letter-spacing: 1px;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }

        .navbar-menu a {
            text-decoration: none;
            color: #888;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.3s;
            cursor: pointer;
        }

        .navbar-menu a:hover, .navbar-menu a.active-nav {
            color: #00f3ff;
            text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
        }

        /* WADAH UTAMA SLIDE HALAMAN */
        .slide-wrapper {
            position: relative;
            width: 100vw;
            height: calc(100vh - 80px);
            margin-top: 80px;
        }

        /* Mengatur semua halaman bertumpuk jadi satu */
        section {
            position: absolute !important;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
            transform: scale(0.98);
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 40px;
        }

        /* Halaman yang aktif akan muncul ke depan */
        section.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            z-index: 10;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* --- GAYA CYBERPUNK --- */
        .accent-cyan { color: #00f3ff; text-shadow: 0 0 10px rgba(0, 243, 255, 0.5); }
        .accent-red { color: #ff0055; text-shadow: 0 0 10px rgba(255, 0, 85, 0.5); }
        
        .card-cyber {
            background: rgba(15, 15, 15, 0.9);
            border: 1px solid #1a1a1a;
            border-radius: 16px;
            padding: 40px;
            box-shadow: inset 0 0 20px rgba(255,255,255,0.02);
        }

        .btn-cyber {
            display: inline-block;
            background: #00f3ff;
            color: #000;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 0 15px rgba(0, 243, 255, 0.4);
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        /* --- FOTO PROFIL BULAT NEON --- */
        .avatar-container {
            width: 160px;
            height: 160px;
            margin: 0 auto 25px;
            border-radius: 50%;
            border: 3px solid #00f3ff;
            box-shadow: 0 0 25px rgba(0, 243, 255, 0.7);
            overflow: hidden;
        }

        .avatar-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* --- TIMELINE EXPERIENCE --- */
        .timeline {
            position: relative;
            padding-left: 35px;
            border-left: 2px solid rgba(0, 243, 255, 0.2);
            margin-left: 20px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            text-align: left;
        }

        .timeline-dot {
            position: absolute;
            left: -42px;
            top: 5px;
            width: 12px;
            height: 12px;
            background: #00f3ff;
            border-radius: 50%;
            box-shadow: 0 0 15px #00f3ff;
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar-logo">[ DINDA ] _ ONLINE</div>
        <ul class="navbar-menu">
            <li><a onclick="pindahSlide('home')" id="nav-home" class="active-nav">01.HOME</a></li>
            <li><a onclick="pindahSlide('about')" id="nav-about">02.ABOUT</a></li>
            <li><a onclick="pindahSlide('skills')" id="nav-skills">03.SKILLS</a></li>
            <li><a onclick="pindahSlide('projects')" id="nav-projects">04.PROJECTS</a></li>
            <li><a onclick="pindahSlide('experience')" id="nav-experience">05.EXPERIENCE</a></li>
            <li><a onclick="pindahSlide('contact')" id="nav-contact">06.CONTACT</a></li>
        </ul>
    </header>

    <div class="slide-wrapper">

        <section id="home" class="active">
            <div class="container card-cyber" style="max-width: 800px; text-align: center;">
                <div class="avatar-container">
                    <img src="{{ asset('images/avatar.jpeg') }}" alt="Foto Profil Dinda">
                </div>
                <p style="color: #666; font-family: monospace; margin-bottom: 10px;">> Junior Full Stack Developer</p>
                <h1 style="font-size: 64px; font-weight: 700; margin-bottom: 20px; line-height: 1;">
                    <span class="accent-cyan">DINDA</span> 
                </h1>
                <p style="color: #aaa; font-size: 18px; margin-bottom: 30px;">
                    Mahasiswa Informatika yang fokus membangun aplikasi web modern, aman, dan scalable. Berpengalaman dalam mengembangkan sistem berbasis Laravel dan mengelola database.
                </p>
                <button onclick="pindahSlide('projects')" class="btn-cyber">LIHAT PROJECT</button>
            </div>
        </section>

        <section id="about">
            <div class="container card-cyber">
                <h2 style="font-size: 32px; margin-bottom: 20px;"><span class="accent-cyan">02 //</span> ABOUT</h2>
                <p style="color: #ccc; font-size: 18px; line-height: 1.6; text-align: left;">
                    Halo! Saya Dinda, mahasiswi Informatika yang suka menjelajahi dunia baris kode dan teknologi web. Bagi saya, coding bukan cuma soal menulis perintah, tapi tentang bagaimana menciptakan solusi digital yang bermanfaat dan nyaman digunakan. Saat ini saya fokus mengasah kemampuan dalam ekosistem PHP (Laravel), JavaScript, dan manajemen database. Saya selalu bersemangat untuk mempelajari teknologi baru, berkolaborasi dalam proyek seru, dan merajut karier sebagai seorang developer masa depan.
                </p>
            </div>
        </section>

        <section id="skills">
            <div class="container card-cyber">
                <h2 style="font-size: 32px; margin-bottom: 30px;"><span class="accent-cyan">03 //</span> SKILLS</h2>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: left;">
                    
                    <div style="background: rgba(20, 20, 20, 0.6); padding: 25px; border-radius: 12px; border: 1px solid #222; box-shadow: 0 4px 15px rgba(0,0,0,0.5);">
                        <h3 class="accent-cyan" style="margin-top: 0; font-size: 20px; border-bottom: 1px solid rgba(0,243,255,0.2); padding-bottom: 10px;">Web Development</h3>
                        <ul style="color: #ccc; font-size: 15px; padding-left: 20px; line-height: 1.8;">
                            <li>HTML5 & CSS3</li>
                            <li>Laravel Blade</li>
                            <li>Responsive Web Design</li>
                            <li>Python <span style="color: #666; font-size: 12px;">(Dasar)</span></li>
                        </ul>
                    </div>
    
                    <div style="background: rgba(20, 20, 20, 0.6); padding: 25px; border-radius: 12px; border: 1px solid #222; box-shadow: 0 4px 15px rgba(0,0,0,0.5);">
                        <h3 class="accent-cyan" style="margin-top: 0; font-size: 20px; border-bottom: 1px solid rgba(0,243,255,0.2); padding-bottom: 10px;">Backend & Database</h3>
                        <ul style="color: #ccc; font-size: 15px; padding-left: 20px; line-height: 1.8;">
                            <li>PHP</li>
                            <li>Laravel Framework</li>
                            <li>MySQL Database</li>
                            <li>Dasar REST API</li>
                        </ul>
                    </div>
    
                    <div style="background: rgba(20, 20, 20, 0.6); padding: 25px; border-radius: 12px; border: 1px solid #222; box-shadow: 0 4px 15px rgba(0,0,0,0.5);">
                        <h3 class="accent-cyan" style="margin-top: 0; font-size: 20px; border-bottom: 1px solid rgba(0,243,255,0.2); padding-bottom: 10px;">Tools & Professional</h3>
                        <ul style="color: #ccc; font-size: 15px; padding-left: 20px; line-height: 1.8;">
                            <li>Git & GitHub / VS Code</li>
                            <li>Team Collaboration</li>
                            <li>Public Communication</li>
                            <li>Fast Adaptation</li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container card-cyber">
                <h2 style="font-size: 32px; margin-bottom: 30px;"><span class="accent-cyan">04 //</span> PROJECTS</h2>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; text-align: left;">
                    
                    <div style="background: rgba(20, 20, 20, 0.6); padding: 30px; border-radius: 12px; border: 1px solid #222; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="position: absolute; top: 15px; right: 20px; color: #00f3ff; font-family: monospace; font-size: 12px;">WEB APP</span>
                            <h3 style="font-size: 22px; margin-top: 0; margin-bottom: 10px; color: #fff;">Sistem Informasi Kepegawaian (SIMPEG)</h3>
                            <p style="color: #aaa; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                                Membuat aplikasi manajemen berbasis web untuk pengelolaan administrasi dan data pegawai secara terstruktur. Dilengkapi fitur Dashboard Admin, Autentikasi Login, serta operasi CRUD data kepegawaian yang adaptif dan efisien.
                            </p>
                            
                            <a href="https://github.com/dindalida/LAVAREL/blob/main/README.md" target="_blank" style="display: inline-flex; align-items: center; color: #00f3ff; text-decoration: none; font-size: 13px; font-family: monospace; margin-bottom: 20px; border-bottom: 1px dashed #00f3ff; padding-bottom: 2px;">
                                🔗 Lihat Repositori GitHub
                            </a>
                        </div>
    
                        <div style="display: flex; gap: 8px;">
                            <span style="background: rgba(255, 0, 85, 0.1); color: #ff0055; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(255, 0, 85, 0.2);">Laravel</span>
                            <span style="background: rgba(0, 243, 255, 0.1); color: #00f3ff; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(0, 243, 255, 0.2);">PHP</span>
                            <span style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(255, 255, 255, 0.2);">MySQL</span>
                            <span style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(255, 255, 255, 0.2);">HTML & CSS</span>
                        </div>
                    </div>
    
                    <div style="background: rgba(20, 20, 20, 0.6); padding: 30px; border-radius: 12px; border: 1px solid #222; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="position: absolute; top: 15px; right: 20px; color: #00f3ff; font-family: monospace; font-size: 12px;">FRONTEND</span>
                            <h3 style="font-size: 22px; margin-top: 0; margin-bottom: 10px; color: #fff;">Interactive Cyberpunk Portfolio Website</h3>
                            <p style="color: #aaa; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                                Merancang dan mengembangkan website portofolio pribadi bertema masa depan (cyberpunk neon). Mengadopsi konsep Single Page Application (SPA) mandiri tanpa scroll, sistem perpindahan slide interaktif berbasis JavaScript, serta tata letak komponen yang sepenuhnya responsif.
                            </p>
                        </div>
                        
                        <div style="display: flex; gap: 8px;">
                            <span style="background: rgba(255, 0, 85, 0.1); color: #ff0055; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(255, 0, 85, 0.2);">HTML5 & CSS3</span>
                            <span style="background: rgba(0, 243, 255, 0.1); color: #00f3ff; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(0, 243, 255, 0.2);">JavaScript</span>
                            <span style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-family: monospace; border: 1px solid rgba(255, 255, 255, 0.2);">UI/UX</span>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container card-cyber" style="max-width: 750px;">
                <h2 style="font-size: 32px; margin-bottom: 30px;"><span class="accent-cyan">05 //</span> EXPERIENCE</h2>
                
                <div class="timeline">
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 2px;">Pembelajaran Teknologi Digital</h3>
                        <p style="color: #00f3ff; font-size: 14px; font-weight: 600; margin: 0 0 8px 0;">Dicoding Indonesia</p>
                        <ul style="color: #aaa; font-size: 14px; padding-left: 20px; line-height: 1.6; margin: 0;">
                            <li>Menyelesaikan pelatihan mandiri fokus pada Web Development, Git/GitHub, dan dasar teknologi AI.</li>
                            <li>Mempraktikkan hasil pembelajaran melalui pengembangan proyek website dan analisis data dasar menggunakan Python.</li>
                            <li>Mengembangkan skill problem-solving melalui pembuatan logika pemrograman dan pengelolaan database.</li>
                        </ul>
                    </div>
    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 2px;">Himpunan Mahasiswa Jurusan (HMJ)</h3>
                        <p style="color: #ff0055; font-size: 14px; font-weight: 600; margin: 0 0 8px 0;">Anggota Bidang Ekonomi Kreatif</p>
                        <ul style="color: #aaa; font-size: 14px; padding-left: 20px; line-height: 1.6; margin: 0;">
                            <li>Aktif mendukung program inovasi digital mahasiswa untuk mengembangkan potensi teknologi di lingkungan kampus.</li>
                            <li>Terlibat dalam perencanaan dan eksekusi program kerja kreatif serta kegiatan strategis organisasi.</li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container card-cyber" style="max-width: 550px; text-align: center;">
                <h2 style="font-size: 32px; margin-bottom: 20px;"><span class="accent-cyan">06 //</span> CONTACT</h2>
                
                <p style="color: #ccc; font-size: 16px; line-height: 1.6; margin-bottom: 25px;">
                    Saya selalu terbuka untuk peluang magang, kolaborasi proyek, atau sekadar berdiskusi tentang dunia teknologi. Mari terhubung!
                </p>
    
                <div style="background: rgba(20, 20, 20, 0.6); padding: 15px; border-radius: 8px; border: 1px solid #222; margin-bottom: 25px;">
                    <p style="color: #666; font-family: monospace; margin: 0 0 5px 0;">> EMAIL RESMI</p>
                    <a href="mailto:maulidadindaa228@gmail.com" style="color: #00f3ff; font-size: 18px; font-weight: 600; text-decoration: none; text-shadow: 0 0 8px rgba(0, 243, 255, 0.3);">
                        maulidadindaa228@gmail.com
                    </a>
                </div>
    
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="https://github.com/dindalida" target="_blank" class="btn-cyber" style="font-size: 14px; padding: 10px 20px; background: transparent; color: #ff0055; border: 1px solid #ff0055; box-shadow: 0 0 10px rgba(255, 0, 85, 0.2); text-decoration: none;">
                        📁 GITHUB
                    </a>
                    <a href="https://linkedin.com/in/dinda" target="_blank" class="btn-cyber" style="font-size: 14px; padding: 10px 20px; text-decoration: none;">
                        💼 LINKEDIN
                    </a>
                </div>
            </div>
    </div>

    <script>
        function pindahSlide(targetId) {
            // 1. Pindahkan slide halaman
            const semuaSection = document.querySelectorAll('.slide-wrapper section');
            semuaSection.forEach(section => {
                section.classList.remove('active');
            });

            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // 2. Ubah warna menu navbar atas yang sedang aktif
            const semuaNav = document.querySelectorAll('.navbar-menu a');
            semuaNav.forEach(nav => {
                nav.classList.remove('active-nav');
            });
            
            const activeNav = document.getElementById('nav-' + targetId);
            if (activeNav) {
                activeNav.classList.add('active-nav');
            }
        }
    </script>
</body>
</html>