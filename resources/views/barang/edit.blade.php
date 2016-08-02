@extends('layout.template')
@section('content')
    <h1>Update Book</h1>
    {!! Form::model($barang,['method' => 'PATCH','route'=>['barang.update',$barang->id_barang]]) !!}
     <div class="form-group">
        {!! Form::label('Nama Barang', 'Nama Barang:') !!}
        {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Kategori', 'Kategori:') !!}
        {!! Form::select('kategori', array('1' => 'Alat Tulis', '2' => 'Alat Olahraga', '3' => 'Alat Pramuka', '4' => 'Kitab', '5' => 'Quran')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Satuan', 'Satuan:') !!}
        {!! Form::select('satuan', array('1' => 'pcs', '2' => 'lusin', '3' => 'kodi', '4' => 'pak', '5' => 'rim', '6' => 'gross'))  !!}
    </div>
    <div class="form-group">
        {!! Form::label('Jumlah', 'Jumlah:') !!}
        {!! Form::text('stok',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Harga Beli', 'Harga Beli:') !!}
        {!! Form::text('harga_beli',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Keterangan', 'Keterangan:') !!}
        {!! Form::text('keterangan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop