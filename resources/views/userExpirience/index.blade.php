@extends('layouts.mainLayout')

@section('content')

<h1 style="text-align: center;margin-top:100px;">WILKOMMEN</h1>
<h3 style="text-align: center;margin-bottom:100px!important; max-width:1200px; margin: auto">besitzt ein grosses Wissen an speziellen Reinigungsverfahren und wendet diese praxisorientiert an. Putzen kann jeder, aber Reinigung ist etwas ganz anderes. Die Branche Facility Management beinhaltet viele Untergruppierungen die wir Ihnen gerne einzeln erklären und gerne anbieten:</h3>

<div class="index-cards">
<figure class="snip1543">
    <img src="/images/fassade.jpg" alt="sample108" />
    <figcaption>
      <h3>Facility Managment</h3>
      <p>Baureinigung<br>Spezialreinigung<br>Fassadenreinigung<br>Grundreinigung<br>Unterhaltsreinigung<br>Liegenschaftss betreuunge</p>
    </figcaption>
    <a href="#"></a>
  </figure>

  <figure class="snip1543">
    <img src="/images/fire-protection.jpg" alt="sample108" />
    <figcaption>
      <h3>Brandschutz/<br>
    Wasserlöschanlagen</h3>
      <p>Wir können für Sie die komplettee<br>Installation einer Sprinkleranlage<br>übernehmen.<br>Unsere Referenzen sprechen für sich</p>
    </figcaption>
    <a href="#"></a>
  </figure>

  <figure class="snip1543">
    <img src="/images/parket.jpg" alt="sample108" />
    <figcaption>
      <h3>Belagsarbeiten<br>
    und Bodenbeläge</h3>
      <p>Heutzutage sind Bodenbeläge und von<br>Platten nicht mehr Wegzudenke<br>Parkette<br>Linoleum<br>Naturstein<br>Wir beraten Sie</p>
    </figcaption>
    <a href="#"></a>
  </figure>
</div>
<div class="pusher" style="margin-bottom: 100px;"></div>
  <script>

        /* Demo purposes only */
    $(".hover").mouseleave(
      function() {
        $(this).removeClass("hover");
      }
    );
    </script>
@endsection