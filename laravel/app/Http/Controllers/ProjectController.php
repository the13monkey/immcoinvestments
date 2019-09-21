<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'project_location' => 'required',
            'project_status' => 'required',
            'project_category' => 'required',
            'project_description' => 'required',
            'project_picture' => 'image | mimes:jpeg,png,jpg,gif,svg',
            'featured' => 'nullable',
        ]);

        $imageName = $request->project_picture->getClientOriginalName();
        $saveName = time().'_'.$imageName;
        $size = $request->file('project_picture')->getSize();

        Project::create([
            'project_name' => $request->project_name,
            'project_location' => $request->project_location,
            'project_status' => $request->project_status,
            'project_category' => $request->project_category,
            'project_description' => $request->project_description,
            'project_picture' => $saveName,
            'featured' => $request->featured,
        ]);

        $request->project_picture->move(storage_path('app/public/img/projects') ,$saveName);

        return redirect()->route('home')->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $image = $request->project_picture; 
        if ( $image != '' ) {

            unlink(storage_path('app/public/img/projects/'.$project->project_picture));
            $request->validate([
                'project_name' => 'required',
                'project_location' => 'required',
                'project_status' => 'required',
                'project_category' => 'required',
                'project_description' => 'required',
                'project_picture' => 'image | mimes:jpeg,png,jpg,gif,svg',
                'featured' => 'required | nullable',
            ]);
            $imageName = $request->project_picture->getClientOriginalName();
            $saveName = time().'_'.$imageName;
            $size = $request->file('project_picture')->getSize();
            $data = array(
                'project_name' => $request->project_name,
                'project_location' => $request->project_location,
                'project_status' => $request->project_status,
                'project_category' => $request->project_category,
                'project_description' => $request->project_description,
                'project_picture' => $saveName,
                'featured' => $request->featured,
            );

            $project->update($data);
            $image->move(storage_path('app/public/img/projects'), $saveName);

        } else {

            $saveName = $project->project_picture;
            $data = array(
                'project_name' => $request->project_name,
                'project_location' => $request->project_location,
                'project_status' => $request->project_status,
                'project_category' => $request->project_category,
                'project_description' => $request->project_description,
                'project_picture' => $saveName,
                'featured' => $request->featured,
            );
            
            $project->update($data);
        }

        return redirect()->route('home')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        unlink(storage_path('app/public/img/projects/'.$project->project_picture));
        $project->delete();

        return redirect()->route('home')->with('success', 'Project deleted successfully');
    }
}
