<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listKategoriArtikel=kategori_artikel::all(); //select * from kategori_artikel

    	//blade
    	return view('kategori_artikel.index',compact('listKategoriArtikel'));
    	//return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	$KategoriArtikel=kategori_artikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit 1
    	$KategoriArtikel=kategori_artikel::find($id);

    	return view('kategori_artikel.show', compact('KategoriArtikel'));
    }
    public function create(){
    	return view('kategori_artikel.create');
    }
    public function store(Request $request){
    	$input= $request->all();

    	kategori_artikel::create($input);

    	//dd($input);
    	return redirect(route('kategori_artikel.index'));
    }
}
