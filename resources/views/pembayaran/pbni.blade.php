<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:30px; font-weight:700;">Metode Pembayaran Lewat Bank BNI</h1><br><br>
        <div>
            {{-- ATM --}}
            <p style="color: rgb(199, 155, 11)">ATM</p><br>
            <p style="font-weight: 700">LANGKAH 1: TEMUKAN ATM TERDEKAT</p>
            <p>1. Masukkan kartu ATM anda</p>
            <p>2. Pilih bahasa</p>
            <p>3. Masukkan PIN ATM anda</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih “Menu Lainnya”</p>
            <p>2. Pilih “Transfer”</p>
            <p>3. Pilih jenis rekening yang akan anda gunakan (contoh: “Dari Rekening Tabungan”)</p>
            <p>4. Pilih “Virtual Account Billing”</p>
            <p>5. Masukkan Nomor Virtual Account anda</p>
            <p>6. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</p>
            <p>7. Konfirmasi, apabila telah sesuai, lanjutkan transaksi</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- IBANKING --}}
            <p style="color: rgb(199, 155, 11)">IBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka situs https://ibank.bni.co.id</p>
            <p>2. Masukkan User ID dan Password</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih menu “Transfer”</p>
            <p>2. Pilih menu “Virtual Account Billing”</p>
            <p>3. Masukkan Nomor Virtual Account anda</p>
            <p>4. Lalu pilih rekening debet yang akan digunakan. Kemudian tekan “Lanjut”</p>
            <p>5. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</p>
            <p>6. 6. Masukkan Kode Otentikasi Token</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- MBANKING --}}
            <p style="color: rgb(199, 155, 11)">MBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Akses BNI Mobile Banking melalui handphone</p>
            <p>2. Masukkan User ID dan Password</p>
            <p>3. Pilih menu “Transfer”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih menu “Virtual Account Billing”, lalu pilih rekening debet</p>
            <p>2. Masukkan Nomor Virtual Account anda pada menu “Input Baru”</p>
            <p>3. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</p>
            <p>4. Konfirmasi transaksi dan masukkan Password Transaksi</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>
        </div>
</x-app-layout>