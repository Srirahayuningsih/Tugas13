<?php 

namespace App\Models;

use App\Models\ClientArtikel;
use App\Models\User;
use App\Models\Kategori;
use App\Models\artikel;


class Artikel extends Model
{
	protected $table = 'artikel';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

		function komentar(){
    	return $this->hasMany(ClientArtikel::class, 'id_artikel');
    }
    
}