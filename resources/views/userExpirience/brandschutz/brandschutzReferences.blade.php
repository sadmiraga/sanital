@extends('layouts.brandschutzLayout')

@section('content')
<div class="facility-hero">
    <img src="/images/crveno.png" alt="img">
    </div>
    <div class="hero-text-box-facility">
        <h1>Brandschutz/Wasserlöschanlagent</h1>
    </div>
    <div class="facility-content">
        <div class="facility-h">
            <h1>Die Firma Sanical AG</h1>
            <h4>Wir haben schon viele Anlagen montiert und sind daher in Partnerschafts mit den verifizz ierten Firmen
                erfahren, die Anlage von Tank bis Ausgang(Sprinkler) zu montieren</h4>

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
                            <div  class="img_overlay" >
                                <div class="categories-text">
                                    <p>{{$reference->referenceName}}</p>
                                </div>
                            <img class="categories-img" style="object-fit: cover;" height="200" width="500"
                                src="/images/referenceImages/{{$reference->referenceImage}}">

                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



</div>

@endsection
