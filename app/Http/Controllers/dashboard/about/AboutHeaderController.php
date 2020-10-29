<?php

namespace App\Http\Controllers\dashboard\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About_Header;

class AboutHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = About_Header::all();
        $page_title = 'Header';
        $page_description = 'Some description for the page';
        return view('dashboard.about.header.index', compact('page_title', 'page_description', 'items'));
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
       $items = About_Header::find($id);
        $page_title = 'Edit header';
        $page_description = 'You Can Edit About header Screen Screen Content';
        return view('dashboard.about.header.edit', compact('page_title', 'page_description', 'items')); 
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
        $items= About_Header::find($id);
        $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'description_en' => 'required',
            'description_nl' => 'required',
            'paragraph_en' => 'required',
            'paragraph_nl' => 'required',
            'first_sentence_en' => 'required',
            'first_sentence_nl' => 'required',
            'second_sentence_en' => 'required',
            'second_sentence_nl' => 'required',
            'third_sentence_en' => 'required',
            'third_sentence_nl' => 'required',
        ];
        $validated = $this->validate($request,$rules);
        $items->title_en=$validated['title_en'];
        $items->title_nl=$validated['title_nl'];
        $items->description_en=$validated['description_en'];
        $items->description_nl=$validated['description_nl'];
        $items->paragraph_en=$validated['paragraph_en'];
        $items->paragraph_nl=$validated['paragraph_nl'];
        $items->first_sentence_en=$validated['first_sentence_en'];
        $items->first_sentence_nl=$validated['first_sentence_nl'];
        $items->second_sentence_en=$validated['second_sentence_en'];
        $items->second_sentence_nl=$validated['second_sentence_nl'];
        $items->third_sentence_en=$validated['third_sentence_en'];
        $items->third_sentence_nl=$validated['third_sentence_nl'];
        $items->save();
        return redirect()->route('dashboard.about.header.index');
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
