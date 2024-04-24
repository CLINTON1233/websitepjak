@extends('layouts.informasi')

@section('title', 'informasi')

@section('content')
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="npwp" class="block mb-2 text-sm font-medium text-black dark:text-white">Status NPWP</label>
        </div>
        <div class="col-span-1">
            <div class="radio-group">
                <input type="radio" id="npwp_yes" name="npwp" value="1" checked class="radio">
                <label for="npwp_yes" class="mr-2 text-sm font-medium text-black dark:text-white">NPWP</label>
                <input type="radio" id="npwp_no" name="npwp" value="0" class="radio border-black">
                <label for="npwp_no" class="text-sm font-medium text-black dark:text-white">Non NPWP</label>
            </div>
        </div>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="statusKawin" class="block mb-2 text-sm font-medium text-black dark:text-white">Status Kawin</label>
        </div>
        <div class="col-span-1">
            <div>
                <select name="statusKawin" id="statusKawin" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 185%;">
                    <option value="54000000" selected>TK</option>
                    <option value="58500000">K</option>
                    <option value="112500000">KI</option>
                </select>
            </div>
        </div>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tanggungan" class="block mb-2 text-sm font-medium text-black dark:text-white">Tanggungan</label>
        </div>
        <select name="tanggungan" id="tanggungan" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 185%;">
            <option value="0" selected="selected">0</option>
            <option value="4500000">1</option>
            <option value="9000000">2</option>
            <option value="13500000">3</option>
        </select>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="masaAwal" class="block mb-2 text-sm font-medium text-black dark:text-white">Masa Penghasilan</label>
        </div>
        <div class="col-span-1 flex items-center">
            <div class="select-month" style="width: calc(50% - 15px);">
                <select id="masaAwal" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 400%;">
                    <option value="1" selected>Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div style="float:left;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/d&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="select-month" style="width: calc(50% - 15px);">
                <select id="masaAkhir" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 440%;">
                    <option value="1" selected>Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12" selected>Desember</option>
                </select>
            </div>
        </div>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="statusMasuk" class="block mb-2 text-sm font-medium text-black dark:text-white">Status Masuk</label>
        </div>
        <select id="statusMasuk" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 185%;">
            <option value="---" selected="selected"><strong>Pilih Salah Satu</strong></option>
            <option value="baru">Pegawai Baru</option>
            <option value="pindah">Pegawai Pindahan</option>
            <option value="ekspatriat">Ekspatriat</option>
        </select>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="title"><strong>Konfigurasi</strong></div>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="tunjanganpajak" class="block mb-2 text-sm font-medium text-black dark:text-white">Tunjangan Pajak</label>
        </div>
        <div class="col-span-1">
            <div class="radio-group">
                <input type="radio" name="rbTunjPajak" value="grossup" checked class="radio">
                <label for="" class="mr-2 text-sm font-medium text-black dark:text-white">Gross Up</label>
                <input type="radio" name="rbTunjPajak" value="nongrossup" class="radio border-black">
                <label for="" class="text-sm font-medium text-black dark:text-white">Non Gross Up</label>
            </div>
        </div>
    </div>
</div>
<br>
<div class="max-w-xl mx-auto">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="ketentuan_ptkp" class="block mb-2 text-sm font-medium text-black dark:text-white">Ketentuan PTKP</label>
        </div>
        <select id="ketentuan_ptkp" class="bg-white border border-green text-black text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" style="width: 185%;">>
            <option value="2011">Januari 2011 - Desember 2012</option>
            <option value="2013">Januari 2013 - Desember 2014</option>
            <option value="2015">Januari 2015 - Desember 2015</option>
            <option value="2016" selected="selected">Mulai Januari 2016</option>
        </select>
    </div>
</div>
<br>
<div class="col-span-1 flex items-center justify-end">
    <button class="firstNext next bg-green-500 text-white font-bold rounded-lg px-4 py-2">Selanjutnya</button>
    <div style="margin-left:240px;"></div>

</div>
   </div>
</div>
</div>

@endsection