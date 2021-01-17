@extends ('template.base')

@section ('content')

<div class="card my-3">
	<div class="container">
		<h1>Halaman Produk</h1>
	</div>

	<div class="card-body">
		<div class="container">
			<div class="col-12">
				<div class="row row-cols-1 row-cols-md-3">
					
					<div class="col mb-4">
						<div class="card h-100">
							<img src="{{url('public/_src/distribution/img/product1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">White Blouse Armani</h5>
								<p class="text-danger"> Rp.124.000</p>
								<button class="btn btn-primary">Masuk Keranjang</button>
							</div>
						</div>
					</div>

					<div class="col mb-4">
						<div class="card h-100">
							<img src="{{url('public/_src/distribution/img/product2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">White Blouse</h5>
								<p class="text-danger"> Rp.200.000</p>
								<button class="btn btn-primary">Masuk Keranjang</button>
							</div>
						</div>
					</div>

					<div class="col mb-4">
						<div class="card h-100">
							<img src="{{url('public/_src/distribution/img/banner.jpg')}}" class="img-thumbnail card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">dress</h5>
								<p class="text-danger"> Rp.150.000</p>
								<button class="btn btn-primary">Masuk Keranjang</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection