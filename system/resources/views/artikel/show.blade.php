@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Artikel
				</div>
				<div class="card-body">
					<div class="jumbotron">
					  <h1 class="display-5">{{$artikel->judul}}</h1><hr>
						Penulis : {{$artikel->seller->nama}}
					  <p class="lead"><strong class="text-dark">Tanggal Rilis : <b>{{$artikel->tanggal}}</b></strong></p>
					  <hr class="my-4">
					  <p>Isi artikel : <br>
					  	{!! nl2br($artikel->isi) !!}</p>
					  <a class="btn btn-success btn-sm" href="#" role="button">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection