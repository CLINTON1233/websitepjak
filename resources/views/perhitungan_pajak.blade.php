@extends('layouts.perhitungan')

@section('layouts', 'perhitungan')



@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PPH</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite/css/flowbite.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

        .progress-bar .step .bullet.active {
            border-color: linear-gradient(#09c778, #01a0f9);
            background: linear-gradient(#09c778, #01a0f9);
        }
    </style>


</head>

<body>

<div class="max-w-xl mx-auto relative">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1 relative">
            <label for="C. Penghitungan PPh Pasal 21"
                class="absolute left-10 top-10 font-inter  font-bold text-green-700 text-l">C.
                Penghitungan PPh Pasal 21:</label>
        </div>
    </div>
    <br>
    <br>
    



            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-1">
                    <label for="Gaji"
                        class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">11.
                        Penghasilan Bruto Setahun</label>
                </div>
                <div class="col-span-1">
                    <div class="mb-5">
                        <input type="text" id="base-input"
                            class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            </div>
            <div class="max-w-xl mx-auto">
                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <label for="Gaji"
                            class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">12.
                            Biaya Jabatan Setahun</label>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-5">
                            <input type="text" id="base-input"
                                class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>
                <div class="max-w-xl mx-auto">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-1">
                            <label for="Gaji"
                                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">13.
                                Iuran Pensiun Setahun</label>
                        </div>
                        <div class="col-span-1">
                            <div class="mb-5">
                                <input type="text" id="base-input"
                                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xl mx-auto">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-1">
                                <label for="Gaji"
                                    class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">14.
                                    Jumlah Pengurang Setahun</label>
                            </div>
                            <div class="col-span-1">
                                <div class="mb-5">
                                    <input type="text" id="base-input"
                                        class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-xl mx-auto">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-1">
                                    <label for="Gaji"
                                        class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">15.
                                        Penghasilan Neto</label>
                                </div>
                                <div class="col-span-1">
                                    <div class="mb-5">
                                        <input type="text" id="base-input"
                                            class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-xl mx-auto">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="col-span-1">
                                        <label for="Gaji"
                                            class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">16.
                                            Penghasilan Neto Masa Sebelumnya</label>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="mb-5">
                                            <input type="text" id="base-input"
                                                class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                    </div>
                                </div>
                                <div class="max-w-xl mx-auto">
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="col-span-1">
                                            <label for="Gaji"
                                                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">17.
                                                Penghasilan Neto Setahun/Disetahunkan</label>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="mb-5">
                                                <input type="text" id="base-input"
                                                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="max-w-xl mx-auto">
                                        <div class="grid grid-cols-2 gap-6">
                                            <div class="col-span-1">
                                                <label for="Gaji"
                                                    class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">18.
                                                    Penghasilan Tidak Kenak Pajak</label>
                                            </div>
                                            <div class="col-span-1">
                                                <div class="mb-5">
                                                    <input type="text" id="base-input"
                                                        class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="max-w-xl mx-auto">
                                            <div class="grid grid-cols-2 gap-6">
                                                <div class="col-span-1">
                                                    <label for="Gaji"
                                                        class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">19.
                                                        PKP Setahun/Disetahunkan</label>
                                                </div>
                                                <div class="col-span-1">
                                                    <div class="mb-5">
                                                        <input type="text" id="base-input"
                                                            class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="max-w-xl mx-auto">
                                                <div class="grid grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <label for="Gaji"
                                                            class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">20.
                                                            Pph Pasal 21 atas PKP</label>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <div class="mb-5">
                                                            <input type="text" id="base-input"
                                                                class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="max-w-xl mx-auto">
                                                    <div class="grid grid-cols-2 gap-6">
                                                        <div class="col-span-1">
                                                            <label for="Gaji"
                                                                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">21.
                                                                Pph Pasal 21 Dipotong Masa Sebelumnya</label>
                                                        </div>
                                                        <div class="col-span-1">
                                                            <div class="mb-5">
                                                                <input type="text" id="base-input"
                                                                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="max-w-xl mx-auto">
                                                        <div class="grid grid-cols-2 gap-6">
                                                            <div class="col-span-1">
                                                                <label for="Gaji"
                                                                    class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">22.
                                                                    Pph Pasal 21 Terutang Setahun/Disetahunkan</label>
                                                            </div>
                                                            <div class="col-span-1">
                                                                <div class="mb-5">
                                                                    <input type="text" id="base-input"
                                                                        class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                           <div class="max-w-xl mx-auto">
                                                    <div class="grid grid-cols-2 gap-6">
                                                        <div class="col-span-1">
                                                            
                                                            <label for="Gaji"
                                                                class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800"><button type="button"
                                                                                class="collapsible"> 23. >>
                                                                PPh Pasal 21 Terutang bulan ini</label>
                                                        </div>
                                                        <div class="col-span-1">
                                                            <div class="mb-5">
                                                                <input type="text" id="base-input"
                                                                    class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="max-w-xl mx-auto">
                                                <div class="grid grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <label for="Gaji"
                                                            class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">PPh Pasal 21 atas Penghasilan Teratur Setahun</label>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <div class="mb-5">
                                                            <input type="text" id="base-input"
                                                                class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="max-w-xl mx-auto">
                                                <div class="grid grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <label for="Gaji"
                                                            class="block mb-2 text-base font-normal text-black dark:text-white font-inter font-normal text-sm text-green-800">PPh Pasal 21 atas Penghasilan Tidak Teratur</label>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <div class="mb-5">
                                                            <input type="text" id="base-input"
                                                                class="bg-white border border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-1 flex items-center justify-end">
            <button class="firstPrevious previous bg-green-500 text-white font-bold rounded-lg px-4 py-2">SEBELUMNYA</button>
            <div style="margin-right: 10px;"></div> 
            <button class="firstNext next bg-green-500 text-white font-bold rounded-lg px-4 py-2">RESET</button>
        </div>
    </div>
</div>
</body>

</html>
@endsection