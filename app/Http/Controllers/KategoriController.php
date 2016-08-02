<?php

namespace App\Http\Controllers;


use App\Kategori;

use Request;
use App\Http\Requests;

class KategoriController extends Controller
{
    public function index()
   {
       $kategori= Kategori::all();
      return view('kategori.index', compact('kategori'));
   }
   
   
   
   public function create()
   {
      return view('kategori.tambah');
   }
   
    public function store()
   {
        $kategori=Request::all();
        Kategori::create($kategori);
        return redirect('kategori');
   }
   public function show($id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
        $kategori=Kategori::find($id);
        return view('kategori.edit',compact('kategori'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
       $kategoriUpdate = Request::all();
        $kategori = Kategori::find($id);
        $kategori->update($kategoriUpdate);
        return redirect('kategori');
    }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      Kategori::find($id)->delete();
      return redirect('kategori');
   }
}
