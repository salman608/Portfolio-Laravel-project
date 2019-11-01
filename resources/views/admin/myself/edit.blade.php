@extends('layouts.backend.app')

@section('title','SkillUpdate')

@push('css')

@endpush

@section('content')

  <div class="container-fluid">


           <!-- Vertical Layout | With Floating Label -->
           <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="card">
                       <div class="header">
                           <h2>
                               Update Myself
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('myself.update',$myself->id) }}" method="post">
                             @csrf
                             @method('PUT')
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="facebook" class="form-control" name="facebook" value="{{ $myself->facebook }}">
                                       <label class="form-label">Facebook</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="phone" class="form-control" name="phone" value="{{ $myself->phone }}">
                                       <label class="form-label"> Phone</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="email" class="form-control" name="email" value="{{ $myself->email }}">
                                       <label class="form-label"> Email</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="address" class="form-control" name="address" value="{{ $myself->address }}">
                                       <label class="form-label"> Address</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="linkedin" class="form-control" name="linkedin" value="{{ $myself->linkedin }}">
                                       <label class="form-label"> Linkedin</label>
                                   </div>
                               </div>

                               <a href="{{ route('myself.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
                               <button type="submit" class="btn btn-primary m-t-15 waves-effect"> PUBLISH </button>


                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Vertical Layout | With Floating Label -->




       </div>

@endsection

@push('js')

@endpush
