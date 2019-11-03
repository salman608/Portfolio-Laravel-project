<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expertise;
use Brian2694\Toastr\Facades\Toastr;


class ExpertiseController extends Controller
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
        $expertise=Expertise::latest()->get();
        return view('admin.expertise.index',compact('expertise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expertise.create');
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
            'body'=>'required'

        ]);
        $expertise=new Expertise();
        $expertise->name=$request->name;
        $expertise->icon=$request->icon;
        $expertise->body=$request->body;
        $expertise->save();
        Toastr::success('Expertise successfully save','success');
        return redirect()->route('expertise.index');
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
        $expertise=Expertise::find($id);
        return view('admin.expertise.edit',compact('expertise'));
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
            'body'=>'required'

        ]);
        $expertise=Expertise::find($id);
        $expertise->name=$request->name;
        $expertise->icon=$request->icon;
        $expertise->body=$request->body;
        $expertise->save();
        Toastr::success('expertise successfully save','success');
        return redirect()->route('expertise.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expertise=Expertise::find($id)->delete();
        Toastr::success('expertise successfully Delete','success');
        return redirect()->back();
    }
}
