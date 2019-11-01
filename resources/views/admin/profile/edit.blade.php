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
                               Update About
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('profile.update',$profile->id) }}" method="post" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="form-group form-float">
                                 <div class="form-line">
                                     <input type="text" id="name" class="form-control" name="name" value="{{ $profile->name }}">
                                     <label class="form-label"> Name</label>
                                 </div>
                             </div>

                             <div class="form-group form-float">
                                 <div class="form-line">
                                     <input type="text" id="position" class="form-control" name="position" value="{{ $profile->position }}">
                                     <label class="form-label"> Position</label>
                                 </div>
                             </div>

                             <div class="form-group form-float">
                                 <div class="form-line">
                                     <input type="text" id="company" class="form-control" name="company" value="{{ $profile->company }}">
                                     <label class="form-label"> Company</label>
                                 </div>
                             </div>

                             <div class="form-group form-float">
                                 <div class="form-line">
                                     <input type="file" id="image" class="form-control" name="image">
                                     <label class="form-label"> Image</label>
                                 </div>
                             </div>


                               <a href="{{ route('profile.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
                               <button type="submit" class="btn btn-primary m-t-15 waves-effect"> UPDATE </button>


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
