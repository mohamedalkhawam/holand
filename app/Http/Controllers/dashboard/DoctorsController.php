<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctors;
use App\Services_page;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Doctors::all();
        $services=Services_page::all();
        $page_title = 'Doctors';
        $page_description = '';
        return view('dashboard.doctors.index', compact('page_title', 'page_description', 'items','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=Services_page::all();
        $page_title = 'Doctors';
        $page_description = '';
        return view('dashboard.doctors.create', compact('page_title', 'page_description','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Doctors;
         if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/doctors', $fileName);
            $items->imagePath = $fileName;
        }

        //       $rules = [
        //       'name' => 'required',
        //     'description_en' => 'required',
        //     'description_nl' => 'required',
        //     'bio_en' => 'required',
        //     'bio_nl' => 'required',
        //     'education_en' => 'required',
        //     'education_nl' => 'required',
        //     'membership_en' => 'required',
        //     'membership_nl' => 'required',
        //     'languages' => 'required',
        //     'services_id' => 'required',
        //     'facebook' => 'required',
        //     'instagram' => 'required',
        //     'imagePath' => 'required'

        // ];
        // $validated =$this->validate($request,$rules);
        // if($validated > 0){
        // $items->name = $validated['name'];
        // $items->description_en = $validated['description_en'];
        // $items->description_nl = $validated['description_nl'];
        // $items->bio_en = $validated['bio_en'];
        // $items->bio_nl = $validated['bio_nl'];
        // $items->education_en = $validated['education_en'];
        // $items->education_nl = $validated['education_nl'];
        // $items->membership_en = $validated['membership_en'];
        // $items->membership_nl = $validated['membership_nl'];
        // $items->languages = $validated['languages'];
        // $items->services_id = $validated['services_id'];
        // $items->facebook = $validated['facebook'];
        // $items->twitter = $validated['instagram'];



        $items->name = $request->name;
        $items->description_en = $request->description_en;
        $items->description_nl = $request->description_nl;
        $items->bio_en = $request->bio_en;
        $items->bio_nl = $request->bio_nl;
        $items->education_en = $request->education_en;
        $items->education_nl = $request->education_nl;
        $items->membership_en = $request->membership_en;
        $items->membership_nl = $request->membership_nl;
        $items->languages = $request->languages;
        $items->services_id = $request->services_id;
        $items->facebook = $request->facebook;
        $items->instagram = $request->instagram;
        $items->save();
        return redirect()->route('dashboard.doctors.index');
     
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
        $items = Doctors::find($id);
        $services=Services_page::all();
        $page_title = 'Doctors';
        $page_description = '';
        return view('dashboard.doctors.edit', compact('page_title', 'page_description', 'items','services'));

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
        $items =  Doctors::find($id);
         if ($request->file('imagePath')) {
            $request->file('imagePath')->getClientOriginalName();
            $ext = $request->file('imagePath')->getClientOriginalExtension();
            $fileName = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->file('imagePath')->storeAs('public/doctors', $fileName);
            $items->imagePath = $fileName;
        }
     
        // if (!empty($items->imagePath)){
        //       $rules = [
        //     'name' => 'required',
        //     'description_en' => 'required',
        //     'description_nl' => 'required',
        //     'bio_en' => 'required',
        //     'bio_nl' => 'required',
        //     'education_en' => 'required',
        //     'education_nl' => 'required',
        //     'membership_en' => 'required',
        //     'membership_nl' => 'required',
        //     'languages' => 'required',
        //     'services_id' => 'required',
        //     'facebook' => 'required',
        //     'twitter' => 'required',
        //     'google' => 'required',
        //     // 'imagePath' => 'required'
        // ];
        // }else{

       
        //       $rules = [
        //       'name' => 'required',
        //     'description_en' => 'required',
        //     'description_nl' => 'required',
        //     'bio_en' => 'required',
        //     'bio_nl' => 'required',
        //     'education_en' => 'required',
        //     'education_nl' => 'required',
        //     'membership_en' => 'required',
        //     'membership_nl' => 'required',
        //     'languages' => 'required',
        //     'services_id' => 'required',
        //     'facebook' => 'required',
        //     'twitter' => 'required',
        //     'google' => 'required',
        //     'imagePath' => 'required'

        // ];
        // }
    
        $validated =$this->validate($request,$rules);
        $items->name = $validated['name'];
        $items->description_en = $validated['description_en'];
        $items->description_nl = $validated['description_nl'];
        $items->bio_en = $validated['bio_en'];
        $items->bio_nl = $validated['bio_nl'];
        $items->education_en = $validated['education_en'];
        $items->education_nl = $validated['education_nl'];
        $items->membership_en = $validated['membership_en'];
        $items->membership_nl = $validated['membership_nl'];
        $items->languages = $validated['languages'];
        $items->services_id = $validated['services_id'];
        $items->facebook = $validated['facebook'];
        $items->instagram = $validated['instagram'];
        $items->save();
        return redirect()->route('dashboard.doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Doctors::destroy($id);
        return redirect()->route('dashboard.doctors.index');
    }
}
