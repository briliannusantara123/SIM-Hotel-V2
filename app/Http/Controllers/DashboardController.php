<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
   public function index()
   {
   	$booking = DB::table('booking')->count();
   	$datatamu = DB::table('datatamu')->count();
   	$kamar = DB::table('kamar')->count();
   	$laundry = DB::table('laundry')->count();
   	$reservationdiary = DB::table('reservationdiary')->count();
   	$tipekamar = DB::table('tipekamar')->count();
   	$transaksi = DB::table('transaksi')->count();
   	return view('dashboard',compact('booking','datatamu','kamar','laundry','reservationdiary','tipekamar','transaksi'));
   }
}
