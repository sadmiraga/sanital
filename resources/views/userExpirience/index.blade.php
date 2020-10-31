@extends('layouts.mainLayout')

@section('content')
<div class="overlay">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{URL::asset('images/slideshow/mainSlideImage.png')}}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{URL::asset('images/slideshow/slideImage2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{URL::asset('images/slideshow/slideImage3.png')}}" alt="Third slide">
            </div>
        </div>
    </div>



</div>
@endsection