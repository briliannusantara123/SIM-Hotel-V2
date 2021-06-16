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
            <h1>Data Pemesanan Kamar</h1>
          </div>

        </section>
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                
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
                @if( $message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @endif
                <div class="panel-body">
                  <table class="table table-hover" id="myTable">
                    <thead>
                      <tr>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Nama Kamar</th>
                            <th>Harga Kamar</th>
                            <th>Jumlah Kamar Pesan</th>
                            <th>Tanggal Checkin</th>
                            <th>Tanggal Checkout</th>
                            <th>Total Harga Kamar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($transaksi as $data)
                      <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->namakamar}}</td>
                        <td>Rp. {{number_format($data->hargakamar,0) }}</td>
                        <td>{{$data->jumlahkamar}}</td>
                        <td>{{ date('d F Y',strtotime($data->tanggal_masuk)) }}</td>
                        <td>{{ date('d F Y',strtotime($data->tanggal_keluar)) }}</td>
                        <td>Rp. {{number_format($data->total_kamar,0) }}</td>
                    
                        <td>
                    @if(($data->jumlahlaundry))
                        <a href="/transaksi/{{$data->id}}/checkout" class="btn btn-danger btn-sm ">Check-Out</a>
                        
                    @else
                        <a href="/transaksi/{{$data->id}}/checkout" class="btn btn-danger btn-sm ">Check-Out</a>
                        <a href="/transaksi/{{$data->id}}/melaundry" class="btn btn-info btn-sm ">Melaundry</a>
                    @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <!-- AKHIR TABLE -->
            </div>
        </div>
    </div>
    <!-- AKHIR CONTAINER -->

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
   
 
<script>
jQuery(document).ready(function(){
 
    jQuery('select').change(function(){
      let harga = jQuery(this).find(':selected').data('harga');
      
        jQuery('#berat').keyup(function(){
            let berat = jQuery('#berat').val()
            let paketlaundry = jQuery(this).find(':selected').data('paketlaundry');
            let cek =  parseInt(harga) * parseInt(berat) 
            let total =  parseInt(paketlaundry) + parseInt(total1)
            if (harga == "kosong") {
                total = ""
            }
 
            if (berat == "") {
                total = ""
            }
 
            console.log(total);
            if(!isNaN(total)){
                jQuery('#total').val(total)
            }
      })
  })
});
</script>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->

    <!-- MULAI MODAL KONFIRMASI DELETE-->

    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Transaksi maka</b></p>
                    <p>*data Transaksi tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
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
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Transaksi Baru"); //valuenya tambah Transaksi baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });

        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
       
function reloadpage()
{
location.reload()
}
</script>

    <!-- JAVASCRIPT -->
@stop