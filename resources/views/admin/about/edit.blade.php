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
                           <form action="{{ route('about.update',$about->id) }}" method="post">
                             @csrf
                             @method('PUT')
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="title" class="form-control" name="title" value="{{ $about->title }}">
                                       <label class="form-label">Title</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="name" class="form-control" name="name" value="{{ $about->name }}">
                                       <label class="form-label">Name</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                      <textarea name="body" rows="8" cols="80" class="form-control">{{ $about->body }}</textarea>
                                       <label class="form-label">About yout self</label>
                                   </div>
                               </div>

                               <a href="{{ route('about.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
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
