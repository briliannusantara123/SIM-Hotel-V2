@extends('layouts.master');
@section('content');
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <section class="section">
                  <div class="section-header">
                    <h2>Laporan</h2>
                  </div>
                </section>
                @if( $message = Session::get('success'))
                  <div class="alert alert-success">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                <div class="col-md-12">
                <div class="panel-body">
                  
                  <table class="table table-hover" id="myTable">
                    <strong>Data Kamar</strong>
                    <thead>
                    <tr>
                      <th>Kamar</th>
                      <th>Jumlah Kamar</th>
                      <th>Harga Kamar</th>
                      <th>Fasilitas Kamar</th>
                    </tr>
                    </thead>
                  
                    <tbody>
                      @foreach( $kamar as $kamar)
                      <tr>
                        <td>{{$kamar->namakamar}}</td>
                        <td>{{$kamar->jumlahkamar}}</td>
                        <td>{{$kamar->hargakamar}}</td>
                        <td>{{$kamar->id_fasilitaskamar}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  
                  </table>
                  
                  <table class="table table-hover" id="myTablea">
                    <strong>Data Booking Kamar</strong>
                    <thead>
                    <tr>
                      <th>Nama Kamar</th>
                      <th>Jumlah Orang</th>
                      <th>Atas Nama</th>
                      
                    </tr>
                    </thead>
                  
                    <tbody>
                      @foreach( $booking as $booking)
                      <tr>
                        <td>{{$booking->namakamar}}</td>
                        <td>{{$booking->jumlah_orang}}</td>
                        <td>{{$booking->nama}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  
                  </table>
                  <table class="table table-hover" id="myTableb">
                    <strong>Data Paket Laundry</strong>
                    <thead>
                    <tr>
                      <th>Paket Laundry</th>
                      <th>Harga Paket</th>
                    </tr>
                    </thead>
                  
                    <tbody>
                      @foreach( $laundry as $laundry)
                      <tr>
                        <td>{{$laundry->nama}}</td>
                        <td>{{$laundry->harga}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  
                  </table>
                  <table class="table table-hover" id="myTablec">
                    <strong>Data transaksi</strong>
                    <thead>
                    <tr>
                      <th>Pesan Kamar</th>
                      <th>Pesan Laundry</th>
                      <th>Harga Kamar</th>
                      <th>Harga Laundry</th>
                    </tr>
                    </thead>
                  
                    <tbody>
                      @foreach( $transaksi as $transaksi)
                      <tr>
                        <td>{{$transaksi->jumlahkamar}}</td>
                        <td>{{$transaksi->jumlahlaundry}}</td>
                        <td>{{$transaksi->total_kamar}}</td>
                        <td>{{$transaksi->total_laundry}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  



  
@stop
