<?php

namespace App\Http\Controllers\dashboard\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services_Gallery;
use App\Services_page;

class ServicesGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Services_Gallery::all();
        $page_title = 'Services Gallery';
        $page_description = '';
        return view('dashboard.services.servicesGallery.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Services_page::all();
        $page_title = 'Create';
        $page_description = '';
        return view('dashboard.services.servicesGallery.create', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Services_Gallery;
        if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/services/gallery', $fileName);
            $items->imagePath = $fileName;
        }
        $rules = [
            'services_id' => 'required',
            'imagePath' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->services_id = $validated['services_id'];
        $items->save();
        return redirect()->route('dashboard.services.gallery.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services_Gallery::destroy($id);
        return redirect()->Route('dashboard.services.gallery.index');
    }
}
