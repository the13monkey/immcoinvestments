@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid bg-transparent mb-0" style="height: 80vh; z-index: 3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 60vh">
                <div class="col-md col-lg-8 col-md-12 text-center">
                    <h1 class="display-4 text-white font-weight-bold">Our Company</h1>
                    <p class="lead text-white my-md-4">Immco Investments LLC is a private finance company with access to multiple sources of private equity capital. Established in 2011, Immco's funds are lender and investment principals to a number of well-known real estate companies specializing in hotels, apartment buildings, and mixed-use structures.</p>
                    <p class="lead text-white my-md-4">Over the years, Immco has continued to expand its services and professionals, fast becoming one of the top financers in the industry. Immco also owns, has interest in, and operates companies in food and beverage, water resources, and real estate.</p>
                    <p class="lead text-white my-md-4">As of the end of 2018, capital assets under Immco management exceed $400,000,000.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="video-background">
        <video playsinline autoplay muted loop id="my-video" poster="" id="video-background">
            <source src="{{ asset('img/video_original.mp4') }}" type="video/mp4">
        </video>
        <div id="video-overlay"></div>
    </div>

    <div class="container-fluid mt-0 mb-0 bg-white py-md-3" style="background-image:url('{{ asset('img/diagonal.png') }}')">
        <div class="row justify-content-center d-flex">
            <div class="col-md col-lg-3 col-md-6">
                <div class="card rounded-0 border-0 bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title display-3 font-weight-bold text-red">$400<sup>+</sup></h5>
                        <h6 class="card-subtitle mb-2 text-blue">million in capital invested</h6>
                    </div>
                </div>
            </div>

            <div class="col-md col-lg-3 col-md-6">
                <div class="card rounded-0 border-0 bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title display-3 font-weight-bold text-red">11</h5>
                        <h6 class="card-subtitle mb-2 text-blue">funds managed</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-cyan" >
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white font-weight-bold">Our Office</h1>
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-12 text-center">
                <div class="container">
                    <img src="{{ asset('img/usoffice.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-3 text-blue font-weight-bold">Our Leadership</h1>
            </div>
        </div>

        <?php foreach($leaders as $leader) { 
            $image = $leader->leader_picture;     
        ?>
        <div class="row mb-5 mt-md-5 pb-5 leadership">
            <div class="col-md col-md-6 px-5 text-center mb-3">
                <img src="{{ asset('img/leaders/'.$image) }}" alt="{{ config('app.name', 'laravel') }}" class="mr-0" width="70%">
            </div>
            <div class="col-md col-md-6 px-5">
                <h3 class="display-5 text-blue font-weight-bold"><?php echo $leader->leader_name; ?></h3>
                <h4 class="text-cyan mb-5"><?php echo $leader->leader_title; ?></h4>
                <h5 class="text-dark card-title" style="line-height: 1.3"><?php echo $leader->leader_description; ?></h5>
            </div>
        </div>
        <?php }; ?>

    </div>

</div>
    
@endsection