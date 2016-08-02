<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use Request;
use DB;
use App\Http\Requests;

class BarangController extends Controller {

    public function index() {
        
       $barang = NULL;
       $message = 'succes';
        return view('barang.index', compact('barang','message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('barang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $barang = Request::all();
        Barang::create($barang);
        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $barangUpdate = Request::all();
        $barang = Barang::find($id);
        $barang->update($barangUpdate);
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Barang::find($id)->delete();
        return redirect('barang');
    }

    public function search() {
        $search = Request::get('cari');
        $barang = DB::table('barang')
        ->join('kategori', 'barang.kategori', '=', 'kategori.id_kategori')
        ->join('satuan', 'barang.satuan', '=', 'satuan.id_satuan')
        ->select('barang.id_barang', 'barang.nama_barang', 'barang.kategori', 'barang.satuan', 'barang.kode_barang', 'kategori.kategori', 'satuan.satuan')
        ->where('nama_barang', 'like', '%'.$search.'%')
        ->orderBy('nama_barang')
        ->get();
        
        if($barang != NULL){
            $message = 'succes';
            return view('barang.index', compact('barang', 'message'));
        }else{
        $message = 'failed';
        return view('barang.index', compact('barang','message'));
            
        }
    }

}
