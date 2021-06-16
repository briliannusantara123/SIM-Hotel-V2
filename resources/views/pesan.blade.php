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
            <h1>Kamar yang Sudah di Booking</h1>
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
                          
                           <a href="/" class="btn btn-danger">Kembali</a>
                <br>

                      </div>
                    </div>
                    <br>
                   
                </div>
 
                <div class="card-body">
                    <div class="row">
                    @foreach($databooking as $k)
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary" style="margin-top: 35px;margin-left: 30px;">
                  <i class="fas fa-home" style="font-size: 70px;margin-top: 5px;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                    <p>Nama Kamar : {{$k->namakamar}}</p>
                    <p>Check-in   : {{$k->tanggal}}</p>
                    <p style="margin-left: 80px;">Check-out  : {{$k->tanggal_keluar}}</p>
                    <a href="pesan/{{$k->id}}/print" class="btn btn-primary" style="margin-left: 350px; margin-bottom: 30px;">Print Bukti Booking</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            
                    
            @stop