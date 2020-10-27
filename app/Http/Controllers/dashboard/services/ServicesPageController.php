<?php

namespace App\Http\Controllers\dashboard\services;

use App\Http\Controllers\Controller;
use App\Services_Gallery;
use Illuminate\Http\Request;
use App\Services_page;
use Illuminate\Contracts\Validation\Validator;


class ServicesPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Services_page::all();
        $page_title = 'Services';
        $page_description = 'Some description for the page';

        return view('dashboard.services.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create';
        $page_description = 'Some description for the page';
        return view('dashboard.services.create', compact('page_title', 'page_description'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Services_page;
        $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'keywords_en' => 'required',
            'keywords_nl' => 'required',
            'description_en' => 'required',
            'description_nl' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl = $validated['title_nl'];
        $items->keywords_en = $validated['keywords_en'];
        $items->keywords_nl = $validated['keywords_nl'];
        $items->description_en = $validated['description_en'];
        $items->description_nl = $validated['description_nl'];
        $items->save();
        return redirect()->route('dashboard.services.service.index');
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

        $items = Services_page::find($id);
        $page_title = 'Edit';
        $page_description = 'your Services page content here!';
        return view('dashboard.services.edit', compact('page_title', 'page_description', 'items'));
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
        $items = Services_page::find($id);

        $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'keywords_en' => 'required',
            'keywords_nl' => 'required',
            'description_en' => 'required',
            'description_nl' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl = $validated['title_nl'];
        $items->keywords_en = $validated['keywords_en'];
        $items->keywords_nl = $validated['keywords_nl'];
        $items->description_en = $validated['description_en'];
        $items->description_nl = $validated['description_nl'];
        $items->save();
        return redirect()->route('dashboard.services.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services_page::destroy($id);
        return redirect()->Route('dashboard.services.service.index');
    }
}
