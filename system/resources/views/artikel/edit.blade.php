@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('admin/artikel', $artikel->id)}}" method="post">	
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="judul" class="control-label">Judul Artikel</label>
							<input type="text" name="judul" id="judul" class="form-control" value="{{$artikel->judul}}">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="penulis" class="control-label">Penulis Artikel</label>
						      <input type="text" class="form-control" name="penulis" id="penulis" value="{{$artikel->penulis}}" readonly="">
						    </div>
						    <div class="col">
						    	<label for="tanggal" class="control-label">tanggal rilis</label>
						      <input type="text" class="form-control" name="tanggal" id="tanggal" value="{{$artikel->tanggal}}">
						    </div>
						</div>
						<div class="form-group mt-3">
						    <label for="exampleFormControlSelect1">Kategori Artikel</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
						      <option selected="" value="{{$artikel->kategori->id}}">{{$artikel->kategori->nama}}</option>
						      <option>-</option>
						      <option value="1">Artikel Sastra</option>
						      <option value="2">Artikel Programing</option>
						      <option value="3">Artikel Tanaman</option>
						      <option value="4">Artikel Otomotif</option>
						    </select>
						</div>
						<div class="form-group">
							<label for="isi" class="control-label">isi Artikel</label>
							<textarea class="form-control" name="isi" id="isi" rows="5" >{{$artikel->isi}}</textarea>
						</div>
						<button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection