<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Config::all();
        $page_title = 'Config';
        $page_description = '';
        return view('dashboard.config.index', compact('page_title', 'page_description', 'items'));
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
        $items = Config::find($id);
        $page_title = 'Config';
        $page_description = '';
        return view('dashboard.config.edit', compact('page_title', 'page_description', 'items'));
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
        $items=  Config::find($id);
        $rules = [
            'phone'=>'required',
            'email'=>'required',
            'address_en'=>'required',
            'address_nl'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'google'=>'required',
            'youtube'=>'required',
            'map_src'=>'required',
            'open_day_from_en'=>'required',
            'open_day_to_en'=>'required',
            'open_day_from_nl'=>'required',
            'open_day_to_nl'=>'required',
            'open_hour_from'=>'required',
            'open_hour_to'=>'required',
            'first_special_day_en'=>'required',
            'first_special_day_nl'=>'required',
            'first_special_from'=>'required',
            'first_special_to'=>'required',
            'second_special_day_en'=>'required',
            'second_special_day_nl'=>'required',
            'second_special_day_note_en'=>'required',
            'second_special_day_note_nl'=>'required',
            'address_link'=>'required'
        ];
        $validated = $this->validate($request,$rules);
        $items->phone = $validated['phone'];
        $items->email = $validated['email'];
        $items->address_en = $validated['address_en'];
        $items->address_nl = $validated['address_nl'];
        $items->facebook = $validated['facebook'];
        $items->twitter = $validated['twitter'];
        $items->google = $validated['google'];
        $items->youtube = $validated['youtube'];
        $items->map_src = $validated['map_src'];
        $items->address_link = $validated['address_link'];
        $items->open_day_from_en = $validated['open_day_from_en'];
        $items->open_day_to_en = $validated['open_day_to_en'];
        $items->open_day_from_nl = $validated['open_day_from_nl'];
        $items->open_day_to_nl = $validated['open_day_to_nl'];
        $items->open_hour_from = $validated['open_hour_from'];
        $items->open_hour_to = $validated['open_hour_to'];
        $items->first_special_day_en = $validated['first_special_day_en'];
        $items->first_special_day_nl = $validated['first_special_day_nl'];
        $items->first_special_from = $validated['first_special_from'];
        $items->first_special_to = $validated['first_special_to'];
        $items->second_special_day_en = $validated['second_special_day_en'];
        $items->second_special_day_nl = $validated['second_special_day_nl'];
        $items->second_special_day_note_en = $validated['second_special_day_note_en'];
        $items->second_special_day_note_nl = $validated['second_special_day_note_nl'];
        $items->save();
        return redirect()->route('dashboard.config.index');

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
