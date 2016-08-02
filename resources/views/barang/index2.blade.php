@extends('layout/template')

@section('content')
 <h1>BookStore</h1>
 <a href="{{url('/barang/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Nama Barang</th>
         <th>Kategori</th>
         <th>Jumlah</th>
         <th>Satuan</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($barang as $barang)
         <tr>
             <td>{{ $barang->id_barang }}</td>
             <td>{{ $barang->nama_barang }}</td>
             <td>{{ $barang->kategori }}</td>
             <td>{{ $barang->stok }}</td>
             <td>{{ $barang->satuan }}</td>
             
             <td><a href="{{route('barang.edit',$barang->id_barang)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['barang.destroy', $barang->id_barang]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection