<?php 

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;

class Produk extends Model{
	protected $table = 'produk';
	
    //Date Mutator
	//protected $dates = ['created_at'];

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'harga' => 'decimal:2'
		
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function handleUploadFoto(){
		$this->handleDelete();
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			//$this->id = 2001;
			//dd(request()->all());
			$randomStr = Str::random(5);
			$filename = $this->uuid."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();
			//dd($filename);
		}

	}

	function handleDelete(){
		$foto = $this->foto;
		if ($foto){
		$path = public_path($foto);
		//dd($path, file_exists($path));
		if(file_exists($path)){
			unlink($path);
		}
		return true;
		//dd($path);

	}

}
} 