<?php

namespace App\Http\Controllers\dashboard\appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reason;
class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Reason::all();
        $page_title = 'Why Us Screen';
        $page_description = '';
        return view('dashboard.appointment.reason.index', compact('page_title', 'page_description', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Why Us Screen';
        $page_description = '';
        return view('dashboard.appointment.reason.create', compact('page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items= new Reason;
        $rules= [
            'title_en'=>'required',
            'title_nl'=>'required',
        ];
        $validated=$this->validate($request,$rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl=$validated['title_nl'];
        $items->save();
        return redirect()->route('dashboard.appointment.reason.index');
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
        $items = Reason::find($id);
        $page_title = 'Why Us Screen';
        $page_description = '';
        return view('dashboard.appointment.reason.edit', compact('page_title', 'page_description', 'items'));
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
        $items=  Reason::find($id);
        $rules= [
            'title_en'=>'required',
            'title_nl'=>'required',
        ];
        $validated=$this->validate($request,$rules);
        $items->title_en = $validated['title_en'];
        $items->title_nl=$validated['title_nl'];
        $items->save();
        return redirect()->route('dashboard.appointment.reason.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reason::destroy($id);
        return redirect()->Route('dashboard.appointment.reason.index');
    }
}
