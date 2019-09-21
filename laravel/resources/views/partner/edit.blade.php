@extends('layouts.user')

@section('userleft')

<ul class="nav justify-content-start py-3 px-0">
    <li class="nav-item pt-5 pb-4">
        <img src="{{ asset('storage/img/logo.png') }}" alt="{{ config('app.name', 'laravel') }}" class="px-xl-5 px-md-3 px-sm-5" width="200" height="auto">
    </li>
    <li class="nav-item w-100 pt-0 mt-0">
        <ul class="list-group" id="tab-pickers">
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="../../home" class="text-blue display-8" id="projects">Dashboard</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('project.create') }}" class="text-blue display-8" id="projects">New Project</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('biz.create') }}" class="text-blue display-8" id="businesses">New Business</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('leader.create') }}" class="text-blue display-8" id="leadership">New Team Leader</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="#" class="text-cyan display-8" id="partners">Edit Partner</a>
            </li>
        </ul>
    </li>
</ul>

@endsection

@section('userright')

<ul class="nav justify-content-end py-4 border-bottom">
@guest
    @if (Route::has('register'))
        <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    @else
        <li class="nav-item mx-2">
            Hello, {{ Auth::user()->name }}
        </li>
        <li class="nav-item mx-2">
            <a class="text-cyan" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>   
@endguest
</ul>

<div class="container-fluid py-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md col-md-6">
            <div class="card border-left-0 border-right-0 rounded-0">
               <div class="card-header display-8 text-center font-weight-bold">
                Edit Partner
               </div>
               <form action="{{ route('partner.update', $partner->id) }}" method="post" class="py-5" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                    <div class="row">
                        <div class="col-md-6 col-md mb-3">
                            <label for="partner_name">Name</label>
                            <input type="text" class="form-control" id="partner_name" name="partner_name" required value= "{{ $partner->partner_name }}">
                        </div>
                        <div class="col-md-6 col-md mb-3">
                            <label for="partner_category">Category</label>
                            <input type="text" class="form-control" id="partner_category" name="partner_category" required value="{{ $partner->partner_category }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-6 mb-3">
                            <label for="partner_logo">Logo</label>
                            <input type="file" class="form-control-file" id="partner_logo" name="partner_logo">
                            <div id="partner_picture_holder">
                                <img src="{{ asset('storage/img/partners/'.$partner->partner_logo) }}" alt="{{ config('app.name', 'laravel') }}" class="uploaded-thumbnail img-thumbnail mt-3 old-uploaded-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-12 mb-3 my-5 w-100">
                            <button type="submit" class="btn btn-primary w-100 d-block">Edit partner</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection