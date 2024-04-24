@extends('layouts.home')

@section('title', 'home')

@section('content')
<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <div class="relative h-96 overflow-hidden rounded-lg">
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
            <img src="{{ asset('PBL-25/images/Gambar1.png') }}" class="absolute block w-full h-full object-cover -translate-x-2/2 -translate-y-2/2 top-3/2 left-2/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="{{ asset('PBL-25/images/Gambar2.jpeg') }}" class="absolute block w-full h-full object-cover -translate-x-2/2 -translate-y-2/2 top-3/2 left-2/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="{{ asset('PBL-25/images/Gambar3.png') }}" class="absolute block w-full h-full object-cover -translate-x-2/2 -translate-y-2/2 top-3/2 left-2/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!-- Slider Section end Here -->

<!-- AboutSection Start-->
<div class="container" id="profil">
    <br><br>
    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
        <!-- Paragraf di sebelah kiri -->
        <div class="lg:pr-8 lg:flex lg:justify-end">
            <div class="sec-title mb-36">
                <h1 class="title bg-left font-bold text-3xl">Sudut Pajak</h1><br>
                <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify pr-10 lg:text-right mr-4 text-lg">Kami "sudut pajak" merupakan layanan pajak berbasis website. Saat ini sudut pajak memberikan layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum terdaftar. Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami peraturan perpajakan.</p>
            </div>
        </div>
        <!-- Gambar di sebelah kanan -->
        <div>
            <div class="image-wrap animate2 flex justify-center">
                <img class="wow slideInRight" src="{{ asset('PBL-25/images/Pajak.png') }}" alt="">
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br>

<!-- Counter Section Start Here -->
<div class="bg-green-400 to bg-blue-400 py-10">
    <div id="neuron-counter-area" class="neuron-counter-area">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- COUNTER-LIST START -->
                <div class="neuron-counter-part text-center relative">
                    <div class="shape-img custom-shape-img relative h-64" style="margin-top: 80px;">
                        <img src="{{ asset('PBL-25/konsultasi/images/counter/count-shape.png') }}" alt="" class="filter invert">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                            <div class="neuron-counter text-5xl font-bold" style="margin-top: -100px;">100 +</div>
                            <h5 class="counter-txt text-white absolute top-0 left-0 right-0 px-4 py-2 bg-black bg-opacity-50" style="margin-top: 100px;">Konsultasi</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="neuron-counter-part text-center relative">
                    <div class="shape-img custom-shape-img relative h-64" style="margin-top: 80px;">
                        <img src="{{ asset('PBL-25/konsultasi/images/counter/count-shape.png') }}" alt="" class="filter invert">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                            <div class="neuron-counter text-5xl font-bold " style="margin-top: -100px;">200 +</div>
                            <h5 class="counter-txt text-white absolute top-0 left-0 right-0 px-4 py-2 bg-black bg-opacity-50" style="margin-top: 100px;">Pelatihan serifikasi</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="neuron-counter-part text-center relative">
                    <div class="shape-img custom-shape-img relative h-64" style="margin-top: 80px;">
                        <img src="{{ asset('PBL-25/konsultasi/images/counter/count-shape.png') }}" alt="" class="filter invert">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                            <div class="neuron-counter text-5xl font-bold" style="margin-top: -100px;">250 +</div>
                            <h5 class="counter-txt text-white absolute top-0 left-0 right-0 px-4 py-2 bg-black bg-opacity-50" style="margin-top: 100px;">Berita</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="neuron-counter-part text-center relative">
                    <div class="shape-img custom-shape-img relative h-64" style="margin-top: 80px;">
                        <img src="{{ asset('PBL-25/konsultasi/images/counter/count-shape.png') }}" alt="" class="filter invert">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                            <div class="neuron-counter text-5xl font-bold" style="margin-top: -100px;">150 +</div>
                            <h5 class="counter-txt text-white absolute top-0 left-0 right-0 px-4 py-2 bg-black bg-opacity-50" style="margin-top: 100px;">Kategori Usaha</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>
