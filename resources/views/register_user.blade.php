@extends('layouts.registeruser')

@section('title', 'registeruser')

@section('content')

<body class="bg-gray-200">
    <div class="mx-auto w-full h-full bg-white flex justify-content align-items">
        <div class="w-1/4">
            <img src="{{ asset('images/Picture3.jpg') }}" alt="" class="">
        </div>
        <div class="w-1/2">

            <div class="p-8 max-w-md mx-auto bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-center">Lengkapi Biodata Diri</h2>
                <form class="mt-6">
                    <div class="mb-4">
                        <label for="fullname" class="block text-gray-70text-sm font-bold mb-2">Nama Lengkap</label>
                        <input type="text" id="fullname" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-70 text-sm font-bold mb-2">No Hp (opsional)</label>
                        <input type="tel" id="phone" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan nomor handphone">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-70 text-sm font-bold mb-2">Email Address</label>
                        <input type="email" id="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan email address">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-70 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan password">
                    </div>
                    <div class="mb-4">
                        <label for="confirm-password" class="block text-gray-70 text-sm font-bold mb-2">Konfirmasi Password</label>
                        <input type="password" id="confirm-password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Konfirmasi password">
                    </div>
                    <button class="w-full py-2 px-4 bg-blue-700 text-white rounded-md hover:bg-blue-800">Register</button>
                </form>
            </div>


            @endsection