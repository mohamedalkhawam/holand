<?php

namespace App\Http\Controllers\dashboard\services;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service_cases;
use App\Services_page;
use App\Doctors;

class ServiceCasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Service_cases::all();
        $page_title = 'Services Cases';
        $page_description = 'Some description for the page';
        return view('dashboard.services.servicescases.index', compact('items', 'page_title', 'page_description'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services_page::all();
        $doctors = Doctors::all();
        $page_title = 'Services Cases';
        $page_description = 'Some description for the page';
        return view('dashboard.services.servicescases.create', compact('page_title', 'page_description', 'services', 'doctors'));
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
        if ($request->file('imagePath_before')) {
            $request->file('imagePath_before')->getClientOriginalName();
            $ext = $request->file('imagePath_before')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath_before')->storeAs('public/home', $fileName);
            $items->imagePath = $fileName;
        } else {
            $fileName = '';
        }

        if ($request->file('imagePath_after')) {
            $request->file('imagePath_after')->getClientOriginalName();
            $ext = $request->file('imagePath_after')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath_after')->storeAs('public/home', $fileName);
            $items->imagePath = $fileName;
        } else {
            $fileName = '';
        }

        $rules = [
            'services_id' => 'required',
            'short_story_en' => 'required',
            'short_story_nl' => 'required',
            'initial_problem_en' => 'required',
            'initial_problem_nl' => 'required',
            'cost' => 'required',
            'doctor_id' => 'required',
            'imagePath_before' => 'required',
            'imagePath_after' => 'required',
        ];
        $validated = $this->validate($request, $rules);
        $items->services_id = $validated['services_id'];
        $items->short_story_en = $validated['short_story_en'];
        $items->short_story_nl = $validated['short_story_nl'];
        $items->initial_problem_en = $validated['initial_problem_en'];
        $items->initial_problem_nl = $validated['initial_problem_nl'];
        $items->cost = $validated['cost'];
        $items->doctor_id = $validated['doctor_id'];
        $items->save();
        return redirect()->route('dashboard.services.servicecases.index');
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
        //
    }
}
