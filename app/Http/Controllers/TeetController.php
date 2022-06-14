<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeetRequest;
use App\Http\Requests\UpdateTeetRequest;
use App\Models\Teet;

class TeetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teet.index', [
            'teet' => Teet::latest()->filter(request(['description']))->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeetRequest $request)
    {
        $formFields = $request->validate([
            'description' => 'required',
        ]);  
        $teet= new Teet;
        $teet->description=$request->description;

        if($request->hasFile('image')) {
            $teet['image'] = $request->file('image')->store('logos', 'public');
        }

        $teet->save();


        return redirect('/dashboard');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teet  $teet
     * @return \Illuminate\Http\Response
     */
    public function show(Teet $teet)
    {
       // 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teet  $teet
     * @return \Illuminate\Http\Response
     */
    public function edit(Teet $teet)
    {
        return view('.edit', ['teet' => $teet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeetRequest  $request
     * @param  \App\Models\Teet  $teet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeetRequest $request, Teet $teet)
    {

        $formFields = $request->validate([
            'description' => 'required',
        ]);
 
        $teet->description=$request->description;

        if($request->hasFile('image')) {
            $teet['image'] = $request->file('image')->store('logos', 'public');
        }


        $teet->save();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teet  $teet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teet $teet)
    {
       
        $teet->delete();
        return redirect('/dashboard');
    }

    public function like(Teet $teet)
    {

       // $teet = $request->get('teet');
        switch ($teet) {
            case 'like':
                like::where('id', $id)->increment('likes_count');
                break;
            }
        $teet->save();
        return redirect('/dashboard');
    }
}
