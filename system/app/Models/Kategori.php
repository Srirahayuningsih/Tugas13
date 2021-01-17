<?php 

namespace App\Models;

use App\Models\Produk;

class Kategori extends Model{
	protected $table = 'kategori';

	 function detail(){
    	return $this->hasone(Kategori:: class, 'id_user');

    }

    function produk(){
    	return $this->hasMany(Produk:: class, 'id_user');
    }

}