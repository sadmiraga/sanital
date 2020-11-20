@extends('layouts.adminLayout')

@section('content')



<div class="jobsContainer">
    <div class="innerJobContainerJustOne">
        <h5 style="text-align:center;">Brandschutz/Wasserlöschanlagen</h5>
        {!! Form::open(['url'=>'/editBrandschutz', 'method'=> 'post' , 'enctype'=> 'multipart/form-data']) !!}
            <textarea name="description" class="form-control" id="exampleFormControlTextarea3" rows="7">{{$brandschutz->description}}</textarea>
            <br>
        {!! Form::submit('sparen',['class'=>'btn btn-success', 'id'=>'submitButton']) !!}
        {!! Form::close() !!}
    </div>
</div>



<div class="referenceForm">

    <h4 id="referenceHeader"> neue Brandschutz/Wasserlöschanlagen reference</h4>

    @if (count($errors) > 0 )
    <div id="erorrDiv" class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errorMessage">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(isset($categoryError))
        <div id="erorrDiv" class = "alert alert-danger">
            <ul>
               {{$categoryError}}
            </ul>
        </div>
    @endif


    {!! Form::open(['url'=>'/addReference', 'method'=> 'post' , 'enctype'=> 'multipart/form-data', 'class'=>'form-horizontal']) !!}
            @csrf
    {!!Form::text('referenceName','',['class'=>'form-control','placeholder'=>'Referenzname eingeben','id'=>'referenceNameInput'])!!}

    <input  id="referenceImage"  type="file" class="form-control" name="referenceImage">

    <input type="hidden" id="referenceCategory" name="referenceCategory" value="2">


    {!! Form::submit('hinzufügen',['class'=>'btn btn-success', 'id'=>'submitButton']) !!}
    {!! Form::close() !!}


</div>




<div class="content-categories-outter-wrap">
    <div class="content-categories-main" data-aos="fade-in" data-aos-duration="3000">
        <div class="categtories-content">
            <div>
                <p class="categtories-h1">Verweise</p>
            </div>
            <div class='container-fluid'>
                <div class='row'>
                    @foreach($references as $reference)

                    <div  data-aos="fade-right"
                        style="overflow: hidden;" class='col-md-3' id="categories-col" style="padding-right: 0%;">
                        <img class="categories-img" style="object-fit: cover;" height="200" width="500"
                            src="/images/referenceImages/{{$reference->referenceImage}}">
                        <div class="text-block">
                            <p>{{$reference->referenceName}}</p>
                        </div>

                        <div class="functions">
                            <div onclick="window.location.href='/editReference/{{$reference->id}}'" id="edit" class="functionButton"> bearbeiten </div>
                            <div onclick="window.location.href='/deleteReference/{{$reference->id}}'" id="delete" class="functionButton"> löschen </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<!-- pages -->
<div class="d-flex">
    <div class="mx-auto">
        {{$references->links()}}
    </div>
</div>


@endsection
