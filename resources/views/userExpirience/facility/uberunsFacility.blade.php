@extends('layouts.facilityLayout')
@section('content')
<div class="facility-hero">
    <img src="/images/blueOurTeam.png" alt="img">
    </div>
    <div class="hero-text-box-facility">
        <h1>Uber Uns</h1>
    </div>
    <div class="facility-content">
        <div class="facility-h">
            <h1>Sanical AG - Wer sind wir?</h1>
            <h4>besitzt ein grosses Wissen an speziellen Reinigungsverfahren und wendet diese praxisorientiert an. 
                Putzen kann jeder, aber Reinigung ist etwas ganz anderes. Die Branche Facility Management beinhaltet viele 
                Untergruppierungen die wir Ihnen gerne einzeln erklären und gerne anbieten:</h4>
        </div>
    </div>
    <div class="uber-uns-cards" style="margin-top: -150px">
        <div class="index-cards">
            <div class="card" onclick="window.location.href='/facility-managment'">
                <img src="/images/facility-hero.png" alt="">
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
            <div class="card" onclick="window.location.href='/brandschutz-wasserloschanlagen'">
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
            <div class="card" onclick="window.location.href='/belagsarbeiten-und-bodenbelage'">
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
    </div>
    <div class="facility-uberuns-content">
        <h4>Die Beziehungen mit den Generalunternehmern erlauben es uns, an grossen Projekten teilzuhaben und diese zum Glanz hervorzubringen.
             Langer Aufbaa u bracht uns zu diesem Stand und erlaubt es alle Werke direkt mit den Generalunternehmern auszuführen zu können.
              Die Zielsetzung der Sanical AG ist es ein Paket anzubieten, über ein Netzwerk von Leuten, die engagiert sind sich 
              den Projekten zu widmen und diese Perfekt auszuführen. Sie haben ein Problem Sanical AG ist die Lösung! Weil wir nicht nur die 
              einfache Dienstleistung anbieten, lässt uns das Au fläeuchten.
             Das Hineinversetzen der Mitarbeiter von Sanical AG ist eine Einstellung die nicht viele mit sich bringen.</h4>
    </div>
    
@endsection