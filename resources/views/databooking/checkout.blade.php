@extends('layouts.master')
@section('content')
<div class="main">
        <div class="main-content">
                <div id="content-wrapper">

    <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
    
   

    <!-- Area Chart Example-->
    <div class="card mb-3">
          <div class="card-header bg-info">
           
            <i class="fas fa-table" style="color: white;"> Proses Check Out</i>
            </div>
          
          <div class="card-body">
              
                                        
                      <form method="POST" action="/checkout/{{$checkout->id}}/updates" enctype="multipart/form-data">
                        @csrf
                      <div class="form-body">
                        <h3 class="form-section">Informasi</h3>
                        <hr>
                        <div class="card-body">
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Nama</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="nama" value="{{$checkout->nama}}" readonly="">
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">No Telepon</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="telepon" value="{{$checkout->telepon}}" readonly="">
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Alamat</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="alamat" value="{{$checkout->alamat}}" readonly="">
                                
                              </div>
                            </div>
                          </div>

                        
                          
                        </div>
                        <h5 class="form-section">Kamar</h3>
                          <hr>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Masuk</label>
                              <div class="col-md-9">
                                 <input class="form-control form-control-inline input-medium date-picker" name="tanggal_masuk" id="tanggal_masuk" size="16" type="text" value="{{ date('d F Y',strtotime($checkout->tanggal_masuk)) }}" readonly="">
                                                              
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Keluar</label>
                              <div class="col-md-9">
                                 <input class="form-control form-control-inline input-medium date-picker" name="tanggal_keluar" id="tanggal_keluar" size="16" type="text" value="{{ date('d F Y',strtotime($checkout->tanggal_keluar)) }}" readonly="">
                                                              
                              </div>
                            </div>
                          </div>
                          
                        </div>
                    
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Kamar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="namakamar" value="{{$checkout->namakamar}}" readonly="">
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-6">Harga Kamar/hari</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="hargakamar" value=" {{$checkout->hargakamar}}" readonly="">
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-5">Total Harga Kamar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="total_kamar" value="{{$checkout->total_kamar}}" readonly="" id="totalkamar">
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-5">Jumlah Hari</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="jumlahhari" value="{{$checkout->jumlahhari}}" readonly="" id="totalkamar">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        @if(($checkout->jumlahlaundry))
                        <h5 class="form-section">Laundry</h3>
                          <hr>
                          <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Jumlah Laundry</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="jumlahlaundry" value="{{$checkout->jumlahlaundry}}" readonly="">
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-5">Harga Laundry/1Kg</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="paketlaundry" value="{{$checkout->paketlaundry}}" readonly="">
                                
                              </div>
                            </div>
                          </div>
                          </div>
                          <div class="row">
                          
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-5">Total Harga Laundry</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="totallaundry" value="{{$checkout->totallaundry}}" readonly="" id="totallaundry">
                                
                              </div>
                            </div>
                          </div>
                          </div>
                         @endif
                        </div>
                        <h3 class="form-section">Pembayaran</h3>
                        <hr>
                        <div class="card-body">
                          <div class="row">
                          @if(($checkout->jumlahlaundry))
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Total Bayar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="totalbayar" id="paket" readonly="">
                                
                                
                              </div>
                            </div>
                            @else
                            <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Total Bayar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="totalbayar" id="paket" value="{{$checkout->total_kamar}}" readonly="">
                                
                                
                              </div>
                            </div>
                            @endif
                          </div>

                          
                          
                        </div>
                        
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Uang Bayar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  id="berat" onkeyup="suma();" required="">
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Uang Kembali</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="kembalian" value="" readonly="">
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success">Bayar</button>
                                <a href="/transaksi" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                    </form>  
                    

          </div>
        </div>
      </div>

    

    </div>
    <script> 
        
            var FirstNumberValue = document.getElementById('totallaundry').value;
            var SecondNumberValue = document.getElementById('totalkamar').value;
            var result =parseInt(SecondNumberValue)+ parseInt(FirstNumberValue);
            document.getElementById('paket'). value= result;

             function suma(){
            var FirstNumberValue = document.getElementById('paket').value;
            var SecondNumberValue = document.getElementById('berat').value;
            var result =SecondNumberValue-FirstNumberValue;
            document.getElementById('kembalian'). value= result;
          
           }
            
            
         

    </script>
@stop