@extends('layouts.app')

@section('formulario')

  {!! Form::open(array('route' => 'editar.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
   {!! csrf_field() !!}

  @include('editar.formulario')
  {!! Form::close() !!}

@endsection
