@extends('layout.template')
@section('content')
    <h1>Create Book</h1>
    {!! Form::open(['url' => 'tambah']) !!}
    <div class="form-group">
        {!! Form::label('Nama Barang', 'Nama Barang:') !!}
        {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('Kode Barang', 'Kode Barang:') !!}
        {!! Form::text('kode_barang',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('Kategori', 'Kategori:') !!}
        {!! Form::select('kategori', array('1' => 'Alat Tulis', '3' => 'Alat Olahraga', '2' => 'Alat Pramuka', '4' => 'Kitab', '5' => 'Quran')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Satuan', 'Satuan:') !!}
        {!! Form::select('satuan', array('1' => 'pcs', '2' => 'lusin', '3' => 'kodi', '5' => 'pak', '6' => 'rim', '7' => 'gross'))  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop