@extends('layouts.facilityLayout')

@section('content')
<div class="facility-hero">
    <img src="/images/blueReference.png" alt="img">
    <div class="hero-text-box-facility">
        <h1>Referenzen</h1>
    </div>
</div>
    
<div class="content-categories-outter-wrap">
    <div class="content-categories-main" data-aos="fade-in" data-aos-duration="3000">
        <div class="categtories-content">
            <div>
                <p class="categtories-h1">Facility managment</p>
            </div>
            <div class='container-fluid'>
                <div class='row'>
                    @foreach($references as $reference)

                    <div  data-aos="fade-right"
                        style="overflow: hidden;" class='col-md-3' id="categories-col" style="padding-right: 0%;">
                            <div  class="img_overlay" >
                                <div class="categories-text">
                                    <p>Die Schweizerische Post - InfraPost AG</p>
                                </div>
                            <img class="categories-img" style="object-fit: cover;" height="200" width="100%"
                                src="/images/referenceImages/{{$reference->referenceImage}}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
