@extends('layouts.layanan')

@section('title', 'layanan')

@section('content')
<section class="breadcrumb">
    <div class="breadcrumbs bg-cover bg-center py-24" style="background-image: url('/PBL-25/images/bg.jpg')">
        <div class="container mx-auto">
            <h1 class="text-5xl text-white font-breadcrumbs font-bold mb-8 text-center">Kategori Perbidang Usaha</h1>
            <nav class="categories flex items-center justify-center">
                <ul class="flex">
                    <li class="mr-4"><a href="{{ url('index.php') }}" class="text-white">Beranda &nbsp; // &nbsp;</a></li>
                    <li><span class="text-white">&nbsp; Kategori Perbidang Usaha &nbsp;</span></li>

                </ul>
            </nav>
        </div>
    </div>


</section>
<!-- Breadcrumbs End -->

<!-- Privacy Policy Start -->
<div class="neuron-about gray-bg pt-90 pb-100 md-pt-70 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <h2 class="title extra-none title-color text-4xl text-blue-800 font-bold mt-10 mb-0">Layanan Kami</h2>
        </div>
    </div>
</div>





<div class="flex items-center justify-center h-screen flex-col">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 justify-center">
        <a href="#" class="block max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto my-8">
            <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Konsultasi</h2>
            <p class="font-normal desc-text text-blue-500 dark:text-blue-400 text-sm text-left">Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang dibantu.</p>
        </a>

        <a href="#" class="block max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto my-8">
            <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pelatihan atau Sertifikasi</h2>
            <p class="font-normal desc-text text-blue-500 dark:text-blue-400 text-sm text-left">Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang perpajakan.</p>
        </a>

        <a href="#" class="block max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto my-8">
            <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Berita</h2>
            <p class="font-normal desc-text text-blue-500 dark:text-blue-400 text-sm text-left">Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan perpajakan.</p>
        </a>

        <a href="#" class="block max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto my-8">
            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kategori Perbidang Usaha</h5>
            <p class="font-normal desc-text text-blue-500 dark:text-blue-300 text-sm text-left">Memberikan layanan edukasi perpajakan yang terkait bidang-bidang usaha tertentu secara spesifik untuk masing-masing bidang usaha.</p>
        </a>
    </div>

    <a href="#" class="block max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto mt-20">
        <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Forum Pajak</h5>
        <p class="font-normal desc-text text-blue-500 dark:text-blue-400 text-sm text-center">Tempat untuk bertanya dan berbagi ilmu di bidang perpajakan.</p>
    </a>
</div>




</section>

@endsection