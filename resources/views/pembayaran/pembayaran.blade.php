<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="margin: 10px 100px 30px 100px;">
        <h1 style="text-align: center; font-size:40px; font-weight:700;">Pembayaran</h1> <br><br>  
        <div>
            <p style="font-weight: 700; font-size:30px;">Pilih Metode Pembayaran</p><br>
            <p>
                <a href="{{ route('pbni') }}">1. Bank BNI (Dicek otomatis)</a>
            </p><br>
            <p>
                <a href="{{ route('pmandiri') }}">2. Bank Mandiri (Dicek otomatis)</a>
            </p><br>
            <p>
                <a href="{{ route('pbri') }}">3. Bank BRI (Dicek otomatis)</a>
            </p><br>
            <p>
                <a href="{{ route('ppermata') }}">4. Bank Permata (Dicek otomatis)</a>
            </p><br>
            <p>
                <a href="{{ route('pe_wallet_qris') }}">5. ME-WALLET/QRIS</a>
            </p><br>
        </div>
    </div>

</x-app-layout>