 @extends('layouts.admin')
 @section('title','Tao Strogpoint')

 @section('styles')

  <link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />
@endsection

 @section('content')

 <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
               
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminStrongController@store','class'=>'form','files'=>true]) !!}
                             
                                     <div class="form-group m-t-40 row">                                      
                                        {!! Form::label('title', 'Title',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">                                            
                                            {!! Form::text('title', null, ['class'=>'form-control'])!!}
                                        </div>
                                     </div>                                   
                                   <div class="form-group row">
                                           {!! Form::label('image', 'Image',['class' => 'col-2 col-form-label']) !!}
                                           {!! Form::file('image', null, ['class'=>'form-control'])!!}
                                   </div>  

                                    <div class="form-group row">
                                        {!! Form::label('content', 'Content',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::textarea('content', null, ['class'=>'form-control summernote '])!!}
                                        </div>                                        
                                    </div>

                                    <div class="button-group">                                        
                                            {!! Form::submit('Thêm Mới', ['class'=>'btn btn-rounded btn-primary col-sm-6']) !!}                                   
                                        </div>
                                
                            </div>
                                </form>
                                {!! Form::close() !!}

                            

                        </div>
                        
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
 @endsection       

 @section('script')

    <script src="{{asset('assets/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>

 @endsection









