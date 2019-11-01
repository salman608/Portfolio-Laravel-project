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
                               Update Experience
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('experience.update',$experience->id) }}" method="post">
                             @csrf
                             @method('PUT')
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="title" class="form-control" name="title" value="{{ $experience->title }}">
                                       <label class="form-label">Experience Name</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="duration" class="form-control" name="duration" value="{{ $experience->duration }}">
                                       <label class="form-label">Experience Duration</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <textarea name="body" rows="8" cols="80" class="form-control">{{ $experience->body }}</textarea>
                                       <label class="form-label">Experience Description</label>
                                   </div>
                               </div>


                               <a href="{{ route('experience.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
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
