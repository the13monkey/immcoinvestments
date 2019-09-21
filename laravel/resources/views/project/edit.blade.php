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
                <a href="#" class="text-cyan display-8" id="projects">Edit Project</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-5">
                <a href="{{ route('biz.create') }}" class="text-blue display-8" id="businesses">New Business</a>
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
                Edit Project
               </div>
               <form action="{{ route('project.update', $project->project_id) }}" method="post" class="py-5" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="row">
                        <div class="col-md-6 col-md mb-3">
                            <label for="project_name">Project Name</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" required value="{{ $project->project_name }}">
                        </div>
                        <div class="col-md-6 col-md mb-3">
                            <label for="project_location">Project Location</label>
                            <input type="text" class="form-control" id="project_location" name="project_location" required value="{{ $project->project_location }}">
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md col-md-12 mb-3">
                            <label class="form-check-label" for="featured">This is a featured project.</label>
                            <input type="checkbox" class="form-check-input ml-3" name="featured" id="featured" value="{{ $project->featured }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-6 mb-3">
                            <label for="project_status">Project Status</label>
                            <input type="text" class="form-control" id="project_status" name="project_status" required value="{{ $project->project_status }}">
                        </div>
                        <div class="col-md col-md-6 mb-3">
                            <label for="project_category">Project Category</label>
                            <select name="project_category" class="custom-select d-block w-100" id="project_category" required>
                                <option value="{{ $project->project_category }}">{{ $project->project_category }}</option>
                                <option value="Real Estate Financing">Real Estate Financing</option>
                                <option value="Restaurant Development">Restaurant Development</option>
                                <option value="Water Development">Water Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-12 mb-3">
                            <label for="project_description">Project Description</label>
                            <textarea class="form-control" id="project_description" name="project_description" required rows="10">{{ $project->project_description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-md-12 mb-3">
                            <label for="project_picture">Project Picture</label>
                            <input type="file" class="form-control-file" id="project_picture" name="project_picture">
                            <div id="project_picture_holder">
                                <img src="{{ asset('storage/img/projects/'.$project->project_picture) }}" alt="{{ config('app.name', 'laravel') }}" class="uploaded-thumbnail img-thumbnail mt-3 old-uploaded-thumbnail">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md col-md-12 mb-3 my-5 w-100">
                            <button type="submit" class="btn btn-primary w-100 d-block">Edit Project</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection