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

    <div class="jobsContainer">


        <div id="publicJobText" class="innerJobContainer">
            <h3 class="jobTitle"> Brandschutz/Wasserlöschanlagen </h3>
            <div class="publicJobDescription">
                <?php
                    echo nl2br($brandschutz->description);
                ?>
            </div>
        </div>



    </div>
</div>
</div>
@endsection
