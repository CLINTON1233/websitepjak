@extends('layouts.penghasilan')

@section('title', 'penghasilan')

@section('content')

<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="A. Penghasilan" class="absolute w-145 h-24 left-317 top-179 font-inter font-bold text-20 leading-24 text-green-700 text-xl">A.
                Penghasilan</label>
        </div>
    </div>
    <br>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="Gaji" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">1. Gaji/Pensiun atau
                THT/JHT</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjangan" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">2. Tunjangan
                PPh</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjangan-lainnya" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">3.
                Tunjangan lainnya, Uang Lembur, dan Sebagainnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="honorium" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">4. Honorium dan
                Imbalan lain Sejenisnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="premi-asuransi" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">5. Premi
                Asuransi yang dibayar Pemberi Kerja</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="natura" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">6. Natura dan
                Kenikmatan Lainnya</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tantiem" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">7. Tantiem, Bonus,
                Gratifikasi, Jasa Produksi dan THR</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="bruto" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">8. Penghasilan
                Bruto</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <form class="max-w-sm mx-auto">
                    <input type="text" id="disabled-input" aria-label="disabled input" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <label for="B. Pengurangan" class="absolute w-145 h-24 left-317 top-179 font-inter font-bold text-20 leading-24 text-green-700 text-xl">B.
            Pengurangan</label>
    </div>
</div>
<br>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjanganpajak" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">9. Biaya Jabatan</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <form class="max-w-sm mx-auto">
                    <input type="text" id="disabled-input" aria-label="disabled input" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="Iuran" class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">10. Iuran Pensiun atau Iuran THT/JHT</label>
        </div>
        <div class="col-span-1">
            <div class="mb-5">
                <input type="text" id="base-input" class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
</div>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1 flex items-center justify-start">
        </div>
        <div class="col-span-1 flex items-center justify-end">
            <button class="firstPrevious previous bg-green-500 text-white font-bold rounded-lg px-4 py-2">Sebelumnya</button>
            <div style="margin-right: 10px;"></div>
            <button class="firstNext next bg-green-500 text-white font-bold rounded-lg px-4 py-2">Selanjutnya</button>
        </div>
    </div>
</div>

<br>


@endsection