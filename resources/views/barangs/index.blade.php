@extends('layouts.app')
@section('content')
    <div class = "panel panel-default">
        <div class = "panel-heading">
          <strong>List Barang</strong>
        </div>        
        @if($message != null || $message != '')
            <div class="label label-info">
                {!! Form::label($message) !!}
            </div>
        @endif
        <div class = "panel-body">            
            <div>            
                <a href="{{ route('barangs.create') }}" class="btn btn-info">Create New</a>
            </div>
            <div>
                <table border=1 class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                        <tr>
                            <td>{{$barang -> id}}</td>
                            <td>{{$barang -> nama_barang}}</td>
                            <td>{{$barang -> tanggal}}</td>
                            <td>{{$barang -> jumlah}}</td>
                            <td>{{$barang -> harga}}</td>
                            <td>{{$barang -> total}}</td>
                            <td>{{$barang -> kondisi}}</td>
                            <td>{{$barang -> keterangan}}</td>
                            <td>
                                <a href="{{ route('barangs.show', $barang->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-info">Edit</a>
                                {!! Form::open(array('class' => '', 'method' => 'DELETE', 'route' => array('barangs.destroy', $barang->id))) !!}
                                    {!! Form::submit('Delete', array('class' => 'btn btn-sm btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>            
        </div>
    </div>
@endsection