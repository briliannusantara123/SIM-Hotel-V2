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
            <h1>Data Booking Kamar</h1>
          </div>

        </section>
          @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{$message}}</strong>
                        </div>
                      @endif
                  
                <div class="panel-body">
                  <table class="table table-hover" id="myTable">
                    <thead>
                      <tr>  
                            <th>Nama Pembooking</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>Jumlah Orang</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                            <th>Pembayaran Kamar</th>  
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                      @foreach($databooking as $data)
                      <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->namakamar}}</td>
                        <td>{{$data->jumlahkamar}}</td>
                        <td>{{$data->jumlah_orang}}</td>
                        <td>{{ date('d F Y',strtotime($data->tanggal)) }}</td>
                        <td>{{ date('d F Y',strtotime($data->tanggal_keluar)) }}</td>
                        <td>{{$data->total}}</td>
                    
                        <td><a href="/databooking/{{$data->id}}/checkin" class="btn btn-success btn-sm ">Check-in</a>
                 
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <!-- AKHIR TABLE -->
            </div>
        </div>
    </div>
    
    <!-- AKHIR MODAL -->

    <!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


    <!-- AKHIR LIBARARY JS -->

    <!-- JAVASCRIPT -->

<script>
function reloadpage()
{
location.reload()
}
</script>

    <!-- JAVASCRIPT -->
@stop