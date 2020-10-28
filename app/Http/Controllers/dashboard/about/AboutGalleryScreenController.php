<?php

namespace App\Http\Controllers\dashboard\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About_gallery_screen;

class AboutGalleryScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = About_gallery_screen::all();
        $page_title = 'Gallery Screen';
        $page_description = 'be Creative';
        return view('dashboard.about.galleryscreen.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Gallery Screen';
        $page_description = 'be creative';
        return view('dashboard.about.galleryscreen.create', compact('page_title', 'page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = About_gallery_screen::find($id);
        $page_title = 'Edit Gallery Screen';
        $page_description = 'You Can Edit Gallery Screen Content';
        return view('dashboard.about.galleryscreen.edit', compact('page_title', 'page_description', 'items'));    
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
        $items = About_gallery_screen::find($id);
         if ($request->file('first_image_path')) {
            $request->file('first_image_path')->getClientOriginalName();
            $ext = $request->file('first_image_path')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('first_image_path')->storeAs('public/gallery', $fileName);
            $items->first_image_path = $fileName;
        }
         if ($request->file('second_image_path')) {
            $request->file('second_image_path')->getClientOriginalName();
            $ext = $request->file('second_image_path')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('second_image_path')->storeAs('public/gallery', $fileName);
        }
        if (!empty($items->first_image_path) && !empty($items->second_image_path)){
              $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'first_paragraph_en' => 'required',
            'first_paragraph_nl' => 'required',
            'second_paragraph_en' => 'required',
            'second_paragraph_nl' => 'required',
            'first_sentence_en' => 'required',
            'first_sentence_nl' => 'required',
            'second_sentence_en' => 'required',
            'second_sentence_nl' => 'required',
            //  'first_image_path' => "required",
            // 'second_image_path' => 'required'
        ];
        }else{

       
              $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'first_paragraph_en' => 'required',
            'first_paragraph_nl' => 'required',
            'second_paragraph_en' => 'required',
            'second_paragraph_nl' => 'required',
            'first_sentence_en' => 'required',
            'first_sentence_nl' => 'required',
            'second_sentence_en' => 'required',
            'second_sentence_nl' => 'required',
             'first_image_path' => "required",
            'second_image_path' => 'required'
        ];
        }
    
        $validated =$this->validate($request,$rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl = $validated['title_nl'];
        $items->first_paragraph_en = $validated['first_paragraph_en'];
        $items->first_paragraph_nl = $validated['first_paragraph_nl'];
        $items->second_paragraph_en = $validated['second_paragraph_en'];
        $items->second_paragraph_nl = $validated['second_paragraph_nl'];
        $items->first_sentence_en = $validated['first_sentence_en'];
        $items->first_sentence_nl = $validated['first_sentence_nl'];
        $items->second_sentence_en = $validated['second_sentence_en'];
        $items->second_sentence_nl = $validated['second_sentence_nl'];
        $items->save();
        return redirect()->route('dashboard.about.galleryscreen.index');
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

