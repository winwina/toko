@extends('layout/template')

@section('content')
 <h1>BookStore</h1>
 <a href="{{url('/kategori/create')}}" class="btn btn-success">Tambah Kategori</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Nama Kategori</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
@foreach ($kategori as $kategori)
         <tr>
             <td>{{ $kategori->id_kategori }}</td>
             <td>{{ $kategori->kategori }}</td>
             
             <td><a href="{{route('kategori.edit',$kategori->id_kategori)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['kategori.destroy', $kategori->id_kategori]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection