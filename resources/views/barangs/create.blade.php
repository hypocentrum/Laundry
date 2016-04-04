@extends('layouts.app')

@section('content')
    {!! Form::model(new App\Barang, ['route' => ['barangs.store'], 'class'=>'form-horizontal']) !!}
        @include('barangs/partial_editor', ['submit_text' => 'Create', 'editor_mode' => 'create'])        
    {!! Form::close() !!}
@endsection