@extends('layouts.user')

@section('userleft')

<ul class="nav justify-content-start py-3 px-0">
    <li class="nav-item pt-md-5 pb-md-4">
        <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name', 'laravel') }}" class="px-xl-5 px-md-3 px-sm-5" width="200" height="auto">
    </li>
    <li class="nav-item w-100 pt-0 mt-0">
        <ul class="list-group" id="tab-pickers">
            <li class="list-group-item border-0 mb-2 bg-transparent pl-xl-5">
                <a href="#" class="text-cyan display-8" id="projects">Dashboard</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-xl-5">
                <a href="{{ route('project.create') }}" class="text-blue display-8" id="projects">New Project</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-xl-5">
                <a href="{{ route('biz.create') }}" class="text-blue display-8" id="businesses">New Business</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-xl-5">
                <a href="{{ route('leader.create') }}" class="text-blue display-8" id="leadership">New Team Leader</a>
            </li>
            <li class="list-group-item border-0 mb-2 bg-transparent pl-xl-5">
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
    <div class="row">
        <div class="col-md col-md-6">
            <div class="card">
                <div class="card-header display-8">
                    All projects
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($projects as $project) { 
                        $image = $project->project_picture;     
                    ?>
                    <li class="list-group-item py-4 table-responsive-md">
                        <table>
                            <tr>
                                <td class="align-top">
                                    <img src="{{ asset('img/projects/'.$image) }}" alt="{{ config('app.name') }}" class="rounded float-left mr-5" width="200">
                                </td>
                                <td class="align-top">
                                    <h4><?php echo $project->project_name ?></h4>
                                    <div class="details py-3">
                                        <h5><span class="font-weight-bold mr-2">Location:</span><?php echo $project->project_location ?></h5>
                                        <h5><span class="font-weight-bold mr-2">Status:</span><?php echo $project->project_status ?></h5>
                                        <h5><span class="font-weight-bold mr-2">Category:</span><?php echo $project->project_status ?></h5>
                                        <h5>
                                            <span class="font-weight-bold mr-2">Featured?</span>
                                                <?php 
                                                    $if_featured = $project->featured; 
                                                    if ($if_featured == 1) {
                                                        echo "Yes";
                                                    } else {
                                                        echo "No";
                                                    }
                                                ?>
                                        </h5>
                                        <p><?php echo $project->project_description ?></p>
                                    </div>
                                    <form action="{{ route('project.destroy', $project->project_id) }}" method="POST">
                                        <a href="#" class="mr-3 text-cyan view-details">View Details</a>
                                        <a href="#" class="mr-3 text-muted close-details">Close Details</a>
                                        <a href="{{ route('project.edit', $project->project_id) }}" class="mr-3 text-success">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button href="#" type="submit" class="text-danger border-0 bg-transparent">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <?php }; ?>
                </ul>
            </div>
        </div>
        <div class="col-md col-md-6">
            <div class="card">
                <div class="card-header display-8">
                    Leadership team
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($leaders as $leader) { 
                        $image = $leader->leader_picture;     
                    ?>
                    <li class="list-group-item py-4 table-responsive-md">
                        <table>
                            <tr>
                                <td class="align-top">
                                    <img src="{{ asset('img/leaders/'.$image) }}" alt="{{ config('app.name') }}" class="rounded float-left mr-5" width="100">
                                </td>
                                <td class="align-top">
                                    <h4><?php echo $leader->leader_name ?></h4>
                                    <div class="details py-3">
                                        <h5><span class="font-weight-bold mr-2">Title:</span><?php echo $leader->leader_title ?></h5>
                                        <p><?php echo $leader->leader_description ?></p>
                                    </div>
                                    <form action="{{ route('leader.destroy', $leader->leader_id) }}" method="POST">
                                    <a href="#" class="mr-3 text-cyan view-details">View Details</a>
                                    <a href="#" class="mr-3 text-muted close-details">Close Details</a>
                                    <a href="{{ route('leader.edit', $leader->leader_id) }}" class="mr-3 text-success">Edit</a>

                                    @csrf
                                    @method('DELETE')
                                    <button href="#" type="submit" class="text-danger border-0 bg-transparent">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <?php }; ?>
                </ul>
            </div>

            <div class="card my-4">
                <div class="card-header display-8">
                    Business Categories
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($bizs as $biz) { ?>
                    <li class="list-group-item py-4 table-responsive-md">
                        <table>
                            <tr>
                                <td class="align-top">
                                    <h4><?php echo $biz->biz_name ?></h4>
                                    <div class="details py-3">
                                        <p><?php echo $biz->biz_description; ?></p>
                                    </div>
                                    <form action="{{ route('biz.destroy', $biz->id) }}" method="POST">
                                        <a href="#" class="mr-3 text-cyan view-details">View Details</a>
                                        <a href="#" class="mr-3 text-muted close-details">Close Details</a>
                                        <a href="{{ route('biz.edit', $biz->id) }}" class="mr-3 text-success">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button href="#" type="submit" class="text-danger border-0 bg-transparent">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        </table>
                    </li>
                    <?php };  ?>
                </ul>
                
            </div>

            <div class="card">
                <div class="card-header display-8">
                    Partners
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($partners as $partner) { 
                        $image = $partner->partner_logo;     
                    ?>
                    <li class="list-group-item py-4 table-responsive-md">
                        <table>
                            <tr>
                                <td class="align-top">
                                    <img src="{{ asset('img/partners/'.$image) }}" alt="{{ config('app.name') }}" class="rounded float-left mr-5" width="100">
                                </td>
                                <td class="align-top">
                                    <h4><?php echo $partner->partner_name ?></h4>
                                    <div class="details py-3">
                                        <h5><span class="font-weight-bold mr-2">Category:</span><?php echo $partner->partner_category ?></h5>
                                    </div>
                                    <form action="{{ route('partner.destroy', $partner->id) }}" method="POST">
                                        <a href="#" class="mr-3 text-cyan view-details">View Details</a>
                                        <a href="#" class="mr-3 text-muted close-details">Close Details</a>
                                        <a href="{{ route('partner.edit', $partner->id) }}" class="mr-3 text-success">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button href="#" type="submit" class="text-danger border-0 bg-transparent">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <?php }; ?>
                </ul>
            </div>

    </div>
</div>

@endsection

