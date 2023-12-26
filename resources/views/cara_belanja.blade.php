<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div style="margin: 10px 100px 30px 100px;">
    <h1 style="text-align: center; font-size:30px; font-weight:700;">Cara Belanja</h1>   
    <div>
        <p>Langkah 1:</p>
        <p style="font-weight: 700">Login/Daftar</p>
        <p>1. Buka website natasha-skin.com</p>
        <p>2. Pilih menu “Login/Daftar”</p>
        <p>3. Masukkan nomor telepon</p>
        <p>4. Klik Tombol Submit</p>
        <p>5. Masukkan nomor OTP</p>
        <p>6. Klik Tombol Activate</p>
    </div>

    <div style="margin-top: 20px;">
        <p>Langkah 2:</p>
        <p style="font-weight: 700">Belanja</p>
        <p>1. Pilih Menu “Belanja” dan Pilih Produk untuk memasukkan produk ke dalam keranjang</p>
        <p>2. Klik tombol Check Out untuk melanjutkan ke langkah berikutnya.”</p>
        <p>3. Masukkan data & alamat pengiriman dengan lengkap</p>
    </div>
    <div style="margin-top: 20px;">
        <p>Langkah 3:</p>
        <p style="font-weight: 700">Pembayaran</p>
        <p>1.Pilih metode pembayaran yang Anda inginkan</p>
        <p>2. Klik tombol BUAT PESANAN</p>
    </div>
    
    
</div>
</x-app-layout>