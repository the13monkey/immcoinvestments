@extends('layouts.user')

@section('userleft')

<ul class="nav justify-content-start py-3 px-0">
    <li class="nav-item pt-5 pb-4">
        <img src="{{ asset('storage/img/logo.png') }}" alt="{{ config('app.name', 'laravel') }}" class="px-xl-5 px-md-3 px-sm-5" width="200" height="auto">
    </li>
    <li class="nav-item w-100 pt-0 mt-0">
        <ul class="list-group" id="tab-pickers">
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="../home" class="text-blue display-8" id="projects">Dashboard</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('project.create') }}" class="text-blue display-8" id="projects">New Project</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('biz.create') }}" class="text-cyan display-8" id="businesses">New Business</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('leader.create') }}" class="text-blue display-8" id="leadership">New Team Leader</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('partner.create') }}" class="text-blue display-8" id="partners">New Partner</a>
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
                New Business Category
               </div>
               <form action="{{ route('biz.store') }}" method="post" class="py-5" enctype="multipart/form-data">
               @csrf
                    <div class="row">
                        <div class="col-md-12 col-md mb-3">
                            <label for="biz_name">Business Category Name</label>
                            <input type="text" class="form-control" id="biz_name" name="biz_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-12 mb-3">
                            <label for="biz_description">Business Category Description</label>
                            <textarea class="form-control" id="biz_description" name="biz_description" required rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-12 mb-3 my-5 w-100">
                            <button type="submit" class="btn btn-primary w-100 d-block">Add new business category</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection