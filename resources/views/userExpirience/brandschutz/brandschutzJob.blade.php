@extends('layouts.brandschutzLayout')

@section('content')
<div class="facility-hero">
    <img src="/images/redJobs.png" alt="img">
    </div>
    <div class="hero-text-box-facility">
        <h1>Jobs</h1>
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
