@extends('layouts.app')

@section ('content')

<div class="container">

    <div class="row py-5">
        <div class="col-12">
            <h1 class="display-3 text-center text-blue font-weight-bold text-wrap">Our Partners</h1>
        </div>
    </div>

    <div class="row pb-5 mb-5 d-flex justify-content-center">

    <?php foreach($partners as $partner) { 
        $image = $partner->partner_logo; 
    ?>
        <div class="col-md col-md-4 text-center mb-5">
            <img src="{{ asset('img/partners/'.$image) }}" style="max-width: 200px;" class="bg-white shadow-sm px-3 mb-md-5" alt="<?php echo $partner->partner_name; ?>">
        </div>
    <?php }; ?>

    </div>

</div>

@endsection