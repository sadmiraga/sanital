@extends('layouts.facilityLayout')
@section('content')
    <div class="facility-hero">
        <img src="/images/blueOurTeam.png" alt="img">
    </div>
    <div class="hero-text-box-facility">
        <h1>Uber Uns</h1>
    </div>
    <div class="facility-content">
        <div class="facility-h" style="margin-bottom: 4%">
            <h1>Sanical AG - Wer sind wir?</h1>
            <h4>Die Sanical AG findet Ihren Fuss früher im Sanitärbereich und
                wurde später dann umstrukturiert zum Stand heute:</h4>
        </div>
        <div class="uberuns-cards">
            <figure class="snip1544">
                <img src="/images/fassade.jpg" alt="sample108" />
                <figcaption>
                    <h3>Facility Managment</h3>
                    <p>Baureinigung<br>Spezialreinigung<br>Fassadenreinigung<br>Grundreinigung<br>Unterhaltsreinigung<br>Liegenschaftss
                        betreuunge</p>
                </figcaption>
                <a href="#"></a>
            </figure>

            <figure class="snip1544">
                <img src="/images/fire-protection.jpg" alt="sample108" />
                <figcaption>
                    <h3>Brandschutz/<br>
                        Wasserlöschanlagen</h3>
                    <p>Wir können für Sie die komplettee<br>Installation einer Sprinkleranlage<br>übernehmen.<br>Unsere Referenzen sprechen für sich
                    </p>
                </figcaption>
                <a href="#"></a>
            </figure>

            <figure class="snip1544">
                <img src="/images/parket.jpg" alt="sample108" />
                <figcaption>
                    <h3>Belagsarbeiten<br>
                        und Bodenbeläge</h3>
                    <p>Heutzutage sind Bodenbeläge und von<br>Platten nicht mehr Wegzudenke<br>Parkette<br>Linoleum<br>Naturstein<br>Wir beraten Sie
                    </p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
        <script>
            $(".hover").mouseleave(
                function() {
                    $(this).removeClass("hover");
                }
            );

        </script>
    </div>
    <div class="facility-uberuns-content" style="margin-bottom: 10vh;">
        <h4>Die Beziehungen mit den Generalunternehmern erlauben es uns, an grossen Projekten teilzuhaben und diese zum
            Glanz hervorzubringen.
            Langer Aufbau brachteuns zu diesem Stand und erlaubt es alle Werke direkt mit den Generalunternehmern
            auszuführen zu können.
            Die Zielsetzung der Sanical AG ist es ein Paket anzubieten, über ein Netzwerk von Leuten, die engagiert sind
            sich
            den Projekten zu widmen und diese Perfekt ausführen. Sie haben ein Problem Sanical AG ist die Lösung! Weil wir
            nicht nur die
            einfache Dienstleistung anbieten, lässt uns das Au fleuchten.
            Das Hineinversetzen der Mitarbeiter von Sanical AG ist eine Einstellung die nicht viele mit sich bringen.</h4>
    </div>
    </div>

@endsection
