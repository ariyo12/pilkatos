@extends('dashboard.dashboard')
@section('judul_halaman','Voters')
@section('konten')
<?php $judul = 'Voters'; ?>
<div class="panel panel-headline">
	<div class="panel-heading">
		<div class="panel-title">E-Voting | Voters</div>
		<div class="panel-subtitle">Periode : 2023-2024</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
				<a href="{{ route('admin.voters.tambah') }}" class="btn btn-primary mb-5"><i class="fa fa-fw fa-user-plus"></i><span> Tambah Akun Voting</span></a>
				<a href="{{ route('admin.voters.hapus') }}" class="btn btn-danger mb-5"><i class="fa fa-fw fa-trash"></i><span> Hapus Akun Voting</span></a>
				<a href="{{ route('admin.voters.export_excel') }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
			</div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($pemilih as $data)
							<tr>
								<td width="10%">{{ $i++ }}</td>
								<td>{{ $data->username }}</td>
								<td>{{ $data->nama_pemilih }}</td>
								<td class="{{ ($data->status == 2 ) ? 'bg-danger' : 'bg-success' }}">{{ $data->nama }}</td>
							</tr>
							@endforeach  		 
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-12" style="margin-top: 25px">
				<h3>Daftar Yang Belum Memilih</h3>
				<div class="table-responsive">
					<table class="table table-bordered" id="unVote" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($unVote as $data)
							<tr>
								<td width="10%">{{ $i++ }}</td>
								<td>{{ $data->username }}</td>
								<td>{{ $data->nama_pemilih }}</td>
								<td class="{{ ($data->status == 2 ) ? 'bg-danger' : 'bg-success' }}">{{ $data->nama }}</td>
							</tr>
							@endforeach  		 
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-12" style="margin-top: 25px">
				<h3>Daftar Yang Sudah Memilih</h3>
				<div class="table-responsive">
					<table class="table table-bordered" id="inVote" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($inVote as $data)
							<tr>
								<td width="10%">{{ $i++ }}</td>
								<td>{{ $data->username }}</td>
								<td>{{ $data->nama_pemilih }}</td>
								<td class="{{ ($data->status == 2 ) ? 'bg-danger' : 'bg-success' }}">{{ $data->nama }}</td>
							</tr>
							@endforeach  		 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
  <script src="{{ asset('/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <script>
  	$(document).ready(function() {
  		$('#unVote').DataTable();
  		$('#inVote').DataTable();
  	});
  </script>
  <script src="{{ asset('/vendor/dataTables/datatables-demo.js')}}"></script>
@endsection