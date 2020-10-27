<?php

namespace App\Http\Controllers\dashboard\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About_gallery;

class AboutGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = About_gallery::all();
        $page_title = 'Gallery';
        $page_description = 'This gallery will be shown in the about page gallery';
        return view('dashboard.about.aboutgallery.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Gallery';
        $page_description = 'This gallery will be shown in the about page gallery';
        return view('dashboard.about.aboutgallery.create', compact('page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new About_gallery;
        if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/gallery', $fileName);
            $items->imagePath = $fileName;
        }
        $rules = [
            'imagePath' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->save();
        return redirect()->route('dashboard.about.gallery.index');
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
        About_Gallery::destroy($id);
        return redirect()->Route('dashboard.about.gallery.index');
    }
}
