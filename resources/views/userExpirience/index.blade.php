@extends('layouts.mainLayout')

@section('content')

<h1 style="text-align: center;margin-top:100px;">WILKOMMEN</h1>

<div class="index-cards">
<figure class="snip1543">
    <img src="/images/fassade.jpg" alt="sample108" />
    <figcaption>
      <h3>Facility Managment</h3>
      <p>Baureinigung<br>Spezialreinigung<br>Fassadenreinigung<br>Grundreinigung<br>Unterhaltsreinigung<br>Liegenschaftss betreuunge</p>
    </figcaption>
    <a href="/facility-managment"></a>
  </figure>

  <figure class="snip1543">
    <img src="/images/fire-protection.jpg" alt="sample108" />
    <figcaption>
      <h3>Brandschutz/<br>
    Wasserlöschanlagen</h3>
      <p>Wir können für Sie die komplettee<br>Installation einer Sprinkleranlage<br>übernehmen.<br>Unsere Referenzen sprechen für sich</p>
    </figcaption>
    <a href="/brandschutz-wasserloschanlagen"></a>
  </figure>

  <figure class="snip1543">
    <img src="/images/parket.jpg" alt="sample108" />
    <figcaption>
      <h3>Belagsarbeiten<br>
    und Bodenbeläge</h3>
      <p>Heutzutage sind Bodenbeläge und von<br>Platten nicht mehr Wegzudenke<br>Parkette<br>Linoleum<br>Naturstein<br>Wir beraten Sie</p>
    </figcaption>
    <a href="/belagsarbeiten-und-bodenbelage"></a>
  </figure>
</div>
  <script>

        /* Demo purposes only */
    $(".hover").mouseleave(
      function() {
        $(this).removeClass("hover");
      }
    );
    </script>
@endsection