<!-- Services Section Start-->
<!-- Services Section Start-->
<div class="container mx-auto">
    <h1 class="text-center text-3xl font-bold mb-10">Layanan</h1>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-10 lg:gap-y-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="flex justify-center">
                <img src="{{ asset('PBL-25/konsultasi/images/Layanan 1.png') }}" alt="Konsultasi" class="w-32 h-32 object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 text-center">Konsultasi</h3><br>
                <p class="text-gray-700 text-justify">Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang dibantu.</p><br>
                <div class="flex justify-center mt-4">
                    <a href="{{ url('/PBL-25/konsultasi/index.php') }}" class="inline-block bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-full text-white text-sm px-5 py-2.5 text-center me-2 mb-2">LEBIH LANJUT</a> <!-- Mengubah 'rounded-full' menjadi 'rounded-full' -->
                </div>
            </div>
        </div>


        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex justify-center">
                <img src="{{ asset('PBL-25/konsultasi/images/Layanan 2.png') }}" alt="Konsultasi" class="w-32 h-32 object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 text-center">Pelatihan atau Sertifikasi</h3><br>
                <p class=" text-gray-700 text-justify">Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang perpajakan.</p><br>
                <div class="flex justify-center mt-4">
                    <a href="{{ url('/PBL-25/pelatihan_sertifikasi.php') }}" class="inline-block bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-full text-white text-sm px-5 py-2.5 text-center me-2 mb-2">LEBIH LANJUT</a>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex justify-center">
                <img src="{{ asset('PBL-25/konsultasi/images/Layanan 3.png') }}" alt="Konsultasi" class="w-32 h-32 object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 text-center">Berita</h3><br>
                <p class="text-gray-700 text-justify">Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan perpajakan.</p><br><br>
                <div class="flex justify-center mt-4">
                    <a href="#berita" class="inline-block bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-full text-white text-sm px-5 py-2.5 text-center me-2 mb-2">LEBIH LANJUT</a>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex justify-center">
                <img src="{{ asset('PBL-25/konsultasi/images/Layanan 4.png') }}" alt="Konsultasi" class="w-32 h-32 object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 text-center">Kategori Perbidang Usaha</h3><br>
                <p class="text-gray-700">Memberikan layanan edukasi perpajakan yang terkait bidang-bidang usaha tertentu secara spesifik untuk masing-masing bidang usaha.</p>
                <div class="flex justify-center mt-4">
                    <a href="{{ url('/PBL-25/kategoriusaha.php') }}" class="inline-block bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-full text-white text-sm px-5 py-2.5 text-center me-2 mb-2">LEBIH LANJUT</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Services Section End-->

    <br><br><br><br><br><br><br>

    <!-- Konsultasi Start-->
    <div class="container">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <!-- Paragraf di sebelah kiri -->
            <div class="lg:pr-8">
                <div class="sec-title mb-36">
                    <h1 class="title bg-left font-bold text-3xl">Aplikasi Online Pajak Solusi Pintar Mengelola Pajak Anda</h1><br>
                    <p>Mengelola pajak di Indonesia kini semakin mudah. Saatnya hitung, setor, dan lapor pajak perusahaan Anda di satu aplikasi pajak online terpadu.</p>
                </div><br>

                <div class="flex justify-left mt-4">
                    <button type="button" class="inline-block bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-full text-white text-sm px-6 py-3 text-center me-2 mb-2">MULAI SEKARANG</button>
                </div>


            </div>
            <!-- Gambar di sebelah kanan -->
            <div>
                <div class="image-wrap animate2 flex justify-center">
                    <img class="wow slideInRight" src="{{ asset('PBL-25/images/Konsultasi1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div><br><br><br><br><br>
    <!-- Konsultasi End-->


    <!-- Berita Start-->
    <!-- <div class="sec-title text-center mb-50" id="berita"><br><br><br><br><br><br><br><br><br>
            <h2 class="title bg-center margin-0">Berita</h2> -->
    <!-- <h2 class="title extra-none title-color mb-0">Frequently Asked Questions</h2> -->
    <!-- </div> -->

    <!-- </div>
    <div class="col-lg-3 col-md-4">
        <div class="show-more text-right sm-text-left mt-35 sm-mt-25">
            <a style="width: -30px; left: 450px;" class="readon style2 radius" href="daftar_berita.php">Lihat Berita Lainnya</a>
        </div>
    </div><br><br><br><br><br> -->


    <!-- Frequently Asked Questions -->
    <!-- <div class="container py-3 bg-white">
            <div class="sec-title text-center mb-45">
                <h2 class="title bg-center margin-0">Frequently Asked Questions</h2>
            </div>
            <div class="accordion" id="faqExample" data-fb="accordion">
               Pertanyaan 1 -->
    <!-- <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                Siapa saja yang dapat menggunakan website ini?
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            UMKM Kota Batam, Mahasiswa, Masyarakat Umum, Vendor Website (Admin), dan Konsultan Spesialis Pajak.
                        </div>
                    </div>
                </div> -->
    <!-- Pertanyaan 2 -->
    <!-- <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                            <a href="#collapseTwo" class="btn btn-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                Bagaimana cara User mendaftar di Website Sudut Pajak?
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            <p>Klik log in pada tab log in</p>
                            <p>Silahkan Klik Register</p>
                            <p>Selesaikan Pendaftaran dengan melengkapi biodata diri</p>
                        </div>
                    </div>
                </div> -->
    <!-- Pertanyaan 3 -->
    <!-- <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <a href="#collapseThree" class="btn btn-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                Bagaimana Cara Menggunakan Fitur Kalkulator di Sudut Pajak?
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            Dalam Aplikasi Sudut Pajak, Anda dapat melakukan perhitungan PPh 21 atas gaji dengan langkah-langkah sebagai berikut
                            <p>1. Klik opsi 'kalkulator' pada navigasi.</p>
                            <p>2. Isilah informasi sesuai dengan data yang diperlukan.</p>
                            <p>3. Setelah itu, klik tombol 'Selanjutnya', dan kalkulator akan menampilkan hasil perhitungan, Hasil ini menunjukkan jumlah PPh 21 yang harus dibayarkan pada periode tertentu.</p>
                            <p>4. Jika Anda ingin mengulangi proses dengan data berbeda, cukup klik tombol reset</p>
                        </div>
                    </div>
                </div> -->
    <!-- Pertanyaan 4 -->
    <!-- <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <a href="#collapseFour" class="btn btn-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                Apa yang Dimaksud dengan Aplikasi Pajak?
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            Fitur ini akan mengarahkan Anda ke situs Tax Center Politeknik Negeri Batam, yang menawarkan layanan bantuan perpajakan seperti Lapor Pajak Orang Pribadi dan Lapor Pajak Badan Usaha.
                        </div>
                    </div>
                </div> -->
    <!-- Pertanyaan 5 -->
    <!-- <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <a href="#collapseFive" class="btn btn-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFive">
                                Apa Fungsi dari Fitur Peraturan Pajak?
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                            Fitur ini berisi informasi tentang Peraturan Pajak Pusat dan Peraturan Pajak Daerah Kota Batam. Anda dapat mengunduh rincian peraturan-peraturan ini dari laman tersebut.
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <br><br><br><br><br><br>
    <!-- Card Section Start Here -->
    <div class="bg-gradient-to-r from-green-400 to-blue-600 py-10 relative">
        <div id="neuron-counter-area" class="neuron-counter-area bg-gradient-to-bl hover:bg-gradient-to-br focus:ring-green-200 dark:focus:ring-green-800 absolute top-0 left-0 right-0 bottom-0">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- COUNTER-LIST START -->
                <div class="neutron-counter-part text-center relative" style="top: -140px; right: -50px;">
                    <div class="shape-img custom-shape-img relative h-64">
                        <!-- Placeholder for counter image -->
                        <div class="max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto mt-40">
                            <!-- Card Section Start Here -->
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Hubungi Kami</h5>
                            </a><br>

                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-place"></i>
                                </div>
                                <div class="icon-text">
                                    <h4 class="icon-title font-bold">Alamat</h4>
                                    <p>Politeknik Negeri Batam <br>Jl. Ahmad Yani Batam Kota. Kota Batam. Kepulauan Riau. Indonesia</p>
                                </div>
                            </div><br>

                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="icon-text">
                                    <h4 class="icon-title font-bold">WhatsApp</h4>
                                    <a href="tel:+6281378021623">+62 813-7802-1623</a>
                                </div><br>
                            </div>

                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-mail-1"></i>
                                </div>
                                <div class="icon-text">
                                    <h4 class="icon-title font-bold">Email</h4>
                                    <a href="mailto:taxcenter@polibatam.ac.id">taxcenter@polibatam.ac.id</a>
                                </div>
                            </div>
                            <!-- Place other contact information here -->
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- You can add other counter elements here -->
            </div>
        </div>
    </div>
    @endsection