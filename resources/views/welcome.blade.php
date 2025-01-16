<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samudra Biru Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fade-in 2s ease-in-out;
        }

        html {
        scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3"> <!-- Flex container with space between logo and text -->
                <img src="{{ asset('image/sabiruicon.png') }}" alt="Logo" class="h-10"> <!-- Logo -->
                <span class="text-2xl  font-bold text-blue-600">SARUDEV</span> <!-- Teks sebelah kanan logo -->
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600">Home</a>
                <a href="#product" class="text-gray-600 hover:text-blue-600">Product</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
            </nav>
            <a href="{{ route('login') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">
               Login
            </a>
        </div>
    </header>
    
    


    <!-- Hero Section -->
    <section id="home" class="bg-cover bg-center relative" style="background-image: url('{{ asset('image/bg.jpg') }}'); height: 100vh;">
        <div class="bg-black bg-opacity-70 h-full flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-bold mb-4 animate-fade-in">Hi, Selamat Datang di Sarudev!</h1>
                <p class="text-lg mb-8">Samudra Biru adalah startup baru yang fokus pada Game Edukasi, Website dan Mobile.</p>
                <a href="#product" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg">
                    Explore Now
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    

    <!-- Product Section -->
    <section id="product" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800">Produk Kami</h2>
                <p class="mt-4 text-gray-600 max-w-3xl mx-auto">Kami menyediakan berbagai layanan dan produk unggulan untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="mt-12 grid grid-cols-3 gap-8">
                @foreach ($data as $item)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <!-- Gambar -->
                        <img src="{{ url('storage/img/' . $item->foto) }}" 
                            alt="{{ $item->nama }}" 
                            class="w-full h-60 object-cover rounded-lg mb-4">

                            {{-- <img src="{{ url('storage/img/' . $item->foto) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]"> --}}
            
                        <!-- Nama -->
                        <h3 class="text-2xl font-bold text-blue-600 text-start">{{ $item->nama }}</h3>
            
                        <!-- Deskripsi -->
                        <p class="mt-4 text-gray-600 text-start">{{ $item->deskripsi }}</p>
            
                        <!-- Tujuan -->
                        <p class="mt-2 text-gray-500 text-start"><strong>Tujuan:</strong> {{ $item->tujuan }}</p>
            
                        <!-- Status -->
                        <p class="mt-2 text-gray-500 text-start">
                            <strong>Status:</strong>
                            @if ($item->status === 'belum terlaksana')
                                <span class="text-yellow-500 font-bold">Belum Terlaksana</span>
                            @elseif ($item->status === 'sedang berjalan')
                                <span class="text-blue-500 font-bold">Sedang Berjalan</span>
                            @elseif ($item->status === 'selesai')
                                <span class="text-green-500 font-bold">Selesai</span>
                            @else
                                <span class="text-gray-500 font-bold">Status Tidak Diketahui</span>
                            @endif
                        </p>
            
                        <!-- Harga -->
                        <p class="mt-4 text-gray-800 font-bold text-start">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                @endforeach
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
            <a href="https://wa.me/6282242698548" 
            class="bg-white text-blue-700 hover:bg-gray-100 font-bold py-4 px-10 rounded-full shadow-lg 
            transition-all transform hover:-translate-y-2 hover:scale-105"
            target="_blank">
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