@extends('layout/template')

@section('content')

 <h1>Daftar Barang</h1>
 <hr>
   {!! Form::open(['url' => 'search', 'method' => 'GET', 'role' => 'search']) !!}
   {!! Form::label('Cari', 'Cari Barang:') !!}
   {!! Form::text('cari',null,['class'=>'form-control']) !!}</br>
    {!! Form::submit('Cari', ['class' => 'btn btn-danger']) !!}
   {!! Form::close() !!}
   </br>
   
   @if(($barang != NULL))
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>No</th>
         <th>Nama Barang</th>
         <th>Kode Barang</th>
         <th>Kategori</th>
         <th>Jumlah</th>
         <th>Satuan</th>
         <th colspan="3">Actions</th>
     </tr>
      <?php   $i = 1; ?>
     </thead>
     <tbody>
     
     @foreach ($barang as $barang)
         <tr>
             <td><?php echo $i; ?></td>
             <td>{{ $barang->nama_barang }}</td>
             <td>{{ $barang->kode_barang }}</td>
             <td>{{ $barang->kategori }}</td>
             <td>{{ $barang->satuan }}</td>
             
             <td><a href="{{route('barang.edit',$barang->id_barang)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['barang.destroy', $barang->id_barang]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     <?php $i++; ?>
     @endforeach
     @elseif ($message == 'failed')
     <h3>Barang yang dicari tidak ada</h3>
     <a href="{{url('/barang/create')}}" class="btn btn-success">Tambah</a>
     @endif
     </tbody>

 </table>
@endsection