<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Myself;
use Carbon\Carbon;

class MyselfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
       {
         $myselfs=Myself::latest()->get();
         return view('admin.myself.index',compact('myselfs'));
       }

       /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            return view('admin.myself.create');
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

                'facebook'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'address'=>'required',
                'linkedin'=>'required',

            ]);


            $myself=new Myself();
            $myself->facebook=$request->facebook;
            $myself->phone=$request->phone;
            $myself->email=$request->email;
            $myself->address=$request->address;
            $myself->linkedin=$request->linkedin;

            $myself->save();
            Toastr::success('Myself successfully save','success');
            return redirect()->route('myself.index');
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
            $myself=Myself::find($id);
            return view('admin.myself.edit',compact('myself'));
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

                'facebook'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'linkedin'=>'required',


            ]);


            $myself=Myself::find($id);
            $myself->facebook=$request->facebook;
            $myself->phone=$request->phone;
            $myself->email=$request->email;
            $myself->address=$request->address;
            $myself->linkedin=$request->linkedin;
            $myself->save();
            Toastr::success('Myself successfully save','success');
            return redirect()->route('myself.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $myself=Myself::find($id)->delete();
            Toastr::success('Myself successfully Delete','success');
            return redirect()->back();
        }
}
