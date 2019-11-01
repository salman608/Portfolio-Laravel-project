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
                               Update Education
                           </h2>

                       </div>
                       <div class="body">
                           <form action="{{ route('education.update',$education->id) }}" method="post">
                             @csrf
                             @method('PUT')
                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="title" class="form-control" name="title" value="{{ $education->title }}">
                                       <label class="form-label">Education Title</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <textarea name="body" id="tinymce" rows="8" cols="80" class="form-control">{{ $education->body }}</textarea>

                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="stitle" class="form-control" name="stitle" value="{{ $education->stitle }}">
                                       <label class="form-label">Education Title</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                     <label class="form-label">Education Description</label>
                                       <textarea name="sbody" id="tinymce" rows="8" cols="80" class="form-control">{{ $education->sbody }}</textarea>
                                       <label class="form-label">Education Description</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                       <input type="text" id="htitle" class="form-control" name="htitle" value="{{ $education->htitle }}">
                                       <label class="form-label">Education Title</label>
                                   </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="form-line">
                                     <label class="form-label">Education Description</label>
                                       <textarea name="hbody" id="tinymce" rows="8" cols="80" class="form-control">{{ $education->hbody }}</textarea>
                                       <label class="form-label">Education Description</label>
                                   </div>
                               </div>


                               <a href="{{ route('education.index') }}" class="btn btn-danger m-t-15 waves-effect"> BACK </a>
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
  <script src="{{asset('backend/plugins/tinymce/tinymce.js')}}"></script>

   <script type="text/javascript">

   $(function () {


   //TinyMCE
   tinymce.init({
       selector: "textarea#tinymce",
       theme: "modern",
       height: 300,
       plugins: [
           'advlist autolink lists link image charmap print preview hr anchor pagebreak',
           'searchreplace wordcount visualblocks visualchars code fullscreen',
           'insertdatetime media nonbreaking save table contextmenu directionality',
           'emoticons template paste textcolor colorpicker textpattern imagetools'
       ],
       toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
       toolbar2: 'print preview media | forecolor backcolor emoticons',
       image_advtab: true
   });
   tinymce.suffix = ".min";
   tinyMCE.baseURL = '{{asset('backend/plugins/tinymce')}}';
});

   </script>
@endpush
