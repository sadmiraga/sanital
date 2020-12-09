@extends('layouts.mainLayout')

@section('content')
    <div class="jobs-hero">
        <img width="100%" src="/images/jobs.png">
        <div class="hero-text-box">
            <h1>Jobs</h1>
        </div>

        <div class="jobsContainer">


            <div id="publicJobText" class="innerJobContainer">
                <h3 class="jobTitle"> Facility Management </h3>
                <div class="publicJobDescription">
                    <?php echo nl2br($facility->description); ?>
                </div>
            </div>

            <div id="publicJobText" class="innerJobContainer">
                <h3 class="jobTitle"> Brandschutz/Wasserlöschanlagen </h3>
                <div class="publicJobDescription">
                    <?php echo nl2br($brandschutz->description); ?>
                </div>
            </div>

            <div id="publicJobText" class="innerJobContainer">
                <h3 class="jobTitle"> Belagsarbeiten und Bodenbeläge </h3>
                <div class="publicJobDescription">
                    <?php echo nl2br($belagsarbeiten->description); ?>
                </div>
            </div>

        </div>
    </div>
@endsection
