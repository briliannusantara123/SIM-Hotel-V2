<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Databooking;
use App\Transaksi;
use App\Histori;
use App\Laundry;
use App\Kamar;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
      public function index()
    {
        $databooking= Booking::all();
        $kamar = Kamar::all();
        
        return view('databooking.index',['databooking' => $databooking,'kamar' => $kamar]);
    }

    public function stores(Request $request)
   {
        $databooking = new \App\Databooking;
        $databooking->nama= $request->nama;
        $databooking->telepon= $request->telepon;
        $databooking->email= $request->email;
        $databooking->alamat= $request->alamat;
        $databooking->namakamar= $request->namakamar;
        $databooking->id_tipekamar= $request->id_tipekamar;
        $databooking->jumlahkamar= $request->jumlahkamar;
        $databooking->deskripsi= $request->deskripsi;
        $databooking->hargakamar= $request->hargakamar;
        $databooking->jumlah_orang= $request->jumlah_orang;
        $databooking->tanggal= $request->tanggal;
        $databooking->tanggal_keluar= $request->tanggal_keluar;
        $databooking->jumlahhari= $request->jumlahhari;
        $databooking->total= $request->total;
        $databooking->fasilitas= $request->fasilitas;
        $databooking->save();

         $this->validate($request, [
                        'nama' => 'required',
                        'telepon' => 'required',
                        'email' => 'required',
                        'alamat' => 'required',
                        'namakamar' => 'required',
                        'id_tipekamar' => 'required',
                        'jumlahkamar' => 'required',
                        'deskripsi' => 'required',
                        'hargakamar'=> 'required',
                        'jumlah_orang' => 'required',
                        'tanggal' => 'required',
                        'tanggal_keluar' => 'required',
                        'jumlahhari' => 'required',
                        
        ]);
        Booking::create($request->all());

         Mail::raw('Booking Kamar Berhasil,Atas Nama: '.$databooking->nama, function($message) use($databooking){
            $message->to($databooking->email,$databooking->nama);
            $message->subject('Pemesanan Kamar Hotel');
            $message->from('briliannusantara123@gmail.com','Hotel Wikrama');
         });           
         session()->flash('success', 'Berhasil Booking Kamar');
        return redirect('/'); 
   }
   public function checkin($id)
    {
        $checkin = Booking::find($id);
       
        return view('databooking/checkin',['checkin' =>$checkin]);
    }
    public function update(Request $request,$id)
    {
        $booking = Booking::find($id);
        $booking->delete($booking);

        $transaksi = new Transaksi();
        $transaksi->nama = $request->nama;
        $transaksi->telepon = $request->telepon;
        $transaksi->alamat = $request->alamat;
        $transaksi->namakamar = $request->namakamar;
        $transaksi->hargakamar = $request->hargakamar;
        $transaksi->jumlahkamar = $request->jumlahkamar;
        $transaksi->jumlahhari = $request->jumlahhari;
        $transaksi->tanggal_masuk = $request->tanggal;
        $transaksi->tanggal_keluar = $request->tanggal_keluar;
        $transaksi->total_kamar = $request->total;
        $transaksi->save();
        
        return redirect('/transaksi');
    }
    public function checkout($id)
    {
        $checkout = Transaksi::find($id);
       
        return view('databooking/checkout',['checkout' =>$checkout]);
    }
    public function updates(Request $request,$id)
    {
        $checkout = Transaksi::find($id);
        $checkout->delete($checkout);

        $histori = new Histori();
        $histori->nama = $request->nama;
        $histori->telepon = $request->telepon;
        $histori->alamat = $request->alamat;
        $histori->namakamar = $request->namakamar;
        $histori->hargakamar = $request->hargakamar;
        $histori->tanggal_masuk = $request->tanggal_masuk;
        $histori->tanggal_keluar = $request->tanggal_keluar;
        $histori->total_kamar = $request->total_kamar;
        $histori->jumlahlaundry = $request->jumlahlaundry;
        $histori->hargalaundry = $request->paketlaundry;
        $histori->totallaundry = $request->totallaundry;
        $histori->totalbayar = $request->total_bayar;
        $histori->save();
       
        return redirect('/histori')->with('success','Proses Check-Out Berhasil');
    }
    public function histori()
    {
        $histori= Histori::all();
        return view('histori',['histori' => $histori]);
    }
     public function melaundry($id)
    {
        $melaundry = Transaksi::find($id);
        $laundry= Laundry::all();
       
        return view('databooking/melaundry',['melaundry' => $melaundry,'laundry' => $laundry ]);
    }
    public function laundry(Request $request,$id)
    {
        $laundry = Transaksi::find($id);
        $laundry->update($request->all());

       
       
        return redirect('/transaksi')->with('success','Berhasil Melaundry');
    }
    public function truncate()
    {
        DB::table('histori')->truncate();
    }
}
