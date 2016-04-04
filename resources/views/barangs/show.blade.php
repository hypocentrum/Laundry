@extends('layouts.app')

@section('content')
    {!! Form::model($barang, ['method' => 'PATCH', 'route' => ['barangs.update', $barang->id], 'class'=>'form-horizontal']) !!}
        @include('barangs/partial_editor', ['submit_text' => 'Edit Barang', 'editor_mode' => 'show'])
    {!! Form::close() !!}
@endsection