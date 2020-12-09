@extends('layouts.facilityLayout')

@section('content')
    <div class="facility-hero">
        <img src="/images/blueJobs.png" alt="img">
    </div>
    <div class="hero-text-box-facility">
        <h1>Jobs</h1>
    </div>

    <div class="jobsContainer">


        <div id="publicJobText" class="innerJobContainer">
            <h3 class="jobTitle"> Facility Management </h3>
            <div class="publicJobDescription">
                <?php echo nl2br($facility->description); ?>
            </div>
        </div>



    </div>
    </div>
@endsection
