<?php

namespace App\Http\Controllers;

use App\Leader; 
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('leader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'leader_name' => 'required',
            'leader_title' => 'required',
            'leader_description' => 'required',
            'leader_picture' => 'image | mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = $request->leader_picture->getClientOriginalName();
        $saveName = time().'_'.$imageName;
        $size = $request->file('leader_picture')->getSize();
   //      

        Leader::create([
            'leader_name' => $request->leader_name,
            'leader_title' => $request->leader_title,
            'leader_description' => $request->leader_description,
            'leader_picture' => $saveName,
        ]);

        $request->leader_picture->move(public_path('/img/leaders'), $saveName);

        return redirect()->route('home')->with('success', 'Team leader added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        //
        return view('leader.edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        $image = $request->leader_picture; 
        if ( $image != '' ) { //New image is set

            unlink(public_path('img/leaders/'.$leader->leader_picture));
            $request->validate([
                'leader_name' => 'required',
                'leader_title' => 'required',
                'leader_description' => 'required',
                'leader_picture' => 'image | mimes:jpeg,png,jpg,gif,svg',
            ]);
            $imageName = $request->leader_picture->getClientOriginalName();
            $saveName = time().'_'.$imageName;
            $size = $request->file('leader_picture')->getSize();
            $data = array (
                'leader_name' => $request->leader_name,
                'leader_title' => $request->leader_title,
                'leader_description' => $request->leader_description,
                'leader_picture' => $saveName,
            );
           
            $leader->update($data);
            $image->move(public_path('/img/leaders'), $saveName);

        } else { //New new image

            $saveName = $leader->leader_picture;
            $data = array (
                'leader_name' => $request->leader_name,
                'leader_title' => $request->leader_title,
                'leader_description' => $request->leader_description,
                'leader_picture' => $saveName,
            );

            $leader->update($data);
        }

        return redirect()->route('home')->with('success', 'Team leader updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        //
        unlink(public_path('img/leaders/'.$leader->leader_picture));
        $leader->delete();

        return redirect()->route('home')->with('success', 'Team leader deleted successfully');
    }
}
