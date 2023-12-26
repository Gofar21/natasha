<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:30px; font-weight:700;">Metode Pembayaran Lewat Bank Mandiri</h1><br><br>
        <div>
            {{-- ATM --}}
            <p style="color: rgb(199, 155, 11)">ATM</p><br>
            <p style="font-weight: 700">LANGKAH 1: TEMUKAN ATM TERDEKAT</p>
            <p>1. Masukkan ATM dan tekan “Bahasa Indonesia”</p>
            <p>2. Masukkan PIN, lalu tekan “Benar”</p>
            <p>3. Pilih “Pembayaran”, lalu pilih “Multi Payment”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Masukkan kode perusahaan ‘88908’ (88908 XENDIT), lalu tekan ‘BENAR’</p>
            <p>2. Masukkan Nomor Virtual Account anda, lalu tekan ‘BENAR’</p>
            <p>3. Masukkan nominal yang ingin di transfer, lalu tekan “BENAR”</p>
            <p>4. Informasi pelanggan akan ditampilkan, pilih nomor 1 sesuai dengan nominal pembayaran kemudian tekan “YA”</p>
            <p>5. Konfirmasi pembayaran akan muncul, tekan “YES”, untuk melanjutkan</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Simpan bukti transaksi anda</p>
            <p>2. Transaksi anda berhasil</p>
            <p>3. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>

            {{-- IBANKING --}}
            <p style="color: rgb(199, 155, 11)">IBANKING</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka situs Mandiri Internet Banking https://ibank.bankmandiri.co.id</p>
            <p>2. Masuk menggunakan USER ID dan PASSWORD anda</p>
            <p>3. Buka halaman beranda, kemudian pilih “Pembayaran”</p>
            <p>4. Pilih “Multi Payment”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih 88908 XENDIT sebagai penyedia jasa</p>
            <p>2. Masukkan Nomor Virtual Account anda</p>
            <p>3. Lalu pilih Lanjut</p>
            <p>4. Apabila semua detail benar tekan “KONFIRMASI”</p>
            <p>5. Masukkan PIN / Challenge Code Token</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Setelah transaksi pembayaran Anda selesai, simpan bukti pembayaran</p>
            <p>2. Invoice ini akan diperbarui secara otomatis. Ini bisa memakan waktu hingga 5 menit</p><br><br>

            {{-- MBANKING --}}
            <p style="color: rgb(199, 155, 11)">MBANKING YELLOW LIVIN</p><br>
            <p style="font-weight: 700">LANGKAH 1: MASUK KE AKUN ANDA</p>
            <p>1. Buka aplikasi Livin by Mandiri, masukkan PASSWORD atau lakukan verifikasi wajah</p>
            <p>2. Pilih “Bayar”</p>
            <p>3. Cari “Xendit 88908”</p><br>

            <p style="font-weight: 700">LANGKAH 2: DETAIL PEMBAYARAN</p>
            <p>1. Pilih Xendit 88908 sebagai penyedia jasa</p>
            <p>2. Masukkan Nomor Virtual Account anda</p>
            <p>3. Nominal pembayaran akan terisi secara otomatis</p>
            <p>4. Tinjau dan konfirmasi detail transaksi anda, lalu tekan Konfirmasi</p>
            <p>5. Selesaikan transaksi dengan memasukkan MPIN anda</p><br>

            <p style="font-weight: 700">LANGKAH 3: TRANSAKSI BERHASIL</p>
            <p>1. Transaksi Anda telah selesai</p>
            <p>2. Setelah transaksi anda selesai, invoice ini akan diupdate secara otomatis. Proses ini mungkin memakan waktu hingga 5 menit</p><br><br>
        </div>
</x-app-layout>