

@extends('layout.master')
@section('judul', 'Hasil')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Hasil Tes Kamu {{auth()->user()->name}}</h3>
									
								</div>
								@if($uji->keterangan == 'resiko tinggi')
								<div class="panel-body">
									<h3>Aktivitas Anda Berpotensi <strong> {{$uji->keterangan}}</strong> terkena  COVID-19</h3>
									<p>Dengan resiko kamu yang tinggi terhadap covid kamu bisa segera langsung tes ke rumah sakit agar 
									</p><p>kamu bisa kamu mengetahui apakah kamu terkena COVID-19 atau tidak.</p>
								</div>

							@endif
							@if($uji->keterangan == 'resiko sedang')
							<div class="panel-body">
									<h3>Aktivitas Anda Berpotensi <strong> {{$uji->keterangan}}</strong> terkena COVID-19</h3>
									<p>Dengan resiko kamu yang sedang, kamu dapat memperbaiki dan menjauhi semua perilaku 
									</p><p>kamu agar terhindar dari COVID-19.</p>
								</div>
							
							@endif
							@if($uji->keterangan == 'resiko rendah')
							<div class="panel-body">
									<h3>Aktivitas Anda Berpotensi <strong> {{$uji->keterangan}}</strong> terkena COVID-19</h3>
									<p>Dengan resiko kamu yang rendah itu sudah bagus kemungkinan 
									</p><p>kamu terkena COVID-19 kecil, tingkatkan yah.</p>
								</div>
							
							@endif
							@if($uji->keterangan == '')
							<div class="panel-body">
									<h3>Kamu belum melakukan pengetasan</h3>
									<p>kamu bisa klik tombol dibawah agar bisa untuk memulai tes.</p>
								</div>
							
							
								<form action="/uji/{{auth()->user()->id}}/pengisian">
								<button type="submit" class="btn btn-primary btn-block btn-lg">Tekan Untuk Memulai Tesnya</button>
								</form>
								@endif
							</div>

@stop






