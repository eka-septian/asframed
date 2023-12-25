<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stories.index', [
            'stories' => Stories::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image'
        ]);

        $formFields['image'] = $request->file('image')->store('images', 'public');

        if ($request->has('description')) {
            $formFields['description'] = $request->description;
        }

        $request->user()->stories()->create($formFields);

        return redirect(route('stories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function show(Stories $stories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function edit(Stories $stories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stories $stories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stories $stories)
    {
        //
    }
}
