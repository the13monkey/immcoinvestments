<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 
use App\Leader;
use App\Biz;
use App\Partner; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all(); 
        $leaders = Leader::all();
        $bizs = Biz::all();
        $partners = Partner::all();
        return view('home', [
            'projects' => $projects,
            'leaders' => $leaders,
            'bizs' => $bizs,
            'partners' => $partners,
        ]);
    }
}
