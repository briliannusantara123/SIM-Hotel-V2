<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\laundry;
use App\Transaksi;

class TransaksiController extends Controller
{
      public function index()
    {
        $transaksi= Transaksi::all();
       
        
        return view('transaksi',['transaksi' => $transaksi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        
        $post   =   Transaksi::updateOrCreate(['id' => $id],
                    [
                        'namakamar' => $request->namakamar,
                        'hargakamar' => $request->hargakamar,
                        'jumlahkamar' => $request->jumlahkamar,
                        'laundry' => $request->laundry,
                        'hargalaundry' => $request->hargalaundry,
                        'jumlahlaundry' => $request->jumlahlaundry,
                        'total_laundry' => $request->total_laundry,
                        'total_kamar' => $request->total_kamar,
                    ]); 


       
         
        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Transaksi::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Transaksi::where('id',$id)->delete();
     
        return response()->json($post);
    }
     public function create(Request $request)
    {
        \App\Transaksi::create($request->all());
        return redirect('/transaksi')->with('sukses','data berhasil disimpan');
    }
    
}
