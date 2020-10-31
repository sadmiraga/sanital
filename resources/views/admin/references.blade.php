@extends('layouts.app')

@section('content')

<h4> neue Referenz hinzufügen </h4>


@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif


{!! Form::open(['url'=>'/addReference', 'method'=> 'post' , 'enctype'=> 'multipart/form-data', 'class'=>'form-horizontal']) !!}
        @csrf

{!!Form::text('referenceName','',['class'=>'form-control','placeholder'=>'input reference name'])!!}

<input  id="referenceImage"  type="file" class="form-control" name="referenceImage">

{!! Form::submit('hinzufügen',['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

@endsection
