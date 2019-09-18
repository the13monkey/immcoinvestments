<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 
use App\Biz;
use App\Leader; 
use App\Partner;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        $featured = Project::where('featured', 1)->get();
        $bizs = Biz::all();

        return view('welcome', [
            'projects' => $projects,
            'featured' => $featured,
            'bizs' => $bizs,
        ]);
    }

    public function about()
    {
        $leaders = Leader::all();
        return view('about', [
            'leaders' => $leaders,
        ]);
    }

    public function business()
    {
        $fi_projects = Project::where('project_category', 'Real Estate Financing')->get();
        $re_projects = Project::where('project_category', 'Restaurant Development')->get();
        $wa_projects = Project::where('project_category', 'Water Development')->get();
        return view('business', [
            'fi_projects' => $fi_projects,
            're_projects' => $re_projects,
            'wa_projects' => $wa_projects,
        ]);
    }

    public function partners()
    {
        $partners = Partner::all();
        return view('partners', [
            'partners' => $partners,
        ]);
    }

}
