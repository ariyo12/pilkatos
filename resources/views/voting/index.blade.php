@extends('voting.master')
@section('judul','OSIS | SMK Wikrama 1 Jepara')
@section('konten')
<div class="mycontainer" style="overflow-x:hidden">
	<div class="row">
		<div class="col-md-12 text-center mb-4">
			<h2 style="color: black; font-family: 'Raleway',sans-serif;">Daftar Kandidat</h2>
		</div>
	</div>
	<div class="container">
	<div class="row">
		@foreach($kandidat as $x)
		<div class="col-md-4">
			<div class="card mx-auto mb-5" style="width: 16rem;">
				<img src="{{ asset('foto_kandidat/'.$x->foto)}}" class="card-img-top" alt="Foto" height="250">
				<div class="card-body text-center">
					<h5 class="card-title" style="font-family: 'Raleway',sans-serif; font-weight: bold;">{{ $x->nama}}</h5>
					<h6 class="card-title" style="font-family: 'Raleway',sans-serif;">Urut {{ $x->id}}</h6>
					<div class="row">
						<div class="col" style="font-family: 'Raleway',sans-serif;"><a href="{{ route('simpansuara',$x->id) }}" class="btn btn-primary mb-1" style="width:100%" onclick="return confirm('Yakin memilih {{ $x->nama}} ?');">Pilih</a></div>
					</div>
					<div class="row">
						<div class="col" style="font-family: 'Raleway',sans-serif;"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x->id}}">Lihat Detail Kandidat</a></div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalVisiMisi{{ $x->id }}" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true" style="font-family: 'Raleway',sans-serif;">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalVisiMisi{{ $x->id }}">{{ $x->nama }} <br><span><small>Urut {{ $x->id }}</small></span></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">Visi</div>
						</div>
						<div class="row">
							<div class="col">
								<?= $x->visi?>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col">Misi</div>
						</div>  
						<div class="row">
							<div class="col"> <?= $x->misi?> </div>
						</div>
						<!-- <hr>
						<div class="row">
							<div class="col">
								<iframe style="width: 100%;height: 315px" src="https://www.youtube-nocookie.com/embed/{{ $x->id_youtube }}?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div> -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		@endforeach
	</div>
</div>
</div>
<!-- Modal -->

@endsection