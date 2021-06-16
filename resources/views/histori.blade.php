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
										<h2>Histori Pemesanan Kamar</h2>
									</div>
								</section>
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
											<th>Telepon</th>
											<th>Alamat</th>
											<th>Tanggal Masuk</th>
											<th>Tanggal Keluar</th>
											<th>Harga Laundry</th>
											<th>Total Harga</th>
											<th>Kamar</th>
										</tr>
										</thead>
									
										<tbody>
											@foreach( $histori as $h )
											<tr>
												<td>{{$h->nama}}</td>
												<td>{{$h->telepon}}</td>
												<td>{{$h->alamat}}</td>
												<td>{{ date('d F Y',strtotime($h->tanggal_masuk)) }}</td>
												<td>{{ date('d F Y',strtotime($h->tanggal_keluar)) }}</td>
												<td>{{$h->hargalaundry}}</td>
												<td>Rp. {{number_format($h->total_kamar,0) }}</td>
												<td>{{$h->namakamar}}</td>
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
	</div>
@stop