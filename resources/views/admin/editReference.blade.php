@extends('layouts.app')

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

    <select class="form-control" name="referenceCategory" id="referenceCategory">

        @if($reference->jobID == 1)
            <option selected value="1" > Facility Managment </option>
            <option value="2" > Brandschutz/Wasserlöschanlagen </option>
            <option value="3" > Belagsarbeiten und Bodenbeläge </option>
        @elseif($reference->jobID == 2)
            <option value="1" > Facility Managment </option>
            <option selected value="2" > Brandschutz/Wasserlöschanlagen </option>
            <option value="3" > Belagsarbeiten und Bodenbeläge </option>
        @elseif($reference->jobID == 3)
            <option value="1" > Facility Managment </option>
            <option value="2" > Brandschutz/Wasserlöschanlagen </option>
            <option selected value="3" > Belagsarbeiten und Bodenbeläge </option>
        @endif




    </select>

    {!! Form::submit('sparen',['class'=>'btn btn-success', 'id'=>'submitButton']) !!}
    {!! Form::close() !!}


</div>












@endsection
