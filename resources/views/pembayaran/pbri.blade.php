<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:30px; font-weight:700;">Metode Pembayaran Lewat Bank BRI</h1><br><br>
        <div>
            {{-- ATM --}}
            <p style="color: rgb(199, 155, 11)">ATM</p><br>
            <p style="font-weight: 700">LANGKAH 1: TEMUKAN ATM TERDEKAT</p>
            <p>1. Masukkan kartu, kemudian pilih bahasa dan masukkan PIN anda</p>
            <p>2. Pilih “Transaksi Lain” dan pilih “Pembayaran”</p>
            <p>3. Pilih menu “Lainnya” dan pilih “Briva”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Masukkan Nomor Virtual Account anda dan jumlah yang ingin anda bayarkan</p>
            <p>2. Periksa data transaksi dan tekan “YA”</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- IBANKING --}}
            <p style="color: rgb(199, 155, 11)">IBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka situs https://ib.bri.co.id/ib-bri/, dan masukkan USER ID dan PASSWORD anda</p>
            <p>2. Pilih “Pembayaran” dan pilih “Briva”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Masukkan Nomor Virtual Account anda dan jumlah yang ingin anda bayarkan</p>
            <p>2. Masukkan password anda kemudian masukkan mToken internet banking</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- MBANKING --}}
            <p style="color: rgb(199, 155, 11)">MBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka aplikasi BRI Mobile Banking, masukkan USER ID dan PIN anda</p>
            <p>2. Pilih “Pembayaran” dan pilih “Briva”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Masukkan Nomor Virtual Account anda dan jumlah yang ingin anda bayarkan</p>
            <p>2. Masukkan PIN Mobile Banking BRI</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>
        </div>
</x-app-layout>