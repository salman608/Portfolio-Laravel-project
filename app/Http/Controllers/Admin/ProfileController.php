<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Brian2694\Toastr\Facades\Toastr;

use Carbon\Carbon;

class ProfileController extends Controller
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
        $profiles=Profile::latest()->get();
        return view('admin.profile.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
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
            'position'=>'required',
            'company'=>'required',

        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/profile'))
            {
                mkdir('uploads/profile',0777,true);
            }
            $image->move('uploads/profile',$imagename);
        }else{
            $imagename = "default.png";
        }
        $profile=new Profile();
        $profile->name=$request->name;
        $profile->position=$request->position;
        $profile->company=$request->company;
        $profile->image = $imagename;
        $profile->save();
        Toastr::success('Profile Successfully Saved :)' ,'Success');
        return redirect()->route('profile.index');
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
        $profile=Profile::find($id);
       return view('admin.profile.edit',compact('profile'));
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
            'position'=>'required',
            'company'=>'required',

        ]);
     $profile=Profile::find($id);
     $image=$request->file('image');
      $slug=str_slug($request->title);
      if(isset($image))
      {
        $currentData= Carbon::now()->toDateString();
        $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
        $image->getClientOriginalExtension();
        if(!file_exists('uploads/profile')){
            mkdir('uploads/profile',0777,true);
        }
        $image->move('uploads/profile',$imagename);
      }else{
        $imagename=$profile->image;
        }


        $profile->name=$request->name;
        $profile->position=$request->position;
        $profile->company=$request->company;
        $profile->image = $imagename;
        $profile->save();
        Toastr::success('Profile Successfully Update :)' ,'Success');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $profile= Profile::find($id);
      if(file_exists('uploads/profile/'.$profile->image))
      {
        unlink('uploads/profile/'.$profile->image);
      }
      $profile->delete();
      Toastr::success('Profile successfully Delete','success');
      return redirect()->back();
    }

}
