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
										<h2>Daftar Paket Laundry</h2>
									</div>
								</section>
								@if( $message = Session::get('success'))
									<div class="alert alert-success">
										<strong>{{$message}}</strong>
									</div>
								@endif
								<div class="panel-body">
									<a href="/transaksi" class="btn btn-danger">Kembali</a>
									
									<table class="table table-hover" id="myTablesa">
										<thead>
										<tr>
											<th>Nama Paket</th>
											<th>Rincian</th>
											<th>Lama Pengerjaan</th>
											<th>Harga Paket</th>
										</tr>
										</thead>
									
										<tbody>
											<tr>
												<td>Cuci Kumplit Reguler</td>
												<td>Baju, Celana, Topi,Sepatu</td>
												<td>3 Hari</td>
												<td>Rp 12.000</td>
											</tr>
											<tr>
												<td>Cuci Kumplit Express</td>
												<td>Baju, Celana, Topi,Sepatu</td>
												<td>2 Hari</td>
												<td>Rp 16.000</td>
											</tr>
											<tr>
												<td>Hemat</td>
												<td>Baju, Celana</td>
												<td>2 Hari</td>
												<td>Rp 8.000</td>
											</tr>
											<tr>
												<td>Super Hemat</td>
												<td>Baju Saja</td>
												<td>2 Hari</td>
												<td>Rp 4000</td>
											</tr>
											
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