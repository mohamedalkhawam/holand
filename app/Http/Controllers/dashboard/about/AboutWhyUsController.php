<?php

namespace App\Http\Controllers\dashboard\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About_why_us;

class AboutWhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = About_why_us::all();
        $page_title = 'Why Us Screen';
        $page_description = '';
        return view('dashboard.about.whyus.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function edit($id)
    {
        $items = About_why_us::find($id);
        $page_title = 'Why Us Screen';
        $page_description = 'Change why us screen Content';
        return view('dashboard.about.whyus.edit', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = About_why_us::find($id);
        $rules= [
           'title_en' =>'required',
           'title_nl' =>'required',
           'description_en' =>'required',
           'description_nl' =>'required', 
        ];
        $validated=$this->validate($request, $rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl=$validated['title_nl'];
        $items->description_en = $validated['description_en'];
        $items->description_nl= $validated['description_nl'];
        $items->save();
        return redirect()->route('dashboard.about.whyus.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
