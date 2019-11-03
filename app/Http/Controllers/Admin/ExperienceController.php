<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
      $experiences=Experience::latest()->get();
      return view('admin.experience.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('admin.experience.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $this->validate($request,[

             'title'=>'required',
             'duration'=>'required',
             'body'=>'required'

         ]);
         $experience=new Experience();
         $experience->title=$request->title;
         $experience->duration=$request->duration;
         $experience->body=$request->body;
         $experience->save();
         Toastr::success('Experience successfully save','success');
         return redirect()->route('experience.index');
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
         $experience=Experience::find($id);
         return view('admin.experience.edit',compact('experience'));
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
         $this->validate($request,[

             'title'=>'required',
             'duration'=>'required',
             'body'=>'required'

         ]);
         $experience=Experience::find($id);
         $experience->title=$request->title;
         $experience->duration=$request->duration;
         $experience->body=$request->body;
         $experience->save();
         Toastr::success('Experience successfully save','success');
         return redirect()->route('experience.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $experience=Experience::find($id)->delete();
         Toastr::success('Experience successfully Delete','success');
         return redirect()->back();
     }
}
