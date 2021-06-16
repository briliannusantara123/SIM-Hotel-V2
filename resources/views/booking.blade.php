@extends('layouts.master')
@section('content')

	<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                  <section class="section">
          <div class="section-header">
            <h1>Boking</h1>
          </div>

        </section>
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                        @if($message = Session::get('warning'))
                        <div class="alert alert-warning">
                            <strong>{{$message}}</strong>
                        </div>
                      @endif
                          <a href=""value="Refresh Page" onClick="document.location.reload(true)" class="btn btn-warning">Reload</a>
                           <a href="/" class="btn btn-danger">Kembali</a>
                <br>

                          @if($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      </div>
                    </div>
                    <br>
                   
                </div>
 
                <div class="card-body">
                    <form method="POST" action="/booking/stores" enctype="multipart/form-data">
                        @csrf

                        <div class= "row">
                  <h2 class="alert alert-primary text-center col-12">{{$kamar->namakamar}}</h2>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <br>
                                 <img src = "{{asset('/'.$kamar->image)}}" alt = "room image" style="display: block;margin-left: auto;margin-right: auto;">
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                              
                                <br>
                                 <input name="namakamar"type="hidden" class="form-control" aria-describedby="emailHelp" id="tipekamar" value="{{$kamar->namakamar}}" readonly="">
                              </div>
                        </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Tipe Kamar</h5>
                                <br>
                                 <input name="id_tipekamar"type="text" class="form-control" aria-describedby="emailHelp" id="tipekamar" value="{{$kamar->id_tipekamar}}" readonly="">
                              </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Fasilitas Kamar</h5>
                                <br>
                                 <input name="fasilitas"type="text" class="form-control" aria-describedby="emailHelp" id="Fasilitas" value="{{$kamar->id_fasilitaskamar}}" readonly="">
                              </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Harga Kamar</h5>
                                <br>
                                 <input name="hargakamar"type="text" class="form-control" aria-describedby="emailHelp" id="paket" value="{{$kamar->hargakamar}}" readonly="">
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Deskripsi</h5>
                                <br>
                                 <textarea name="deskripsi" class="form-control col-12" readonly="">{{$kamar->deskripsi}}</textarea>
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Nama Pemboking</h5>
                                <br>
                                 <input name="nama"type="text" class="form-control" aria-describedby="emailHelp" id="phone" value="{{auth()->user()->name}}" readonly="">
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Email Pemboking</h5>
                                <br>
                                 <input name="email"type="text" class="form-control" aria-describedby="emailHelp" id="phone" value="{{auth()->user()->email}}" readonly="">
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Nomer Telepon</h5>
                                <br>
                                 <input name="telepon"type="number" class="form-control" aria-describedby="emailHelp" id="telepon">
                              </div>
                        </div><div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Alamat</h5>
                                <br>
                                 <textarea name="alamat" class="form-control"></textarea>
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Jumlah Hari</h5>
                                <br>
                                 <input name="jumlahhari"type="number" class="form-control" aria-describedby="emailHelp" id="berat" onkeyup="suma();" >
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Jumlah Kamar</h5>
                                <br>
                                 <input name="jumlahkamar"type="number" class="form-control" aria-describedby="emailHelp" id="kamar" onkeyup="hitung();" placeholder="Sisa Kamar Yang Tersedia {{$kamar->jumlahkamar}}">
                              </div>
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Jumlah Orang</h5>
                                <br>
                                 <input name="jumlah_orang"type="number" class="form-control" aria-describedby="emailHelp" id="jumlah_orang">
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Tanggal Checkin</h5>
                                <br>
                                 <input name="tanggal"type="date" class="form-control" aria-describedby="emailHelp" id="jumlah" >
                              </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5>Tanggal Checkout</h5>
                                <br>
                                 <input name="tanggal_keluar"type="date" class="form-control" aria-describedby="emailHelp" >
                              </div>
                        </div>
                         <input name="total" type="hidden" class="form-control" aria-describedby="emailHelp" id="test" readonly="">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                               <h5 style="color: red">*</h5><h5>Rincian Harga</h5>
                                <br>
                                 <p>Rp</p><input name="total" type="text" class="form-control" aria-describedby="emailHelp" id="total" readonly="">
                              </div>
                        </div>

                        <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                              <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                              <div class="card-header">
                                <h3>Bayar Saat Check-in</h3>
                              </div>
                              <div class="card-body">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                          <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                          </div>
                          <div class="card-wrap">
                            <div class="card-header">
                              <h3>Booking Cepat </h3>
                            </div>
                            <div class="card-body">
                             
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary col-12">Pesan Sekarang</button>
                        </div>

                        </div>
 
                    </form>
                     <script> 
            
            function suma(){
            var FirstNumberValue = document.getElementById('paket').value;
            var SecondNumberValue = document.getElementById('berat').value;
            var result =SecondNumberValue*FirstNumberValue ;
            document.getElementById('test'). value= result;
        }

        function hitung(){
            var FirstNumberValue = document.getElementById('test').value;
            var SecondNumberValue = document.getElementById('kamar').value;
            var result =SecondNumberValue*FirstNumberValue ;
            document.getElementById('total'). value= result;
        }

      </script>
            @stop