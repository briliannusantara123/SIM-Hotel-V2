<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.text{
			text-align: center;
			margin-top: 20px;
		},
		
	</style>
</head>
<body>
	<div class="text">
<p>BUKTI BOOKING KAMAR <br> HOTEL WIKRAMA BOGOR <br> ________________________________________ <br></p>

</div>
<div class="isi">
	<ul>
		<ol style="margin-left: 150px;">Nama Pembooking   : {{$print->nama}}</ol>
		<ol style="margin-left: 150px;">Alamat Pembooking : {{$print->alamat}}</ol>
		<ol style="margin-left: 150px;">Nama Kamar        : {{$print->namakamar}}</ol>
		<ol style="margin-left: 150px;">Tipe Kamar        : {{$print->id_tipekamar}}</ol>
		<ol style="margin-left: 150px;">Jumlah Kamar      : {{$print->jumlahkamar}}</ol>
		<ol style="margin-left: 150px;">Jumlah Hari       : {{$print->jumlahhari}}</ol>
		<ol style="margin-left: 150px;">Jumlah Orang      : {{$print->jumlahorang}}</ol>
		<ol style="margin-left: 150px;">Check-In          : {{$print->tanggal}}</ol>
		<ol style="margin-left: 150px;">Check-Out         : {{$print->tanggal_keluar}}</ol>
	</ul>
</div>
<div class="text">
<p> ________________________________________ <br><p>Perlihatkan Bukti Booking ini ke petugas <br> untuk pengambilan kunci,Terimakasih.</p></p>

</div>

<script>
		window.print();
	</script>
</body>
</html>