<?php
// index.php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socialmediaspeciallist - MyEmail</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap Icons -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Penyedia Email GSUITE ,aman dan terpercaya menawarkan penerimaan kode otp,email sekali pakai dan masih banyak lagi">
    <meta name="keywords" content="emailmurah,email gsuite,emailsekalipake,emailtrial,socialmediaspeciallist,email gratis,email verif,email terima otp,email code">
    <meta name="author" content="Socialmediaspeciallist - MyEmail">

    <!-- Open Graph for Social Media Sharing -->
    <meta property="og:title" content="Socialmediaspeciallist - MyEmail">
    <meta property="og:description" content="Penyedia Email GSUITE ,aman dan terpercaya menawarkan penerimaan kode otp,email sekali pakai dan masih banyak lagi">
    <meta property="og:image" content="assets/img/ogimage.jpg">
    <meta property="og:url" content="https://www.website-anda.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card for Social Media Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Socialmediaspeciallist - MyEmail">
    <meta name="twitter:description" content="Penyedia Email GSUITE ,aman dan terpercaya menawarkan penerimaan kode otp,email sekali pakai dan masih banyak lagi">
    <meta name="twitter:image" content="ogimage.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Standard Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" sizes="16x16" type="image/x-icon">

    <!-- Apple Touch Icon (for iPhone, iPad) -->
    <link rel="apple-touch-assets/img/icon" href="favicon.ico" sizes="180x180">

    <!-- Android Chrome Icon -->
    <link rel="icon" href="assets/img/favicon.ico" sizes="192x192">

    <!-- Icon for High-Resolution Devices (e.g., Retina Display) -->
    <link rel="icon" href="assets/img/favicon.ico" sizes="512x512">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="text-2xl font-bold text-blue-600">MyWorkspace</a>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="#pricing" class="text-gray-700 hover:text-blue-600">Paket & Harga</a>
                <a href="#testimonials" class="text-gray-700 hover:text-blue-600">Testimoni</a>
                <a href="#faq" class="text-gray-700 hover:text-blue-600">FAQ</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Hubungi Kami</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
                <i id="hamburger-icon" class="bi bi-list text-2xl"></i>
            </button>

            <!-- Mobile Menu (Off-Canvas) -->
            <div id="mobile-menu" class="fixed inset-y-0 left-0 bg-white w-3/4 max-w-sm transform -translate-x-full transition-transform duration-300 shadow-lg z-50">
                <ul class="flex flex-col space-y-6 p-6">
                    <li><a href="#home" class="text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="#about" class="text-gray-700 hover:text-blue-600">About</a></li>
                    <li><a href="#pricing" class="text-gray-700 hover:text-blue-600">Paket & Harga</a></li>
                    <li><a href="#testimonials" class="text-gray-700 hover:text-blue-600">Testimoni</a></li>
                    <li><a href="#faq" class="text-gray-700 hover:text-blue-600">FAQ</a></li>
                    <li><a href="#contact" class="text-gray-700 hover:text-blue-600">Hubungi Kami</a></li>
                </ul>

                <!-- Social Media & Email Section -->
                <div class="mt-auto px-6 pb-6">
                    <p class="text-gray-600 text-sm mb-4">Ikuti kami di:</p>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com/emailgsuite" target="_blank" class="text-blue-600 hover:text-blue-800">
                            <i class="bi bi-facebook text-2xl"></i>
                        </a>
                        <a href="https://twitter.com/emailgsuite" target="_blank" class="text-blue-400 hover:text-blue-600">
                            <i class="bi bi-twitter text-2xl"></i>
                        </a>
                        <a href="https://instagram.com/emailgsuite" target="_blank" class="text-pink-500 hover:text-pink-700">
                            <i class="bi bi-instagram text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com/emailgsuite" target="_blank" class="text-blue-700 hover:text-blue-900">
                            <i class="bi bi-linkedin text-2xl"></i>
                        </a>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Hubungi kami: <a href="mailto:muhammadrooby@gmail.com" class="text-blue-600 hover:underline">muhammadrooby@gmail.com</a></p>
                </div>
            </div>

            <!-- Overlay -->
            <div id="menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>
    </header>

            <!-- Style -->
            <style>
                html {
                    scroll-behavior: smooth;
                }

                #mobile-menu {
                    height: 100%;
                }

                #menu-overlay {
                    display: none;
                }

                #mobile-menu ul {
                    flex-grow: 1;
                }

                #mobile-menu .mt-auto {
                    margin-top: auto;
                }
            </style>

            <script>
                    const mobileMenuButton = document.getElementById('mobile-menu-button');
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuOverlay = document.getElementById('menu-overlay');
                    const hamburgerIcon = document.getElementById('hamburger-icon');

                    // Toggle Menu
                    const toggleMenu = () => {
                        const isOpen = !mobileMenu.classList.contains('-translate-x-full');
                        if (isOpen) {
                            closeMenu();
                        } else {
                            openMenu();
                        }
                    };

                    // Open Menu
                    const openMenu = () => {
                        mobileMenu.classList.remove('-translate-x-full');
                        menuOverlay.classList.remove('hidden');
                        hamburgerIcon.className = 'bi bi-x text-2xl'; // Ubah ikon ke "X"
                    };

                    // Close Menu
                    const closeMenu = () => {
                        mobileMenu.classList.add('-translate-x-full');
                        menuOverlay.classList.add('hidden');
                        hamburgerIcon.className = 'bi bi-list text-2xl'; // Kembalikan ikon ke hamburger
                    };

                    // Event Listeners
                    mobileMenuButton.addEventListener('click', toggleMenu);
                    menuOverlay.addEventListener('click', closeMenu);
                    const menuLinks = mobileMenu.querySelectorAll('a');
                    menuLinks.forEach(link => {
                        link.addEventListener('click', closeMenu);
                    });
                </script>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-20 mt-16">
        <div class="container mx-auto px-4 flex flex-col-reverse md:flex-row items-center">
            <!-- Text Content -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                    Email Bisnis Profesional untuk <br> <span class="text-yellow-300">Kemajuan Bisnis Anda</span>
                </h1>
                <p class="mt-4 text-lg md:text-xl text-gray-100">
                    Dapatkan email bisnis, penyimpanan cloud, dan alat kolaborasi terbaik dari Google Workspace.
                </p>
                <div class="mt-6 flex justify-center md:justify-start space-x-4">
                    <a href="#pricing" class="bg-yellow-300 text-blue-800 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-yellow-400">Cek Paket</a>
                    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-200">Hubungi Kami</a>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center" 
                 data-aos="fade-up" 
                 data-aos-delay="300" 
                 data-aos-duration="1500" 
                 data-aos-easing="ease-out-cubic">
                <img src="assets/img/hero.svg" alt="Google Workspace Illustration" class="w-full max-w-md">
            </div>
    </section>

            <!-- About Section -->
            <section id="about" class="bg-gray-50 py-20 mt-20 md:mt-24">
                <div class="container mx-auto px-4 flex flex-col md:flex-row items-center space-y-12 md:space-y-0">
                    <!-- Image -->
                    <div class="w-full md:w-1/2" data-aos="zoom-in" data-aos-delay="400">
                        <img src="assets/img/about.svg" alt="About Us Image" class="rounded-lg">
                    </div>

                    <!-- Content -->
                    <div class="w-full md:w-1/2 md:pl-12 text-center md:text-left" data-aos="zoom-in">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tentang Kami</h2>
                        <p class="mt-4 text-lg text-gray-600">
                            Kami adalah penyedia layanan email terbaik yang bertujuan untuk membantu segala kebutuhan Anda mencapai tingkat profesionalitas yang lebih tinggi dengan email yang andal dan aman.
                        </p>
                        <p class="mt-4 text-lg text-gray-600">
                            Dengan pengalaman bertahun-tahun, kami memahami kebutuhan Anda dan memberikan layanan terbaik untuk memastikan kepuasan Anda.
                        </p>
                        <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-blue-700 transition">Hubungi Kami</a>
                    </div>
                </div>
            </section>

    
    <!-- Pricing Section -->
    <section id="pricing" class="bg-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Paket & Harga</h2>
            <p class="mt-4 text-lg text-gray-600">Pilih paket yang sesuai untuk kebutuhan bisnis Anda.</p>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-gradient-to-r from-blue-100 to-blue-200 shadow-lg rounded-lg p-8 relative transition transform hover:scale-105 hover:border-4 hover:border-blue-500" data-aos="fade-right" data-aos-delay="400">
                    <h3 class="text-xl font-bold text-blue-800">Basic</h3>
                    <p class="mt-4 text-gray-700">Untuk kebutuhan dasar bisnis.</p>
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg text-sm">Best Value</div>
                    <p class="mt-6 text-4xl font-bold text-gray-900">Rp 15.000<span class="text-lg">/minggu</span></p>
                    <ul class="mt-6 space-y-3 text-gray-700">
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Kapasitas 400GB</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> 55 Email Active</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Active 3 Days (+)</li>
                    </ul>
                    <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transform hover:scale-105 transition">Pilih Paket</a>
                </div>

                <!-- Standard Plan -->
                <div class="bg-gradient-to-r from-yellow-100 to-yellow-200 shadow-lg rounded-lg p-8 relative transition transform hover:scale-105 hover:border-4 hover:border-yellow-500" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-yellow-800">Standard</h3>
                    <p class="mt-4 text-gray-700">Pilihan terbaik untuk tim kecil.</p>
                    <p class="mt-6 text-4xl font-bold text-gray-900">Rp 30.000<span class="text-lg">/minggu</span></p>
                    <ul class="mt-6 space-y-3 text-gray-700">
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Kapasitas 2TB</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> 55 Email Active</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Email Bisnis</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Google Meet + Recording</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Request Password</li>
                         <li><i class="bi bi-check-circle-fill text-green-500"></i> Active 7 Days (+)</li>
                    </ul>
                    <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" class="mt-6 inline-block bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transform hover:scale-105 transition">Pilih Paket</a>
                </div>

                <!-- Premium Plan -->
                <div class="bg-gradient-to-r from-pink-100 to-pink-200 shadow-lg rounded-lg p-8 relative transition transform hover:scale-105 hover:border-4 hover:border-pink-500" data-aos="fade-left" data-aos-delay="800">
                    <h3 class="text-xl font-bold text-pink-800">Premium</h3>
                    <p class="mt-4 text-gray-700">Untuk kebutuhan bisnis besar.</p>
                    <div class="absolute top-0 left-0 bg-pink-600 text-white px-4 py-1 rounded-br-lg text-sm">Recommended</div>
                    <p class="mt-6 text-4xl font-bold text-gray-900">Rp 50.000<span class="text-lg">/bulan</span></p>
                    <ul class="mt-6 space-y-3 text-gray-700">
                     <li><i class="bi bi-check-circle-fill text-green-500"></i> 70 Email Active</li
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Penyimpanan Tanpa Batas</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Email Bisnis</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Google Meet + Advanced Features</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Request Password</li>
                        <li><i class="bi bi-check-circle-fill text-green-500"></i> Free Aktivasi Email</li>
                         <li><i class="bi bi-check-circle-fill text-green-500"></i> Free Email (+20)</li>
                    </ul>
                    <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" class="mt-6 inline-block bg-pink-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transform hover:scale-105 transition">Pilih Paket</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-blue-400 to-blue-600 py-20 text-white text-center mt-16">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-6">Mengapa Harus Memilih Kami?</h2>
            <p class="text-lg mb-6">
                Kami menyediakan layanan Google Workspace dengan kualitas terbaik untuk memenuhi kebutuhan Anda secara optimal. Berikut alasan mengapa Anda harus memilih kami:
            </p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kualitas Layanan -->
                <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in-down" data-aos-delay="400">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-trophy text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Kualitas Layanan</h3>
                    <p class="text-gray-700">Kami menyediakan berbagai layanan terbaik dan berkualitas untuk menaikkan peringkat Google Workspace Anda, memastikan produktivitas yang lebih tinggi untuk tim Anda.</p>
                </div>
                <!-- Pelayanan Bantuan -->
                <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in-down">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-headset text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Pelayanan Bantuan</h3>
                    <p class="text-gray-700">Kami siap membantu Anda 24 jam setiap hari, memberikan solusi cepat untuk setiap masalah atau pertanyaan terkait layanan kami.</p>
                </div>
                <!-- Metode Pembayaran -->
                <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in-down" data-aos-delay="800">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-credit-card text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Metode Pembayaran</h3>
                    <p class="text-gray-700">Kami menyediakan berbagai metode pembayaran yang lengkap, mudah, dan proses yang cepat, sehingga Anda dapat segera menikmati layanan kami tanpa hambatan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonials" class="bg-white py-20 mt-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <!-- Teks di Sisi Kanan -->
                <div class="w-full md:w-1/2 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white p-8 rounded-lg shadow-lg" data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold">Testimoni</h2>
                    <p class="mt-4 text-lg text-opacity-80">Berikut testimoni dari kami:</p>
                    <p class="mt-4 text-lg text-opacity-80">Apa kata pelanggan tentang Pelayanan Kami</p>

                    <!-- Rating Bintang -->
                    <div class="mt-8 flex items-center space-x-1">
                        <input type="radio" id="star5" name="rating" value="5" class="hidden peer" />
                        <label for="star5" class="text-2xl cursor-pointer peer-checked:text-yellow-400">&#9733;</label>

                        <input type="radio" id="star4" name="rating" value="4" class="hidden peer" />
                        <label for="star4" class="text-2xl cursor-pointer peer-checked:text-yellow-400">&#9733;</label>

                        <input type="radio" id="star3" name="rating" value="3" class="hidden peer" />
                        <label for="star3" class="text-2xl cursor-pointer peer-checked:text-yellow-400">&#9733;</label>

                        <input type="radio" id="star2" name="rating" value="2" class="hidden peer" />
                        <label for="star2" class="text-2xl cursor-pointer peer-checked:text-yellow-400">&#9733;</label>

                        <input type="radio" id="star1" name="rating" value="1" class="hidden peer" />
                        <label for="star1" class="text-2xl cursor-pointer peer-checked:text-yellow-400">&#9733;</label>
                    </div>
                </div>


                <!-- Kartu Testimoni di Sisi Kiri -->
                <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimoni 1 -->
                    <div class="bg-gray-100 shadow-lg rounded-lg p-6 border-2 border-blue-500"  data-aos="zoom-in-up" data-aos-delay="800">
                        <div class="flex items-center mb-4">
                            <img src="assets/img/userate.jpg" alt="User Photo" class="w-12 h-12 rounded-full">
                            <div class="ml-4 text-left">
                                <h3 class="text-sm font-bold text-gray-800">NabzzVP Market</h3>
                                <p class="text-xs text-gray-600">Web Developer</p>
                            </div>
                        </div>
                        <p class="text-gray-700">"Layanan ini sangat membantu bisnis saya berkembang. Email G-Suite sangat mudah digunakan dan sangat profesional."</p>
                    </div>

                    <!-- Testimoni 2 -->
                    <div class="bg-gray-100 shadow-lg rounded-lg p-6 border-2 border-blue-500" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <img src="assets/img/userate.jpg" alt="User Photo" class="w-12 h-12 rounded-full">
                            <div class="ml-4 text-left">
                                <h3 class="text-sm font-bold text-gray-800">RafaStore</h3>
                                <p class="text-xs text-gray-600">Manager, Small Business</p>
                            </div>
                        </div>
                        <p class="text-gray-700">"Pelayanan yang luar biasa dan sangat ramah. Saya merekomendasikan untuk semua orang yang membutuhkan email bisnis."</p>
                    </div>

                    <!-- Testimoni 3 -->
                    <div class="bg-gray-100 shadow-lg rounded-lg p-6 border-2 border-blue-500"  data-aos="zoom-in-up" data-aos-delay="500">
                        <div class="flex items-center mb-4">
                            <img src="assets/img/userate.jpg" alt="User Photo" class="w-12 h-12 rounded-full">
                            <div class="ml-4 text-left">
                                <h3 class="text-sm font-bold text-gray-800">Sarah Johnson</h3>
                                <p class="text-xs text-gray-600">Manager</p>
                            </div>
                        </div>
                        <p class="text-gray-700">"Saya sangat puas dengan layanan ini. Harga yang ditawarkan juga sangat kompetitif."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="bg-white py-20 mt-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center">Pertanyaan yang Sering Ditanyakan</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Jawaban atas pertanyaan yang sering diajukan oleh pelanggan kami.</p>

            <div class="mt-10 max-w-3xl mx-auto space-y-4">
                <!-- Question 1 -->
                <div class="bg-gray-100 rounded-lg shadow-md">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none" 
                            onclick="toggleFaq('faq1')">
                        Apa itu Google Workspace?
                        <i class="bi bi-chevron-down transition-transform" id="icon-faq1"></i>
                    </button>
                    <div id="faq1" class="hidden px-6 py-4 text-gray-600">
                        Google Workspace (sebelumnya G Suite) adalah paket alat produktivitas berbasis cloud yang mencakup Gmail, Google Drive, Google Meet, dan lainnya untuk kebutuhan bisnis.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none" 
                            onclick="toggleFaq('faq2')">
                        Bagaimana cara pembayarannya?
                        <i class="bi bi-chevron-down transition-transform" id="icon-faq2"></i>
                    </button>
                    <div id="faq2" class="hidden px-6 py-4 text-gray-600">
                        Pembayaran dapat dilakukan melalui transfer bank, kartu kredit, atau metode pembayaran digital yang tersedia.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none" 
                            onclick="toggleFaq('faq3')">
                        Berapa lama proses aktivasi?
                        <i class="bi bi-chevron-down transition-transform" id="icon-faq3"></i>
                    </button>
                    <div id="faq3" class="hidden px-6 py-4 text-gray-600">
                        Proses aktivasi biasanya memakan waktu kurang dari 24 jam setelah pembayaran dikonfirmasi.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="bg-gray-100 rounded-lg shadow-md">
                    <button class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none" 
                            onclick="toggleFaq('faq4')">
                        Apakah saya bisa upgrade paket nanti?
                        <i class="bi bi-chevron-down transition-transform" id="icon-faq4"></i>
                    </button>
                    <div id="faq4" class="hidden px-6 py-4 text-gray-600">
                        Ya, Anda dapat meng-upgrade paket kapan saja sesuai kebutuhan bisnis Anda.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Toggle Script -->
    <script>
        function toggleFaq(id) {
            const faqContent = document.getElementById(id);
            const icon = document.getElementById(`icon-${id}`);

            if (faqContent.classList.contains('hidden')) {
                faqContent.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                faqContent.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-50 py-20 mt-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800">Hubungi Kami</h2>
                <p class="mt-4 text-lg text-gray-600">Tim kami selalu siap membantu Anda. Jangan ragu untuk menghubungi kami kapan saja!</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Contact Form -->
                <form action="https://formspree.io/f/meoqazvj" method="POST" class="bg-white shadow-lg rounded-lg p-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                            <input type="text" id="name" name="name" placeholder="Nama Anda" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email Anda" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                        Kirim Pesan
                    </button>
                </form>


                <!-- Contact Details -->
                <div class="bg-white shadow-lg rounded-lg p-10 flex flex-col justify-center space-y-8 mt-16">
                    <!-- Logo -->
                    <div class="mb-6">
                        <img src="hero.svg" alt="Logo MyWorkspace" class="w-24 h-24 object-contain">
                    </div>
                    <div class="flex items-start">
                        <div class="mr-4">
                            <i class="bi bi-geo-alt-fill text-blue-600 text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Alamat</h3>
                            <p class="mt-2 text-gray-600">Wates, Watukosek, Gempol, Pasuruan Regency, East Java 61385</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="mr-4">
                            <i class="bi bi-envelope-fill text-blue-600 text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Email</h3>
                            <p class="mt-2 text-gray-600">muhammadrooby@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="mr-4">
                            <i class="bi bi-telephone-fill text-blue-600 text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Telepon</h3>
                            <p class="mt-2 text-gray-600">+62 851-8312-5833</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="mr-4">
                            <i class="bi bi-clock-fill text-blue-600 text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Jam Operasional</h3>
                            <p class="mt-2 text-gray-600">Senin - Jumat: 08.00 - 17.00</p>
                        </div>
                    </div>
                </div>
    </section>

                <!-- CTA Akhir Section -->
                <section id="cta" class="bg-gray-900 py-16 text-white text-center mt-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Meningkatkan Bisnis Anda?</h2>
                    <p class="text-lg md:text-xl mb-8 text-opacity-80">Bergabunglah dengan kami dan tingkatkan efisiensi bisnis Anda dengan solusi terbaik kami.</p>

                    <div class="flex justify-center space-x-6 mb-8">
                        <!-- Tombol Beli Sekarang -->
                        <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" class="bg-yellow-500 text-white py-3 px-10 rounded-full font-semibold text-lg hover:bg-yellow-600 transition duration-300 transform hover:scale-105 shadow-md">
                            Beli Sekarang
                        </a>
                        <!-- Tombol Hubungi Kami -->
                        <a href="mailto:muhammadrooby@gmail.com" class="bg-green-500 text-white py-3 px-10 rounded-full font-semibold text-lg hover:bg-green-600 transition duration-300 transform hover:scale-105 shadow-md">
                            Hubungi Kami untuk Konsultasi
                        </a>
                    </div>

                    <p class="text-xl mb-4">Atau hubungi kami langsung melalui:</p>
                    <div class="flex justify-center space-x-8">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/6285183125833?text=Halo%20permisi%20min%2Csaya%20ingin%20berlangganan%20email" target="_blank" class="text-white hover:text-yellow-400 text-3xl transition duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <!-- Email -->
                        <a href="mailto:contact@yourdomain.com" class="text-white hover:text-yellow-400 text-3xl transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <!-- Telepon -->
                        <a href="tel+6285183125833" class="text-white hover:text-yellow-400 text-3xl transition duration-300">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </section>

                <!-- Footer Section -->
                <footer class="bg-gray-900 text-white py-10">
                    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Navigasi Cepat -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Informasi</h3>
                            <ul class="space-y-2">
                                <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                                <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300">Layanan</a></li>
                                <li><a href="#pricing" class="text-gray-400 hover:text-white transition duration-300">Paket & Harga</a></li>
                                <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                                <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">Tentang Kami</a></li>
                            </ul>
                        </div>

                        <!-- Kontak -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Kontak</h3>
                            <p class="text-gray-400">Telp: <a href="tel:+6285183125833" class="hover:text-white">+62 851-8312-5833</a></p>
                            <p class="text-gray-400">Email: <a href="mailto:contact@yourdomain.com" class="hover:text-white">muhammadrooby@gmail.com</a></p>
                            <p class="text-gray-400">Alamat: Wates, Watukosek, Gempol, Pasuruan Regency, East Java 61385, Indonesia</p>
                        </div>

                        <!-- Media Sosial -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Ikuti Kami</h3>
                            <div class="flex space-x-6">
                                <a href="https://shopee.co.id/socialmediaspeciallist" target="_blank">
                                    <img src="assets/img/shopee.png" alt="Shopee" class="w-8 h-8 transition duration-300 hover:scale-110">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Kebijakan dan Syarat -->
                    <div class="mt-8 border-t border-gray-700 pt-6 text-center">
                        <p class="text-gray-400 text-sm">
                            &copy; 2025 Socialmediaspeciallist. Semua hak cipta dilindungi. 
                        </p>
                    </div>
                </footer>

    <!-- Script for Mobile Menu Toggle -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
                <script>
                  AOS.init();
                </script>
</body>
</html>