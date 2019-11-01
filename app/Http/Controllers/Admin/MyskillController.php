<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Myskill;
class MyskillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $myskills=Myskill::latest()->get();
      return view('admin.myskill.index',compact('myskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.myskill.create');
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
            'name'=>'required',
            'level'=>'required',
            'color'=>'required',

          ]);
          $myskill=new Myskill();
          $myskill->name=$request->name;
          $myskill->level=$request->level;
          $myskill->color=$request->color;
          $myskill->save();
          Toastr::success('Myskill successfully save','success');
          return redirect()->route('myskill.index');
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
        $myskill=Myskill::find($id);
  return view('admin.myskill.edit',compact('myskill'));
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
        'name'=>'required',
        'level'=>'required',
        'color'=>'required',

      ]);
      $myskill=Myskill::find($id);
      $myskill->name=$request->name;
      $myskill->level=$request->level;
      $myskill->color=$request->color;
      $myskill->save();
      Toastr::info('Myskill successfully Update','info');
      return redirect()->route('myskill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myskill=Myskill::find($id)->delete();
        Toastr::success('Myskill successfully Delete','success');
        return redirect()->back();
    }
}
