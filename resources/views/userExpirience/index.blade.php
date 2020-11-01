@extends('layouts.mainLayout')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-text-box">
                <p class="carousel-text">HERZLICH WILLKOMMEN</p>
            </div>
            <img class="d-block w-100" src="{{URL::asset('images/slideshow/mainSlideImage.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('images/slideshow/slideImage2.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('images/slideshow/slideImage3.png')}}" alt="Third slide">
        </div>
    </div>
</div>

<div class="index-cards">
    <div class="card">
        <h1>Facility Managment</h1>
        <ul>
            <li>-Baureinigung</li>
            <li>-Spezialreinigung</li>
            <li>-Fassadenreinigung</li>
            <li>-Grundreinigung</li>
            <li>-Unterhaltsreinigung</li>
            <li>-Liegenschaftss betreuunge</li>
        </ul>
    </div>
    <div class="card">
        <h1>Brandschutz/<br>
            Wasserlöschanlagen</h1>
        <ul>
            <li>Wir können für Sie die komplettee</li>
            <li>Installation einer Sprinkleranlage
                <br>übernehmen.
            </li><br>
            <li>Unsere Referenzen sprechen für sich</li>
        </ul>

    </div>
    <div class="card">
        <h1>Belagsarbeiten<br>
            und Bodenbeläge</h1>
        <ul>

            <li>Heutzutage sind Bodenbeläge und von</li>
            <li>Platten nicht mehr Wegzudenke</li><br>
            <li>-Parkette</li>
            <li>-Linoleum </li>
            <li>-Keramikplatteen</li>
            <li>-Teppiche</li>
            <li>-Naturstein</li><br>
            <li>Wir beraten Sie</li>

        </ul>
    </div>

</div>
@endsection