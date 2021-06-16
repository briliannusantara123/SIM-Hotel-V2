<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\Transaksi;
use App\Booking;
use App\Laundry;

class LaporanController extends Controller
{
    public function index()
    {
    	$kamar = Kamar::all();
    	$transaksi = Transaksi::all();
    	$booking = Booking::all();
    	$laundry = Laundry::all();

    	return view('laporan',['kamar' => $kamar,'transaksi' => $transaksi,'booking' => $booking,'laundry' => $laundry]);

    }
}
