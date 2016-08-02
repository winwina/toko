@extends('layout.template')
@section('content')
    <h1>Tambah Kategori</h1>
    {!! Form::open(['url' => 'tambah_kat']) !!}
    <div class="form-group">
        {!! Form::label('Nama Kategori', 'Nama Kategori:') !!}
        {!! Form::text('kategori',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
