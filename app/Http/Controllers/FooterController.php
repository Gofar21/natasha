<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function pembayaran() {
        return view('pembayaran/pembayaran');
    }

    public function pbni() {
        return view('pembayaran/pbni');
    }

    public function pmandiri() {
        return view('pembayaran/pmandiri');
    }

    public function pbri() {
        return view('pembayaran/pbri');  
    }

    public function ppermata() {
        return view('pembayaran/permata');
    }

    public function pe_wallet_qris() {
        return view('pembayaran/pe_wallet_qris');
    }
}
