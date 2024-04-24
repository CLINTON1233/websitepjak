@extends('layouts.penghasilan_kalkulator')

@section('title', 'Kalkulator Penghasilan')

@section('content')
<br>
<div class="grid grid-cols-3 items-center">
    <!-- Menggunakan grid layout dengan 3 kolom -->
    <!-- Ikon Buku, Teks Kalkulator Pajak, dan Teks PPh 21 -->
    <div class="col-span-2 flex items-center justify-center">
        <!-- Menggunakan col-span-2 untuk elemen ini -->
        <svg class="w-10 h-10 text-green-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <!-- Memperbesar ikon buku -->
            <path fill-rule="evenodd"
                d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                clip-rule="evenodd" />
        </svg>
        <span class="mx-2"></span>
        <!-- Teks Kalkulator Pajak -->
        <p class="font-inter font-bold text-xl leading-7 text-green-500">Kalkulator pajak</p>
        <span class="mx-2"></span>
        <!-- Teks PPh 21 -->
        <p class="font-inter text-lg leading-7 text-center">PPh 21</p>
    </div>
    <!-- Ikon Home -->
    <div class="flex justify-center">
        <!-- Menggunakan flex justify-center untuk elemen ini -->
        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="#266F48" viewBox="0 0 24 24">
            <!-- Mengubah warna ikon rumah -->
            <path fill-rule="evenodd"
                d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                clip-rule="evenodd" />
        </svg>
    </div>
</div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700" style="border: 1px solid #289C5E;">
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="A. Penghasilan"
                class="absolute w-145 h-24 left-317 top-179 font-inter font-bold text-20 leading-24 text-green-700 text-xl">A.
                Penghasilan</label>
        </div>
    </div>
    <br>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="Gaji"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">1.
                Gaji/Pensiun atau
                THT/JHT</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjangan"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">2.
                Tunjangan
                PPh</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjangan-lainnya"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">3.
                Tunjangan lainnya, Uang Lembur, dan Sebagainnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="honorium"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">4.
                Honorium dan
                Imbalan lain Sejenisnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="premi-asuransi"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">5.
                Premi
                Asuransi yang dibayar Pemberi Kerja</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="natura"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">6.
                Natura dan
                Kenikmatan Lainnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tantiem"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">7.
                Tantiem, Bonus,
                Gratifikasi, Jasa Produksi dan THR</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="bruto"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">8.
                Penghasilan
                Bruto</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <form class="max-w-sm mx-auto">
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" disabled>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <label for="B. Pengurangan"
            class="absolute w-145 h-24 left-317 top-179 font-inter font-bold text-20 leading-24 text-green-700 text-xl">B.
            Pengurangan</label>
    </div>
</div>
<br>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjanganpajak"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">9.
                Biaya Jabatan</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <form class="max-w-sm mx-auto">
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" disabled>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="Iuran"
                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">10.
                Iuran Pensiun atau Iuran THT/JHT</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input"
                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1 flex items-center justify-start">
        </div>
        <div class="col-span-1 flex items-center justify-end">
            <button
                class="firstPrevious previous bg-green-500 text-white font-bold rounded-lg px-4 py-2">Sebelumnya</button>
            <div style="margin-right: 10px;"></div>
            <button class="firstNext next bg-green-500 text-white font-bold rounded-lg px-4 py-2">Selanjutnya</button>
        </div>
    </div>
</div>

<br>
@endsection
