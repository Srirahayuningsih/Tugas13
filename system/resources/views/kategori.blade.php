@extends ('template.base')

@section ('content')
<center><marquee bgcolor="CornflowerBlue" style="color:white;" direction="up" scrollamount="2" align="center" behavior="alternate" width="90%"><marquee direction="right"> New Product Collection </marquee></marquee></center>

<div class="card my-3">
	<div class="container">
		<h1>Halaman Kategori</h1>
	</div>

	<div class="card-body">
		<div class="container">
			<div class="col-12">
				<div class="row">
					
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-primary"> MEN </h5>
								<p class="card-text text-muted"> </p>
									<a href="{{ url ('public') }}" class="btn btn-primary">Lihat Lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="card-body">
		<div class="container">
			<div class="col-12">
				<div class="row">
					
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-primary"> LEDIES</h5>
								<p class="card-text text-muted"> </p>
									<a href="{{ url ('public') }}" class="btn btn-primary">Lihat Lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body">
		<div class="container">
			<div class="col-12">
				<div class="row">
					
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-primary"> KIDS</h5>
								<p class="card-text text-muted"> </p>
									<a href="{{ url ('public') }}" class="btn btn-primary">Lihat Lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection