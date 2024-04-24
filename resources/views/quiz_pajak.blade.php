@extends('layouts.quiz')

@section('title', 'quiz')

@section('content')
<div style="position: relative; text-align: center; ">
    <img src="{{ asset('/img/bgquiz.jpg') }}" class="w-full" alt="...">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; color: white; font-weight: bold;">
        Kuis
    </div>
    <div style="position: absolute; top: 64%; left: 50%; transform: translate(-50%, -50%); font-size: 25px; font-style: Inter; color: white; font-weight: lighter;">
        Beranda // Kuis PPh
    </div>
</div>

<br>
<div style="position: relative; text-align: center;">
    <div style="width: 464px; height: 61px; margin: 20px auto 0; font-style: normal; font-weight: 700; font-size: 50px; line-height: 61px; text-align: center; color: #276392;">
        Kuis Yang Tersedia
    </div>
    <div class="flex justify-center">
        <!-- Card Sebelah kiri -->
        <div class="max-w-sm mx-auto mt-10 p-6 mr-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 flex items-center justify-start flex-col" style="margin-right: 60px; flex: 1;">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="url(#icon-gradient)" viewBox="0 0 20 20">
                    <defs>
                        <linearGradient id="icon-gradient" x1="0" y1="0" x2="0" y2="100%">
                            <stop offset="0%" stop-color="#289C5E"></stop>
                            <stop offset="100%" stop-color="#4FA2ED"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                    <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                </svg>
                <p class="ml-2 mb- text-gray-700 dark:text-gray-400" style="text-align: left;">Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</p>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white text-center rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-auto" style="background: linear-gradient(180deg, #4FA2ED 0%, #289C5E 100%);">Lihat
                <svg class="w-4 h-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <!-- Card di sebelah kanan -->
        <div class="max-w-sm mx-auto mt-10 p-6 ml-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 flex items-center justify-start flex-col" style="margin-left: 60px; flex: 1;">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="url(#icon-gradient)" viewBox="0 0 20 20">
                    <defs>
                        <linearGradient id="icon-gradient" x1="0" y1="0" x2="0" y2="100%">
                            <stop offset="0%" stop-color="#289C5E"></stop>
                            <stop offset="100%" stop-color="#4FA2ED"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                    <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                </svg>
                <p class="ml-2 mb- text-gray-700 dark:text-gray-400" style="text-align: left;">Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</p>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white text-center rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-auto" style="background: linear-gradient(180deg, #4FA2ED 0%, #289C5E 100%);">Lihat
                <svg class="w-4 h-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Card di bagian bawah -->
    <div class="max-w-sm mx-auto mt-10 p-6 mb-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 flex items-center justify-start flex-col" style="margin-top: 120px; flex: 1;">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="url(#icon-gradient)" viewBox="0 0 20 20">
                <defs>
                    <linearGradient id="icon-gradient" x1="0" y1="0" x2="0" y2="100%">
                        <stop offset="0%" stop-color="#289C5E"></stop>
                        <stop offset="100%" stop-color="#4FA2ED"></stop>
                    </linearGradient>
                </defs>
                <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
            </svg>
            <p class="ml-2 mb-4 text-gray-700 dark:text-gray-400" style="text-align: left;">Kuis PPh 21: Perhitungan PPh 21</p>
        </div>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white text-center rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-auto" style="background: linear-gradient(180deg, #4FA2ED 0%, #289C5E 100%);">Lihat
            <svg class="w-4 h-4 ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</div>

<br>
@endsection