@extends('layouts.app')

@section('content')
  @if (session('erro'))
    <div class="alert alert-danger">
      {{ session('erro') }}
    </div>
  @endif
   {!! Form::open(array('route' => 'editar.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1', 'enctype'=>'multipart/form-data')) !!}
   {!! csrf_field() !!}

     @include('editar.formulario')

   {!! Form::close() !!}

@endsection
