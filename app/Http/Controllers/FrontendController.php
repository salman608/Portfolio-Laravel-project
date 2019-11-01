<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myself;
use App\About;
use App\Skill;
use App\Expertise;
use App\Myskill;
use App\Experience;
use App\Profile;
use App\Education;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myself=Myself::latest()->take(1)->get();
        $about=About::latest()->take(1)->get();
        $skill=Skill::latest()->take(4)->get();
        $expertise=Expertise::latest()->take(3)->get();
        $myskill=Myskill::latest()->get();
        $experience=Experience::latest()->get();
        $profile=Profile::latest()->take(1)->get();
        $education=Education::get();

        return view('homepage',compact('myself','about','skill','expertise','myskill','experience','profile','education'));
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
