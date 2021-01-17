@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel')}}" method="post">	
						@csrf
						<div class="form-group">
							<label for="brand" class="control-label">Judul Artikel</label>
							<input type="text" name="judul" id="judul" class="form-control">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="harga" class="control-label">Penulis Artikel</label>
						      <input type="text" class="form-control" name="penulis" id="penulis" value="{{$penulis->nama}}" readonly="">
						    </div>
						    <div class="col">
						    	<label for="stok" class="control-label">Tanggal Rilis</label>
						      <input type="date" class="form-control" name="tanggal" id="tanggal">
						    </div>
						</div>
						<div class="form-group mt-3">
						    <label for="exampleFormControlSelect1">Kategori Artikel</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
						      <option selected="" disabled="">Pilih Kategori</option>
						      <option value="1">Artikel Sastra</option>
						      <option value="2">Artikel Programing</option>
						      <option value="3">Artikel Tanaman</option>
						      <option value="4">Artikel Otomotif</option>
						    </select>
						</div>
						<div class="form-group">
							<label for="deskripsi" class="control-label">Isi Artikel</label>
							<textarea class="form-control" name="isi" id="isi" rows="5"></textarea>
						</div>
						<button class="btn btn-dark btn-sm"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection