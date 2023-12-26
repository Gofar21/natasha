<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:30px; font-weight:700;">Metode Pembayaran Lewat E-WALLET/QRIS</h1><br><br>
        <div>
            {{-- DANA --}}
            <p style="color: rgb(199, 155, 11)">DANA</p><br>
            <p>1. Masukkan nomor handphone akun DANA anda</p>
            <p>2. Masukkan PIN DANA anda</p>
            <p>3. Masukkan kode OTP yang dikirimkan melalui SMS</p>
            <p>4. Konfirmasi pembayaran</p><br><br>

            {{-- LINKAJA --}}
            <p style="color: rgb(199, 155, 11)">LINKAJA</p><br>
            <p>1. Masukkan data nomor handphone dan PIN LinkAja</p>
            <p>2. Klik “Lanjut”</p><br><br>


            {{-- QRIS --}}
            <p style="color: rgb(199, 155, 11)">QRIS</p><br>
            <p>1. Scan kode QR yang ditampilkan</p>
            <p>2. Konfirmasikan pembayaran</p><br><br>

        </div>
</x-app-layout>