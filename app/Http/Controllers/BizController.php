<?php

namespace App\Http\Controllers;

use App\Biz;
use Illuminate\Http\Request;

class BizController extends Controller
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
        return view('biz.create');
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
            'biz_name' => 'required',
            'biz_description' => 'required',
        ]);

        Biz::create($request->all());

        return redirect()->route('home')->with('success', 'Business category added successfully.');
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
    public function edit(Biz $biz)
    {
        //
        return view('biz.edit', compact('biz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biz $biz)
    {
        //
        $request->validate([
            'biz_name' => 'required',
            'biz_description' => 'required',
        ]);

        $biz->update($request->all());

        return redirect()->route('home')->with('success', 'Business category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biz $biz)
    {
        //
        $biz->delete();

        return redirect()->route('home')->with('success', 'Business category deleted successfully');
    }
}
