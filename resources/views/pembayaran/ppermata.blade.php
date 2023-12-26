<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:30px; font-weight:700;">Metode Pembayaran Lewat Bank Permata</h1><br><br>
        <div>
            {{-- ATM --}}
            <p style="color: rgb(199, 155, 11)">ATM</p><br>
            <p style="font-weight: 700">LANGKAH 1: TEMUKAN ATM TERDEKAT</p>
            <p>1. Masukkan kartu ATM Permata anda</p>
            <p>2. Masukkan PIN</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih menu “Transaksi Lainnya”</p>
            <p>2. Pilih menu “Pembayaran”</p>
            <p>3. Pilih menu “Pembayaran Lainnya”</p>
            <p>4. Pilih menu “Virtual Account”</p>
            <p>5. Masukkan Nomor Virtual Account anda</p>
            <p>6. Lalu pilih rekening debet yang akan digunakan</p>
            <p>7. Konfirmasi detail transaksi anda</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- IBANKING --}}
            <p style="color: rgb(199, 155, 11)">IBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka situs https://new.permatanet.com</p>
            <p>2. Masukkan User ID dan Password</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih “Pembayaran Tagihan”</p>
            <p>2. Pilih “Virtual Account”</p>
            <p>3. Masukk Nomor Virtual Account anda</p>
            <p>4. Periksa kembali detail pembayaran anda</p>
            <p>5. Masukkan otentikasi transaksi/token</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- MBANKING --}}
            <p style="color: rgb(199, 155, 11)">MBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka aplikasi PermataMobile Internet</p>
            <p>2. Masukkan User ID dan Password</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih “Pembayaran Tagihan”</p>
            <p>2. Pilih “Virtual Account”</p>
            <p>3. Masukkan Nomor Virtual Account anda</p>
            <p>4. Konfirmasi transaksi dan masukkan Password Transaksi</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>
        </div>
</x-app-layout>