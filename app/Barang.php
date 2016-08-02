<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id_barang';
    protected $fillable=[
        'nama_barang',
        'kategori',
        'satuan',
        'harga_beli',
        'stok',
        'keterangan'
    ];
    
    public function kategori() {
        return $this->belongsTo('Kategori','kategori');
    }
}
