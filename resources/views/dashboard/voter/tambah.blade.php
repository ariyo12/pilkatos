@extends('dashboard.dashboard')
@section('judul_halaman','Voters')
@section('konten')
<?php $judul = 'Voters'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">Tambah Akun Voting Pilketos</div>
			<div class="panel-subtitle">Periode : 2023-2024</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<a href="/admin/voters" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row" style="margin-top:15px;margin-bottom:18px;">
				<div class="col-md-12">
				<form method="post" action="{{ route('admin.voters.store') }}">
					{{ csrf_field() }}
					<label for="username">Username</label>
						<input type="text" id="username" name="username" class="form-control">
					<label for="tanggal_lahir" style="margin-top: 20px">Tanggal Lahir</label>
						<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
					<label for="nama_pemilih" style="margin-top: 20px">Nama Pemilih</label>
						<input type="text" id="nama_pemilih" name="nama_pemilih" class="form-control">
					
					<button class="btn btn-primary" style="margin-top:10px;float:right;">Tambah</button>

					<!-- <div class="input-group">
					<input class="form-control" type="text" name="jumlah" placeholder="Masukan jumlah voters">
					<span class="input-group-btn"><button class="btn btn-primary" type="submit">Tambahkan</button></span> -->
				</form>
				</div>
			</div>
		</div>
	</div>
@endsection