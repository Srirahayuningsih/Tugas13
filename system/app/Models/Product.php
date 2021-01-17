<?php 

namespace App\Models;

use Illuminate\Support\Str;

class Product extends Model{
	protected $table = 'product';

	
	protected $primaryKey = 'uuid';
	public $incrementing = false;

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	protected static function boot(){
		parent::boot();

		static::creating(function($item){
			$item->uuid = (string) Str::uuid();

		});
	}

} 