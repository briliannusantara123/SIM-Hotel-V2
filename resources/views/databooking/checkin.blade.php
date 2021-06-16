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
                                       <h1>Check-In</h1>
                                    </div>
                                </section>
                                @if( $message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @endif
                                <div class="panel-body">
                                	<br>
                                	<br>
            <div class="pull-right">
                <a class="btn btn-warning" href="/databooking"> Kembali</a>
            </div>
        </div>
    </div>
   <br>
   <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="/databooking/{{$checkin->id}}/update" method="POST">
    
        @csrf
        @method('POST')
   
         <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" value="{{$checkin->nama}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>No Telepon</strong>
                    <input type="text" name="telepon" value="{{$checkin->telepon}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <input type="text" name="alamat" value="{{$checkin->alamat}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Nama Kamar</strong>
                    <input type="text" name="namakamar" value="{{$checkin->namakamar}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Harga Kamar</strong>
                    <input type="text" name="hargakamar" value="{{$checkin->hargakamar}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Jumlah Kamar</strong>
                    <input type="text" name="jumlahkamar" value="{{$checkin->jumlahkamar}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Jumlah Hari</strong>
                    <input type="text" name="jumlahhari" value="{{$checkin->jumlahhari}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Tanggal Checkin</strong>
                    <input type="date" name="tanggal" value="{{$checkin->tanggal}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Tanggal Checkout</strong>
                    <input type="date" name="tanggal_keluar" value="{{$checkin->tanggal_keluar}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Total Bayar</strong>
                    <input type="text" name="total" value="{{$checkin->total}}" class="form-control" readonly="">
                </div>
            </div>
           
            <div class="col-xs-11 col-sm-11 col-md-11 text-center">
              <button type="submit" class="btn btn-success">Check-In</button>
            </div>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script type="text/css" src="{{ URL::asset('js/jquery.css') }}"></script>
 
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>
    </form>
@stop