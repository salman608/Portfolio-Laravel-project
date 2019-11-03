<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Education;
use Brian2694\Toastr\Facades\Toastr;

class EducationController extends Controller
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
      $educations=Education::latest()->get();
      return view('admin.education.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('admin.education.create');
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
             'stitle'=>'required',
             'htitle'=>'required',
             'body'=>'required',
             'sbody'=>'required',
             'hbody'=>'required',

         ]);
         $education=new Education();
         $education->title=$request->title;
         $education->stitle=$request->stitle;
         $education->htitle=$request->htitle;
         $education->body=$request->body;
         $education->sbody=$request->sbody;
         $education->hbody=$request->hbody;
         $education->save();
         Toastr::success('Education successfully save','success');
         return redirect()->route('education.index');
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
         $education=Education::find($id);
         return view('admin.education.edit',compact('education'));
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
             'stitle'=>'required',
             'htitle'=>'required',
             'body'=>'required',
             'sbody'=>'required',
             'hbody'=>'required',

         ]);
         $education=Education::find($id);
         $education->title=$request->title;
         $education->stitle=$request->stitle;
         $education->htitle=$request->htitle;
         $education->body=$request->body;
         $education->sbody=$request->sbody;
         $education->hbody=$request->hbody;
         $education->save();
         Toastr::success('Education successfully Update','success');
         return redirect()->route('education.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $education=Education::find($id)->delete();
         Toastr::success('Education successfully Delete','success');
         return redirect()->back();
     }
}
