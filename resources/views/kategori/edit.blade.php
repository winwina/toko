@extends('layout.template')
@section('content')
<h1>Update Kategori</h1>
{!! Form::model($kategori,['method' => 'PATCH','route'=>['kategori.update',$kategori->id_kategori]]) !!}
<div class="form-group">
    {!! Form::label('Kategori', 'Kategori:') !!}
    {!! Form::text('kategori',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop