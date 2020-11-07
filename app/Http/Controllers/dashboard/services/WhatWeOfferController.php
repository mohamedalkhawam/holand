<?php

namespace App\Http\Controllers\dashboard\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\What_we_offer;
class WhatWeOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = What_we_offer::all();
        $page_title = 'Services';
        $page_description = 'what we can offer';
        return view('dashboard.services.whatWeOffer.index', compact('page_title', 'page_description', 'items'));
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
        $items = What_we_offer::find($id);
        $page_title = 'Services';
        $page_description = 'what we can offer';
        return view('dashboard.services.whatWeOffer.edit', compact('page_title', 'page_description', 'items'));
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
        $items = What_we_offer::find($id);
        $rules = [
            'paragraph_en'=>'required',
            'paragraph_nl'=>'required',
        ];
        $validated = $this->validate($request,$rules);
        $items->paragraph_en = $validated['paragraph_en'];
        $items->paragraph_nl = $validated['paragraph_nl'];
        $items->save();
        return redirect()->route('dashboard.services.whatweoffer.index');
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
