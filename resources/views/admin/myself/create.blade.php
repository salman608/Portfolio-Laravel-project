@extends('layouts.backend.app')

@section('title','skillList')

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
                               Add Newmyself
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('myself.store') }}" method="post">
                             @csrf
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="facebook" class="form-control" name="facebook">
                                       <label class="form-label"> Facebook</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="phone" class="form-control" name="phone">
                                       <label class="form-label"> Phone</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="email" class="form-control" name="email">
                                       <label class="form-label"> Email</label>
                                   </div>
                               </div>
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="address" class="form-control" name="address">
                                       <label class="form-label"> Address</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="tect" id="image" class="form-control" name="linkedin">
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
