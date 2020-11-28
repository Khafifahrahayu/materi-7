<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;

class KategoriController extends Controller {
	
	function Index(){
	$user = request()->user();
	$data['list_kategori'] = $user->kategori;
	return view ('kategori.index', $data);

	}

	function create(){
		return view ('Kategori.create');

	}

	function store(){
		$kategori = new kategori;
		$kategori->nama = request('nama');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('kategori')->with('success', 'Data Berhasil Ditambahkan');

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
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('kategori')->with('warning', 'Data Berhasil Diedit');
		
	}

	function destroy(kategori $kategori){
		$kategori->delete();


		return redirect('kategori')->with('danger', 'Data Berhasil Dihapus');
	}	


 }