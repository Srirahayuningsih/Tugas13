<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller {

	function index(){
		$user = request()->user();
		$data['list_kategori'] = kategori::all();
		return view ('kategori.index', $data);

	}

	function create(){
		return view ('kategori.create');

	}

	function store(){
		$kategori = new kategori;
		$kategori->nama = request('nama');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');

	}


	function show(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}

	function edit(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
		
	}

	
	function update(kategori $kategori){
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('admin/kategori')->with('warning', 'Data Berhasil Diedit');
		
	}

	function destroy(kategori $kategori){
		$kategori->delete();


		return redirect('admin/kategori')->with('danger', 'Data Berhasil Dihapus');
	}


 }