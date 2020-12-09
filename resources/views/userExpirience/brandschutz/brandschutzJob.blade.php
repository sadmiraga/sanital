@extends('layouts.brandschutzLayout')

@section('content')
    <div class="hero-image-brand-jobs">
        <div class="hero-text-box-facility">
            <h1>Jobs</h1>
        </div>
    </div>

    <div class="jobsContainer">


        <div id="publicJobText" class="innerJobContainer">
            <h3 class="jobTitle"> Brandschutz/<br>Wasserlöschanlagen </h3>
            <div class="publicJobDescription">
                <?php echo nl2br($brandschutz->description); ?>
            </div>
        </div>



    </div>
@endsection
