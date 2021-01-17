<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\User;
use App\Models\ClientArtikel;
use App\Models\Produk;


/**
 * 
 */
class ClientArtikelController extends Controller
{
	
	function index(){
		$data['list_user'] = User::withCount('produk')->get();
		return view ('user.index', $data);

	}
	
	function create(Artikel $artikel)
	{
		
		$data['artikel'] = $artikel;
		$data['list_komentar'] = $artikel->komentar;
		return view('user/baca', $data);
	}
	
	function store(Artikel $artikel)
	{
		
		$komentar = new ClientArtikel;
		$komentar->id_artikel = $artikel->id;
		$komentar->nama = request('nama');
		$komentar->email = request('email');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('/')->with('success', 'Berhasil menambahkan komentar');
	}
	
	function show(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('user/detail', $data);
	}
	
	function edit(ClientArtikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('user/edit', $data);
		
	}
	
	function update(ClientArtikel $artikel)
	{
		$artikel->nama = request('nama');
		$artikel->harga = request('harga');
		$artikel->jumlah = request('jumlah');
		$artikel->save();

		return redirect('checkout')->with('success', 'Barang Berhasil di Ubah pada Keranjang');
	}
	
	function destroy(ClientArtikel $artikel)
	{
		$artikel->delete();

		return redirect('checkout')->with('danger', 'Barang Berhasil di Hapus dari Keranjang');
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