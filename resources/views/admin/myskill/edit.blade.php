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
                               Update MySkill
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('myskill.update',$myskill->id) }}" method="post">
                             @csrf
                             @method('PUT')
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="name" class="form-control" name="name" value="{{ $myskill->name }}">
                                       <label class="form-label">Skill Name</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="level" class="form-control" name="level" value="{{ $myskill->level }}">
                                       <label class="form-label">Skill Level</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="color" class="form-control" name="color" value="{{ $myskill->color }}">
                                       <label class="form-label">Skill Color</label>
                                   </div>
                               </div>

                               <a href="{{ route('myskill.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
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
