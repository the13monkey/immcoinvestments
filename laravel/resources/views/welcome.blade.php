@extends('layouts.app')

@section('content')
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach ($projects as $project) { 
      $project_index = $project->project_id - 1; 
    ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $project_index }}"></li>
    <?php }; ?>
  </ol>
  <div class="carousel-inner">

  <?php foreach ($projects as $project) { 
    $image = $project->project_picture; 
  ?>
    <div class="carousel-item">
      <img src="{{ asset('storage/img/projects/'.$image) }}" class="d-block" alt="{{ config('app.name', 'laravel') }}">
      <div class="carousel-caption text-white">
        <div class="container">
          <h5><?php echo $project->project_name; ?></h5>
          <p class="text-cyan"><?php echo $project->project_status; ?></p>
        </div>
      </div> 
    </div>
  <?php }; ?> 
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid mt-0 mb-0 bg-white py-md-3" style="background-image:url('{{ asset('storage/img/diagonal.png') }}')">
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

<div class="container my-5">

  <div class="row my-md-5">
    <div class="col-12 text-center">
      <h1 class="display-3 text-blue font-weight-bold">Our Business</h1>
    </div>
  </div>

  <div class="row pb-5">

    <?php foreach ($bizs as $biz) :?>
    <div class="col-md col-md-4 ">
      <div class="card shadow-sm border-0 mb-3">
        <div class="card-body p-lg-5 p-md-3">
          <h5 class="card-title font-weight-bold text-blue py-3"><?php echo $biz->biz_name; ?></h5>
          <h6 class="card-subtitle mb-5 text-muted text-left"><?php echo $biz->biz_description ?></h6>
          <a href="our-business/#<?php echo $biz->id ?>" class="btn btn-primary btn-lg">Learn more</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>

</div>

<div class="container-fluid bg-cyan" >

    <div class="row pt-5">
      <div class="col-12 text-center">
        <h1 class="display-3 text-white font-weight-bold">Project Locations</h1>
      </div>
    </div>

    <div class="row pb-5">
      <div class="col-12 text-center">
        <div class="container">
          <img src="{{ asset('storage/img/map.png') }}" alt="{{ config('app.name', 'laravel') }}" class="img-fluid">
        </div>
      </div>
    </div>

  </div>

</div>

<div class="container-fluid ">

  <div class="row py-5">
    <div class="col-12">
      <h1 class="display-3 text-center text-blue font-weight-bold text-wrap">Featured Projects</h1>
    </div>
  </div>

  <div class="row pb-5 mb-5" style="background-image:url('{{ asset('storage/img/diagonal.png') }}')">

    <?php foreach ($featured as $feature) { 
      $image = $feature->project_picture; 
    ?>
    <div class="col-md col-md-4">
      <div class="card shadow-sm border-0 mb-3 p-md-3">
        <img src="{{ asset('storage/img/projects/'.$image) }}" class="card-img-top" alt="{{ config('app.name', 'laravel') }}">
        <div class="card-body">
        <h5 class="px-3 py-1 bg-cyan rounded border text-white font-weight-bold text-center"><?php echo $feature->project_status ?></h5>
                    <h3 class="card-title font-weight-bold"><?php echo $feature->project_name ?></h3>
                    <h5><?php echo $feature->project_location; ?></h5>
                    <hr>
                    <p class="card-text"><?php echo $feature->project_description ?></p>
        </div>
      </div>
    </div>
    <?php }; ?>

  </div>

</div>
    
@endsection
