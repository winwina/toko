<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = array('id_kategori', 'kategori');
    
    public function barang() {
		return $this->hasMany('Barang', 'kategori');
	}
}
