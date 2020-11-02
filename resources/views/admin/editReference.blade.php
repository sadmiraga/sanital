@extends('layouts.mainLayout')

@section('content')

<div class="referenceForm">

    <h4 id="referenceHeader"> Referenz bearbeiten </h4>

    @if (count($errors) > 0)
    <div id="erorrDiv" class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errorMessage">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {!! Form::open(['url'=>'/editReferenceExe', 'method'=> 'post' , 'enctype'=> 'multipart/form-data', 'class'=>'form-horizontal']) !!}
            @csrf
    {!!Form::text('referenceName',$reference->referenceName,['class'=>'form-control','placeholder'=>'Referenzname eingeben','id'=>'referenceNameInput'])!!}

    <input type="hidden" id="referenceID" name="referenceID" value="{{$reference->id}}">

    <input  id="referenceImage"  type="file" class="form-control" name="referenceImage">

    <input type="hidden" id="custId" name="referenceCategory" value="{{$reference->jobID}}">



    {!! Form::submit('sparen',['class'=>'btn btn-success', 'id'=>'submitButton']) !!}
    {!! Form::close() !!}


</div>












@endsection
