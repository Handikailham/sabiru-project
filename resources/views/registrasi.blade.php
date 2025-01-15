<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('image/sabiru.png') }}" alt="Logo" class="h-20 w-20">
        </div>
        <h2 class="text-2xl font-bold text-center mb-4">Registrasi</h2>
        <p class="text-sm text-gray-600 text-center mb-6">Silahkan isi Form untuk registrasi</p>
        <form action="{{ route('registrasi.submit') }}" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Registrasi</button>
            <p class="text-sm text-gray-600 text-center mt-4">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </p>
        </form>
    </div>
</body>
</html>