<?php

namespace App\Http\Controllers\dashboard;

use App\Home_page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Symfony\Component\Console\Input\Input;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Home_page::all();
        $page_title = 'Home';
        $page_description = '';
        return view('dashboard.home.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create';
        $page_description = '';
        return view('dashboard.home.create', compact('page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Home_page;
        if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/home', $fileName);
            $items->imagePath = $fileName;
        } else {
            $fileName = '';
        }
        $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'description_en' => 'required',
            'description_nl' => 'required',
            'imagePath' => 'required'
        ];
        $validated = $this->validate($request, $rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl = $validated['title_nl'];
        $items->description_en = $validated['description_en'];
        $items->description_nl = $validated['description_nl'];
        $items->save();
        return redirect()->route('dashboard.home.index');
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
        $page_title = 'Edit';
        $page_description = 'your home page content here!';
        $items = Home_page::find($id);
        return view('dashboard.home.edit', compact('page_title', 'page_description', 'items'));
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
        $items = Home_page::find($id);
        if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/home', $fileName);
            $items->imagePath = $fileName;
        } else {
            $fileName = '';
        }
        $rules = [
            'title_en' => 'required',
            'title_nl' => 'required',
            'description_en' => 'required',
            'description_nl' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl = $validated['title_nl'];
        $items->description_en = $validated['description_en'];
        $items->description_nl = $validated['description_nl'];
        $items->save();
        return redirect()->route('dashboard.home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Home_page::destroy($id);
        return redirect()->Route('dashboard.home.index');
    }
}
