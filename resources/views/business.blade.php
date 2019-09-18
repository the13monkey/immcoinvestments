@extends('layouts.app')

@section ('content')

<div class="jumbotron jumbotron-fluid bg-white border-bottom">
  <div class="container">
    <h1 class="display-4 text-blue font-weight-bold text-center">Fund Investments</h1>
    <p class="lead text-blue text-center">We are currently reviewing and analyzing new projects. Investors will be notified when new funds are approved and ready for investment.</p>
  </div>
</div>

<div class="container-fluid">

    <div class="row py-5" id="1">
        <div class="col-12">
            <h1 class="display-3 text-center text-blue font-weight-bold text-wrap">Real Estate Financing</h1>
        </div>
    </div>
    
    <div class="row pb-5 mb-5 d-flex justify-content-center" style="background-image:url('{{ asset('img/diagonal.png') }}')">

    <?php foreach($fi_projects as $project) { 
        $image = $project->project_picture; 
    ?>    
        <div class="col-md col-md-4">
            <div class="card shadow-sm border-0 mb-3 p-md-3">
                <img src="{{ asset('img/projects/'.$image) }}" class="card-img-top" alt="{{ config('app.name', 'laravel') }}">
                <div class="card-body">
                    <h5 class="px-3 py-1 bg-cyan rounded border text-white font-weight-bold col col-12 text-center"><?php echo $project->project_status ?></h5>
                    <h3 class="card-title font-weight-bold"><?php echo $project->project_name ?></h3>
                    <h5><?php echo $project->project_location; ?></h5>
                    <hr>
                    <p class="card-text"><?php echo $project->project_description ?></p>
                    <h4 class="card-text font-weight-bold">Recognitions</h4>
                    <ul class="list-group list-group-horizontal border-0 pl-0" >
                        <li class="list-group-item pl-0 border-0 modal-container" data-toggle="modal" data-target="#exampleModal">
                            <img src="{{ asset('img/plaques/p-lg1.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-thumbnail">
                        </li>
                        <li class="list-group-item pl-0 border-0 modal-container" data-toggle="modal" data-target="#exampleModal">
                            <img src="{{ asset('img/plaques/p-lg2.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-thumbnail">
                        </li>
                        <li class="list-group-item pl-0 border-0 modal-container" data-toggle="modal" data-target="#exampleModal">
                            <img src="{{ asset('img/plaques/p-moxy.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-thumbnail">
                        </li>
                        <li class="list-group-item pl-0 border-0 modal-container" data-toggle="modal" data-target="#exampleModal">
                            <img src="{{ asset('img/plaques/p-wst.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-thumbnail">
                        </li>
                        <li class="list-group-item pl-0 border-0 modal-container" data-toggle="modal" data-target="#exampleModal">
                            <img src="{{ asset('img/plaques/p-wst2.jpg') }}" alt="{{ config('app.name', 'laravel') }}" class="img-thumbnail">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php }; ?>

    </div>

    <div class="row py-5" id="2">
        <div class="col-12">
            <h1 class="display-3 text-center text-blue font-weight-bold text-wrap">Restaurant Development</h1>
        </div>
    </div>
    
    <div class="row pb-5 mb-5 d-flex justify-content-center">

    <?php foreach($re_projects as $project) { 
        $image = $project->project_picture; 
    ?>    
        <div class="col-md col-md-4">
            <div class="card shadow-sm border-0 mb-3 p-md-3">
                <img src="{{ asset('img/projects/'.$image) }}" class="card-img-top" alt="{{ config('app.name', 'laravel') }}">
                <div class="card-body">
                    <h5 class="px-3 py-1 bg-cyan rounded border text-white font-weight-bold col col-12 text-center"><?php echo $project->project_status ?></h5>
                    <h3 class="card-title font-weight-bold"><?php echo $project->project_name ?></h3>
                    <h5><?php echo $project->project_location; ?></h5>
                    <hr>
                    <p class="card-text pb-3"><?php echo $project->project_description ?></p>
                </div>
            </div>
        </div>
    <?php }; ?>

    </div>

    <div class="row py-5" id="3">
        <div class="col-12">
            <h1 class="display-3 text-center text-blue font-weight-bold text-wrap">Water Development</h1>
        </div>
    </div>

    <div class="row pb-5 mb-5 d-flex justify-content-center" style="background-image:url('{{ asset('img/diagonal.png') }}')">

    <?php foreach($wa_projects as $project) { 
        $image = $project->project_picture; 
    ?>    
        <div class="col-md col-md-4">
            <div class="card shadow-sm border-0 mb-3 p-md-3">
                <img src="{{ asset('img/projects/'.$image) }}" class="card-img-top" alt="{{ config('app.name', 'laravel') }}">
                <div class="card-body">
                    <h5 class="px-3 py-1 bg-cyan rounded border text-white font-weight-bold col col-12 text-center"><?php echo $project->project_status ?></h5>
                    <h3 class="card-title font-weight-bold"><?php echo $project->project_name ?></h3>
                    <h5><?php echo $project->project_location; ?></h5>
                    <hr>
                    <p class="card-text pb-3"><?php echo $project->project_description ?></p>
                </div>
            </div>
        </div>
    <?php }; ?>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="{{ config('app.name', 'laravel') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</div>

@endsection