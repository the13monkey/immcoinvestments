<?php

namespace App\Http\Controllers;

use App\Partner; 
use Illuminate\Http\Request;

class PartnerController extends Controller
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
        return view('partner.create');
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
            'partner_name' => 'required',
            'partner_category' => 'required',
            'partner_logo' => 'image | mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = $request->partner_logo->getClientOriginalName();
        $saveName = time().'_'.$imageName;
        $size = $request->file('partner_logo')->getSize();

        Partner::create([
            'partner_name' => $request->partner_name,
            'partner_category' => $request->partner_category,
            'partner_logo' => $saveName,
        ]);

        $request->partner_logo->move(storage_path('app/public/img/partners') ,$saveName);

        return redirect()->route('home')->with('success', 'The partner added successfully');
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
    public function edit(Partner $partner)
    {
        //
        return view('partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        //
        $image = $request->partner_logo;
        if ( $image != '' ) {

            unlink(storage_path('app/public/img/partners/'.$partner->partner_logo));
            $request->validate([
                'partner_name' => 'required',
                'partner_category' => 'required',
                'partner_logo' => 'image | mimes:jpeg,png,jpg,gif,svg',
            ]);
            $imageName = $request->partner_logo->getClientOriginalName();
            $saveName = time().'_'.$imageName;
            $size = $request->file('partner_logo')->getSize();
            $data = array (
                'partner_name' => $request->partner_name,
                'partner_category' => $request->partner_category,
                'partner_logo' => $saveName,
            );

            $partner->update($data);
            $image->move(storage_path('app/public/img/partners'), $saveName);

        } else {

            $saveName = $partner->partner_logo; 
            $data = array(
                'partner_name' => $request->partner_name,
                'partner_category' => $request->partner_category,
                'partner_logo' => $saveName,
            );
            $partner->update($data);  

        }

        return redirect()->route('home')->with('success', 'Partner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
        unlink(storage_path('app/public/img/partners/'.$partner->partner_logo));
        $partner->delete();

        return redirect()->route('home')->with('success', 'Partner deleted successfully');
    }
}
