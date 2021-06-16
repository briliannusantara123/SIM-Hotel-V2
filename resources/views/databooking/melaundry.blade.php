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
                                        <h1>Melaundry Pakaian</h1>
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
                <a class="btn btn-warning" href="/transaksi"> Kembali</a>
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
  
    <form action="/databooking/{{$melaundry->id}}/laundry" method="POST">
    
        @csrf
        @method('POST')
   
         <div class="row">
            
                    
                    <input type="hidden" name="nama" value="{{$melaundry->nama}}" class="form-control" readonly="">
                
                    
                    <input type="hidden" name="telepon" value="{{$melaundry->telepon}}" class="form-control" readonly="">
                
                   
                    <input type="hidden" name="alamat" value="{{$melaundry->alamat}}" class="form-control" readonly="">
                
                    
                    <input type="hidden" name="namakamar" value="{{$melaundry->namakamar}}" class="form-control" readonly="">
                
                    
                    <input type="hidden" name="hargakamar" value="{{$melaundry->hargakamar}}" class="form-control" readonly="">
                
                    
                    <input type="hidden" name="jumlahkamar" value="{{$melaundry->jumlahkamar}}" class="form-control" readonly="">
               
                    <input type="hidden" name="tanggal_masuk" value="{{$melaundry->tanggal_masuk}}" class="form-control" readonly="">
             
                    <input type="hidden" name="tanggal_keluar" value="{{$melaundry->tanggal_keluar}}" class="form-control" readonly="">
               
                    <input type="hidden" name="total_kamar" value="{{$melaundry->total_kamar}}" class="form-control" readonly="">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Paket Laundry</label>
                    <select name="paketlaundry" class="form-control"  id="paket">
                        <option value disable>---Pilih Paket Laundry---</option>
                        @foreach($laundry as $laundry)
                        <option value="{{$laundry->harga}}" data-harga="{{$laundry->nama}}">{{$laundry->nama}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Jumlah Laundry</strong>
                    <input type="number" name="jumlahlaundry" class="form-control" id="berat" onkeyup="suma();">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Total Bayar</strong>
                    <input type="number" name="totallaundry"  class="form-control" readonly="" id="total">
                </div>
            </div>
           
            <div class="col-xs-11 col-sm-11 col-md-11 text-center">
              <button type="submit" class="btn btn-success">Melaundry</button>
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
    <script> 
            
            function suma(){
            var FirstNumberValue = document.getElementById('paket').value;
            var SecondNumberValue = document.getElementById('berat').value;
            var result = SecondNumberValue*FirstNumberValue ;
            document.getElementById('total'). value= result;
        }
    </script>
@stop