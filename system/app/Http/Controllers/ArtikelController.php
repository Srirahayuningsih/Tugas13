<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\ClientArtikel;
use App\Models\Kategori;


class ArtikelController extends Controller
{
	
	function index()
	{
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;
		return view('artikel.index', $data);
	}
	
	function create()
	{
		$user = request()->user();
		$data['penulis'] = $user;
		return view('artikel.create', $data);
	}
	
	function store()
	{
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->tanggal = request('tanggal');
		$artikel->isi = request('isi');
		$artikel->id_kategori = request('id_kategori');
		$artikel->save();

		return redirect('artikel/create')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('artikel.show', $data);
	}
	
	function edit(Artikel $artikel)
	{
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data);
		
	}
	
	function update(Artikel $artikel)
	{
		
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->tanggal = request('tanggal');
		$artikel->isi = request('isi');
		$artikel->id_kategori = request('id_kategori');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Artikel $artikel)
	{
		$artikel->delete();

		return redirect('admin/artikel')->with('danger', 'Data Berhasil di Hapus');
	}
	function filter(){
		$judul = request('judul');
		$penulis = request('penulis');
		$data['tanggal_min'] = $tanggal_min = request('tanggal_min');
		$data['tanggal_max'] = $tanggal_max = request('tanggal_max');
		// $data['list_artikel'] = Artikel::where('judul','like', "%$judul%")->get();
		//$data['list_artikel'] = Artikel::whereIn('stok', $stok)->get();
		$data['list_artikel'] = Artikel::whereBetween('tanggal', [$tanggal_min, $tanggal_max])->where('judul','like', "%$judul%")->get();
		$data['judul'] = $judul;
		$data['penulis'] = request('penulis');
		

		return view('admin/artikel/index', $data);	
	}
}