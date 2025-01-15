<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samudra Biru Development</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
<header class="bg-white shadow-md fixed w-full z-10">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-blue-600">SARUDEV</a>
        <nav class="hidden md:flex space-x-8">
            <a href="#home" class="text-gray-600 hover:text-blue-600">Home</a>
            <a href="#about" class="text-gray-600 hover:text-blue-600">About</a>
            <a href="#product" class="text-gray-600 hover:text-blue-600">Product</a>
            <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
        </nav>
        <a href="{{ route('project.tampil') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">
           Kelola Barang
        </a>
    </div>
</header>


    <!-- Hero Section -->
    <section id="home" class="bg-cover bg-center relative" style="background-image: url('https://source.unsplash.com/1920x1080/?corporate,technology'); height: 100vh;">
        <div class="bg-black bg-opacity-60 h-full flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-bold mb-4">Hi, Selamat Datang di Sarudev!</h1>
                <p class="text-lg mb-8">Samudra Biru adalah startup baru yang fokus pada Game Edukasi, Website dan Mobile.</p>
                <a href="#about" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg">
                    Explore Now
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Tentang Kami</h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Samudra Biru merupakan perusahaan yang bergerak di bidang jasa Teknologi Informasi yang berpusat di Indonesia. Kami berkomitmen untuk mengembangkan produk berkualitas sesuai kebutuhan mitra kami.
            </p>
        </div>
    </section>

    <!-- Product Section -->
    <section id="product" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800">Produk Kami</h2>
                <p class="mt-4 text-gray-600 max-w-3xl mx-auto">Kami menyediakan berbagai layanan dan produk unggulan untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-blue-600">Produk Website</h3>
                    <p class="mt-4 text-gray-600">Kami dapat menciptakan situs web Anda dengan ide Anda, untuk meningkatkan proses bisnis Anda dan memperkaya interaksi pelanggan.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-blue-600">Produk Mobile</h3>
                    <p class="mt-4 text-gray-600">Kami dapat mewujudkan ide Anda menjadi objek digital dan memvisualisasikannya ke aplikasi seluler Anda.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-blue-600">Produk Games</h3>
                    <p class="mt-4 text-gray-600">Kami dapat mengembangkan game 2D, Augmented Reality, Virtual Reality, dan game Interaktif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 text-white">
    <div class="container mx-auto px-8 text-center">
        <h2 class="text-5xl font-extrabold mb-6">Hubungi Kami!</h2>
        <p class="mb-10 max-w-3xl mx-auto text-lg leading-relaxed">
            Kami di sini untuk membantu! Baik Anda sedang memikirkan proyek, ingin berkolaborasi, atau hanya ingin menyapa, jangan ragu untuk menghubungi kami.
        </p>
        <div class="mt-8">
            <a href="{{ route('project.tampil') }}" 
               class="bg-white text-blue-700 hover:bg-gray-100 font-bold py-4 px-10 rounded-full shadow-lg 
                      transition-all transform hover:-translate-y-2 hover:scale-105">
               Get In Touch
            </a>
        </div>
        <div class="mt-12 flex justify-center space-x-8">
            <a href="https://www.facebook.com/Samudrabiru-Developer-705906999770064/" target="_blank" class="text-3xl hover:text-gray-200 transition-colors">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com/SamudraBiruDev_" target="_blank" class="text-3xl hover:text-gray-200 transition-colors">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/samudrabirudev/" target="_blank" class="text-3xl hover:text-gray-200 transition-colors">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/sabirudev" target="_blank" class="text-3xl hover:text-gray-200 transition-colors">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-8">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between items-center">
            <p class="text-sm">&copy; 2025 Perusahaan. All rights reserved.</p>
            <nav>
                <ul class="flex space-x-6 text-sm">
                    <li><a href="#home" class="hover:text-white">Home</a></li>
                    <li><a href="#about" class="hover:text-white">About</a></li>
                    <li><a href="#product" class="hover:text-white">Product</a></li>
                    <li><a href="#contact" class="hover:text-white">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="mt-6 text-center">
            <p class="text-xs">
                Designed by <a href="https://sabirudev.com" class="text-blue-500 hover:underline">Sabiru Dev</a>
            </p>
        </div>
    </div>
</footer>

</body>
</html>